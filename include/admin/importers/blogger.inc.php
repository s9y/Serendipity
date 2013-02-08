<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/****************************************************************
 *  	Blogger Importer v0.2, by Jawish Hameed (jawish.org)  	*
 ****************************************************************/

require_once S9Y_PEAR_PATH . 'HTTP/Request.php';

class Serendipity_Import_Blogger extends Serendipity_Import {
    var $info        = array('software' => 'Blogger.com [using API]');
    var $data        = array();
    var $inputFields = array();
    
    
    function Serendipity_Import_Blogger($data) {
        global $serendipity;

        $this->data = $data;
        $this->inputFields = array(array('text'    => 'Category',
                                         'type'    => 'list',
                                         'name'    => 'bCategory',
                                         'value'   => 0,
                                         'default' => $this->_getCategoryList()),
                                   
                                   array('text'    => ACTIVATE_AUTODISCOVERY,
                                         'type'    => 'bool',
                                         'name'    => 'autodiscovery',
                                         'default' => 'false'),
                                   
                                   array('text'    => CHARSET,
                                         'type'    => 'list',
                                         'name'    => 'bCharset',
                                         'value'   => 'UTF-8',
                                         'default' => $this->getCharsets())
								);
    }
    
	function getImportNotes(){
		if (empty($_REQUEST['token'])) {
			$msg = 'In order to import your blog on Blogger, Serendipity needs to be able to access it via Google\'s Blogger Data APIs.';
			$msg .= 'Login to your Google/Blogger account and then click the link below.';
			$msg .= '<a class="block_level standalone" href="https://www.google.com/accounts/AuthSubRequest?scope=http%3A%2F%2Fwww.blogger.com%2Ffeeds%2F&session=1&secure=0&next='. urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) .'">Go to Google to grant access</a>';
			return $msg;
		} else {
			return '';
		}
	}
    
    function validateData() {
        return sizeof($this->data);
    }
	
    function getInputFields() {
    	// Make sure Google login has been completed
    	if (!empty($_REQUEST['token'])) {
    			
			// Prepare session token request
			$req = new HTTP_Request('https://www.google.com/accounts/AuthSubSessionToken');
			$req->addHeader('Authorization', 'AuthSub token="'. $_REQUEST['token'] .'"');
					
			// Request token
			$req->sendRequest();
			
			// Handle token reponse
			if ($req->getResponseCode() != '200') return;
			
			// Extract Auth token
			preg_match_all('/^(.+)=(.+)$/m', $req->getResponseBody(), $matches);
			$tokens = array_combine($matches[1], $matches[2]);
			unset($matches);
						
			// Add hidden auth token field to input field list
			array_unshift($this->inputFields, array( 'text'    => 'Google Auth Token (leave alone)',
			                                         'type'    => 'input',
			                                         'name'    => 'bAuthToken',
			                                         'default'   => $tokens['Token']));

			// Prepare blog list request
			$req = new HTTP_Request('http://www.blogger.com/feeds/default/blogs');
			$req->addHeader('GData-Version', 2);
			$req->addHeader('Authorization', 'AuthSub token="'. $tokens['Token'] .'"');
			
			// Fetch blog list
			$req->sendRequest();
			
			// Handle errors
			if ($req->getResponseCode() != '200') return false;
			
			// Load list
			$bXml = simplexml_load_string($req->getResponseBody());
			
			// Generate list of the blogs under the authenticated account
			$bList = array();
			foreach ($bXml->entry as $entry) {
				$bList[substr($entry->id, strpos($entry->id, 'blog-') + 5)] = $entry->title;
			}
			
			// Add blog list to input fields for selection
			array_unshift($this->inputFields, array('text'    => 'Blog to import',
													'type'    => 'list',
													'name'    => 'bId',
													'value'   => 0,
													'default' => $bList));
			
	        return $this->inputFields;
	    } else {
			return array();
		}
    }
	
	function _getCategoryList() {
		$res = serendipity_fetchCategories('all');
		$ret = array(0 => NO_CATEGORY);
		if (is_array($res)) {
			foreach ($res as $v) {
				$ret[$v['categoryid']] = $v['category_name'];
			}
		}
		return $ret;
	}
    
	function import() {
		global $serendipity;
		
		// Force user to select a blog to act on
		if (empty($this->data['bId']) || $this->data['bId'] == 0) {
			echo 'Please select a blog to import!';
			return false;
		}
		
		// Save this so we can return it to its original value at the end of this method.
        $noautodiscovery = isset($serendipity['noautodiscovery']) ? $serendipity['noautodiscovery'] : false;

        if ($this->data['autodiscovery'] == 'false') {
            $serendipity['noautodiscovery'] = 1;
        }

        $this->getTransTable();
        		
		// Prepare export request
		$req = new HTTP_Request('http://www.blogger.com/feeds/'. $this->data['bId'] .'/archive');
		$req->addHeader('GData-Version', 2);
		$req->addHeader('Authorization', 'AuthSub token="'. $this->data['bAuthToken'] .'"');
				
		// Attempt fetch blog export
		$req->sendRequest();
		
		// Handle errors
		if ($req->getResponseCode() != '200') {
			echo "Error occured while trying to export the blog.";
			return false;
		}
		
		// Export success
		echo '<span class="block_level">Successfully exported entries from Blogger</span>';
		
		// Get Serendipity authors list
		$authorList = array();
		$s9y_users = serendipity_fetchUsers();
		foreach ($s9y_users as $user) {
			$authorList[$user['authorid']] = $user['username'];
		}
		unset($s9y_users);
		
		// Load export
		$bXml = simplexml_load_string($req->getResponseBody());
		
		// Process entries
		$entryList = $entryFailList = array();
		foreach ($bXml->entry as $bEntry) {
			
			// Check entry type
			switch ($bEntry->category['term']) {
			case 'http://schemas.google.com/blogger/2008/kind#post':
				// Process posts:
				
				// Create author if not in serendipity
				$author = (string) $bEntry->author->name;
				if (!array_search($author, $authorList)) {
					serendipity_db_insert(	'authors', 
											array(	'right_publish' => 1,
													'realname'      => $author,
													'username'      => $author,
													'userlevel'     => 0,
													'password'      => md5($defaultpass))
											);
					$authorid = serendipity_db_insert_id('authors', 'authorid');
					$authorList[$authorid] = $author;
				}
				
				$sEntry = array('title'          => $this->decode((string) $bEntry->title),
								'isdraft'        => ($bEntry->children('http://purl.org/atom/app#')->control->draft == 'yes') ? 'true' : 'false',
								'allow_comments' => (count($bEntry->xpath("*[@rel='replies']")) > 0) ? 'true' : 'false',
								'timestamp'      => strtotime($bEntry->published),
								'body'           => $this->strtr((string) $bEntry->content),
								'extended'       => '',
								'categories'     => $this->data['bCategory'],
								'author'         => $author,
								'authorid'       => $authorid
								);
				
				// Add entry to s9y
				echo '..~.. ';
			    if (is_int($id = serendipity_updertEntry($sEntry))) {
			        // Add entry id to processed table for later lookups
			    	$entryList[(string) $bEntry->id] = array($id, $sEntry['title'], 0);
			    } else {
			    	// Add to fail list
			    	$entryFailList[] = $sEntry['title'];
			    }
			    
				break;
				
			case 'http://schemas.google.com/blogger/2008/kind#comment':
				// Process comments:
				
				// Extract entry id for comment
				$cEntryId = $bEntry->xpath("thr:in-reply-to[@ref]");
				$cEntryId = (string) $cEntryId[0]['ref'];
				
				// Check to make sure the related entry has been added to s9y
				if (array_key_exists($cEntryId, $entryList)) {
					// Add to s9y
					$sComment = array(	'entry_id ' => $entryList[$cEntryId][0],
										'parent_id' => 0,
										'timestamp' => strtotime($bEntry->published),
										'author'    => (string) $bEntry->author->name,
										'email'     => (string) $bEntry->author->email,
										'url'       => (string) (isset($bEntry->author->uri)) ? $bEntry->author->uri : '',
										'ip'        => '',
										'status'    => 'approved',
										'body'      => $this->strtr((string) $bEntry->content),
										'subscribed'=> 'false',
										'type'      => 'NORMAL'
										);
					serendipity_db_insert('comments', $sComment);
					
					// Update entry list with comment count
					$entryList[$cEntryId][2]++;
				}
				
				break;
			}
			
		}
		
		// Report on resultant authors
		echo '<span class="block_level">Current list of authors: </span>'. join(', ', array_values($authorList));
		
		// Do cleanup and report on entries
		echo '<span class="block_level">The following entries were successfully imported:</span>';
		echo '<ul>';
		foreach ($entryList as $eId => $eDetails) {
			// Update comment count for entry in s9y
			serendipity_db_query("UPDATE ". $serendipity['dbPrefix'] ."entries SET comments = ". $eDetails[2] ." WHERE id = ". $eDetails[0]);
			
			echo '<li>'. $eDetails[1] .' comments('. $eDetails[2] .')</li>';
		}
		echo '</ul>';
		
		// Report fails
		echo '<span class="block_level">The following entries ran into trouble and was not imported:</span>';
		echo '<ul>';
		foreach ($entryFailList as $eId => $eDetails) {
			echo '<li>'. $eDetails .'</li>';
		}
		echo '</ul>';
				
		// Reset autodiscovery
		$serendipity['noautodiscovery'] = $noautodiscovery;
		
		// All done!
		echo '<span class="msg_notice">Import finished.</span>';
		return true;
	}

}

return 'Serendipity_Import_Blogger';

?>
