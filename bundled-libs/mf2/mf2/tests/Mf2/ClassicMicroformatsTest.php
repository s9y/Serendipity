<?php

/**
 * Tests of the parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2\Parser;
use Mf2;
use PHPUnit_Framework_TestCase;

/**
 * Classic Microformats Test
 *
 * Contains tests of the classic microformat => µf2 functionality.
 *
 * Mainly based off BC tables on http://microformats.org/wiki/microformats2#v2_vocabularies
 */
class ClassicMicroformatsTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	public function testParsesClassicHcard() {
		$input = '<div class="vcard"><span class="fn n">Barnaby Walters</span> is a person.</div>';
		$expected = '{"items": [{"type": ["h-card"], "properties": {"name": ["Barnaby Walters"]}}], "rels": {}, "rel-urls": {}}';
		$parser = new Parser($input, '', true);
		$this->assertJsonStringEqualsJsonString(json_encode($parser->parse()), $expected);
	}

	public function testParsesClassicHEntry() {
		$input = '<div class="hentry"><h1 class="entry-title">microformats2 Is Great</h1> <p class="entry-summary">yes yes it is.</p></div>';
		$expected = '{"items": [{"type": ["h-entry"], "properties": {"name": ["microformats2 Is Great"], "summary": ["yes yes it is."]}}], "rels": {}, "rel-urls": {}}';
		$parser = new Parser($input, '', true);
		$this->assertJsonStringEqualsJsonString(json_encode($parser->parse()), $expected);
	}

	public function testIgnoresClassicClassnamesUnderMf2Root() {
		$input = <<<EOT
<div class="h-entry">
	<p class="author">Not Me</p>
	<p class="p-author h-card">I wrote this</p>
</div>
EOT;
		$parser = new Parser($input);
		$result = $parser->parse();
		$this->assertEquals('I wrote this', $result['items'][0]['properties']['author'][0]['properties']['name'][0]);

	}

	public function testIgnoresClassicPropertyClassnamesOutsideClassicRoots() {
		$input = <<<EOT
<p class="author">Mr. Invisible</p>
EOT;
		$parser = new Parser($input);
		$result = $parser->parse();
		$this->assertCount(0, $result['items']);
	}

	public function testParsesFBerrimanClassicHEntry() {
		$input = <<<EOT
<article id="post-976" class="post-976 post type-post status-publish format-standard hentry category-speaking category-web-dev tag-conferences tag-front-trends tag-fronttrends tag-speaking tag-txjs">
	<header class="entry-header">
		<h1 class="entry-title">
			<a href="http://fberriman.com/2013/05/14/april-recap-txjs-front-trends/" rel="bookmark">April recap &#8211; TXJS &#038; Front-Trends</a>
		</h1>

		<div class="entry-meta">
			<span class="date">
				<a href="http://fberriman.com/2013/05/14/april-recap-txjs-front-trends/" title="Permalink to April recap &#8211; TXJS &amp; Front-Trends" rel="bookmark">
					<time class="entry-date" datetime="2013-05-14T11:54:06+00:00">May 14, 2013</time>
				</a>
			</span>
			<span class="categories-links">
				<a href="http://fberriman.com/category/speaking/" title="View all posts in Speaking" rel="category tag">Speaking</a>,
				<a href="http://fberriman.com/category/web-dev/" title="View all posts in Web Dev" rel="category tag">Web Dev</a>
			</span>
			<span class="tags-links">
				<a href="http://fberriman.com/tag/conferences/" rel="tag">conferences</a>,
				<a href="http://fberriman.com/tag/front-trends/" rel="tag">front-trends</a>,
				<a href="http://fberriman.com/tag/fronttrends/" rel="tag">fronttrends</a>,
				<a href="http://fberriman.com/tag/speaking/" rel="tag">Speaking</a>,
				<a href="http://fberriman.com/tag/txjs/" rel="tag">txjs</a>
			</span>
			<span class="author vcard"><a class="url fn n" href="http://fberriman.com/author/admin/" title="View all posts by Frances" rel="author">Frances</a></span>					</div>
	</header>

		<div class="entry-content">
		<p>April was pretty decent.  I got to attend two very good conferences <strong>and</strong> I got to speak at them.</p>
			</div>

	<footer class="entry-meta">
		<div class="comments-link">
			<a href="http://fberriman.com/2013/05/14/april-recap-txjs-front-trends/#respond" title="Comment on April recap &#8211; TXJS &amp; Front-Trends"><span class="leave-reply">Leave a comment</span></a>
		</div>

	</footer><!-- .entry-meta -->
</article><!-- #post -->
EOT;
		$parser = new Parser($input);
		$result = $parser->parse();
		$e = $result['items'][0];
		$this->assertContains('h-entry', $e['type']);
		$this->assertArrayHasKey('category', $e['properties']);
		$this->assertCount(7, $e['properties']['category']);
		$this->assertContains('speaking', $e['properties']['category']);
		$this->assertContains('web-dev', $e['properties']['category']);
		$this->assertContains('conferences', $e['properties']['category']);
		$this->assertContains('front-trends', $e['properties']['category']);
		$this->assertContains('fronttrends', $e['properties']['category']);
		$this->assertContains('speaking', $e['properties']['category']);
		$this->assertContains('txjs', $e['properties']['category']);
	}

	public function testParsesSnarfedOrgArticleCorrectly() {
		$input = file_get_contents(__DIR__ . '/snarfed.org.html');
		$result = Mf2\parse($input, 'http://snarfed.org/2013-10-23_oauth-dropins');
	}

	public function testParsesHProduct() {
		$input = <<<'EOT'
<xml id="skufilterbrowse" class="slide">
<productcatalog><labels><label key="skuset.deliverypolicyurl">Delivery policy content URL</label><label key="price.save">Save</label><label key="skuset.seemoredetails">See more details</label><label key="price.additionaloffers">Additional Offers</label><label key="price.freeitem">Includes Free Item*</label><label key="price.instsaving">Instant Savings</label><label key="skuset.eddieseedetails">See details </label><label key="price.rebateurl">RebateURL</label><label key="skuset.freedelivery">FREE SHIPPING, plus 5% back for Rewards Members</label><label key="price.printableCoupons">Click here for Printable Coupon</label><label key="price.value">Value</label><label key="skuset.eddieshipdetails">Estimated to arrive no later than </label><label key="price.qty">Qty.</label><label key="price.chooseyouritems">Choose your Items</label><label key="price.true">true</label><label key="skuset.clearancemessage">&lt;strong&gt;CLEARANCE ITEM:&lt;/strong&gt; </label><label key="price.ERF">Eco Fee</label><label key="skuset.viewlargerimage">View larger</label><label key="common.next">Next</label><label key="price.addtocart">Add to Cart</label><label key="common.reviews">reviews</label><label key="common.previous">Previous</label><label key="skuset.instockonline">In Stock Online</label><label key="price.priceafterrebate">Price &lt;strong&gt;after&lt;/strong&gt; rebate</label><label key="btn.bopis">PICK UP TODAY</label><label key="common.share">SHARE</label><label key="skuset.freedeliverytostore">FREE Shipping to store</label><label key="erf.popup.label">Environmental fee notice:</label><label key="price.details">Details</label><label key="common.stars">stars</label><label key="skuset.learnmore1">Learn more.</label><label key="common.share.twitter">Share on Twitter</label><label key="price.instorespecial">Available In Store Only</label><label key="price.priceincart">See Price in Cart</label><label key="skuset.giftcards">Orders containing this item are not eligible for Gift cards or certain other methods of payment.</label><label key="skuset.mysoftwaredownloads">"My Software Downloads"</label><label key="price.bmsmerf">Buy More Save More prices do not include eco fee.</label><label key="price.now">Now</label><label key="price.collapse">Collapse</label><label key="classpage.getstarted">Get Started</label><label key="skuset.printpage">Print this page</label><label key="price.learnmore">Learn More</label><label key="common.item">Item</label><label key="common.icon.path">/sbdpas/img/ico/</label><label key="skuset.selectcomponent">Select another component below</label><label key="skuset.freeshippingentireorder">Item qualifies entire order for free delivery</label><label key="skuset.eddieincart">in cart. </label><label key="common.selected">selected</label><label key="price.priceaftersavings">Price &lt;strong&gt;after&lt;/strong&gt; savings</label><label key="skuset.inktoner">Ink and toner</label><label key="classpage.comingsoon">Coming Soon</label><label key="price.before">Before</label><label key="price.was">Was</label><label key="skuset.viewfulldetails">View Full Details</label><label key="skuset.expdelivery">Expected Delivery:</label><label key="common.share.pinterest">Share on Pinterest</label><label key="skuset.deliveryonly">Online Only</label><label key="common.share.email">Email it</label><label key="price.seedetails">See Details</label><label key="skuset.expdelpopup">/sbd/content/help-center/shipping-and-delivery.html</label><label key="skuset.softwaredownload">Software Download</label><label key="erf.popup.url">/sbd/content/help/environmental_fee_popup.html</label><label key="price.finalprice">Final Price</label><label key="common.share.facebook">Share on Facebook</label><label key="skuset.eddiesaveproduct">on this product! </label><label key="skuset.suppliedandshippedby">Supplied and Shipped by</label><label key="common.addtofavorites">Add to Favorites</label><label key="skuset.esdnotepart1">Note: Shortly after purchase you will be able to access your Software Downloads in the </label><label key="skuset.esdnotepart2">section of your staples.com&#174; account. It's easy and secure!</label><label key="skuset.software1">/sbd/cre/marketing/technology-research-centers/software/software-downloads.html#z_faq</label><label key="price.instantcoupon">Instant Coupon</label><label key="skuset.eddieshipdetails1">to </label><label key="price.pricebefore">Price &lt;strong&gt;before&lt;/strong&gt;</label><label key="skuset.eddieoffer">Offer valid for 20 minutes. </label><label key="price.price">Price</label><label key="common.model">Model</label><label key="skuset.supplierhover">We have partnered with this trusted supplier to offer you a wider assortment of products and brands for all of your business needs, with the same great level of service you can expect from Staples.com.</label><label key="skuset.forceshiptostore">Item can be shipped only to a retail store location. </label><label key="price.rebate">Rebate</label><label key="price.bmsm">Buy More Save More</label><label key="common.print">print</label><label key="skuset.viewvideo">View video</label><label key="skuset.instoreavailability">Check in Store Availability</label><label key="price.aslowas">As low as</label><label key="price.reg">Reg</label><label key="price.free">FREE</label><label key="erf.message">Provincial recycling or deposit fees may be applicable upon checkout.</label><label key="skuset.eddiesave">Save an extra </label><label key="skuset.deferredfinancemessage">Special Financing Available </label><label key="price.promotions">Promotions</label><label key="price.availableinstore">Available In-Store Only</label><label key="skuset.outofstock">Currently Out of Stock.</label><label key="price.totalsavings">Total Savings</label><label key="price.beforePresentation">Before continuing, please select an item</label></labels>

<product bss="ON" envfeeflag="0" comingsoonflag="0" price="18.35" name="Swingline® 747® Classic Desktop Staplers" bopispilot="true" mss="ON" zipcode="01701" comp="0" presnvalue="Select an Item" snum="SS264184" leadtimedescription="1 - 30 Business Days" expandedpromo="0" alttext="Swingline® 747® Classic Desktop Staplers" prdtypeid="0" presntype="D" review="4.5" class="hproduct" type="skuset" skubopswitch="ON" id="609548" bopisenableflag="0"><descs><desc typeid="2">All-steel construction with non-skid rubber base</desc><desc typeid="2">Spring-loaded inner channel prevents jams</desc><desc typeid="2">Available in black, burgundy and beige &lt;br /&gt; &lt;li&gt;Staples up to 20 sheets&lt;/li&gt;</desc><desc typeid="38">Select an Item</desc><desc typeid="39">All-steel construction with non-skid rubber base</desc><desc typeid="39">Spring-loaded inner channel prevents jams</desc><desc typeid="39">Available in black, burgundy and beige &lt;br /&gt; &lt;li&gt;Staples up to 20 sheets&lt;/li&gt;</desc><desc class="fn">Swingline® 747® Classic Desktop Staplers</desc></descs><price is="18.35" uom="Each"></price><span class="price">18.35</span><span class="currency">USD</span><imgs><pic class="photo" id="1">http://www.staples-3p.com/s7/is/image/Staples/s0021414_sc7?$std$</pic><pic altimg="Y" id="2">http://www.staples-3p.com/s7/is/image/Staples/s0021414_sc7?$thb$</pic><pic id="6">http://www.staples-3p.com/s7/is/image/Staples/s0021414</pic></imgs><producturl class="url">/Swingline-747-Classic-Desktop-Staplers/product_SS264184</producturl><review rating="4.5" count="99" css="45"></review><delivery shiptostore="true" free="false" instore="2" forceshiptostore="false"></delivery></product>

<product bss="ON" envfeeflag="0" comingsoonflag="0" price="18.35" name="Swingline® 747® Classic Desktop Full Strip Stapler, 20 Sheet Capacity, Black" bopispilot="true" mss="ON" zipcode="01701" comp="1" snum="264184" leadtimedescription="1 Business Day" expandedpromo="0" alttext="Swingline® 747® Classic Desktop Full Strip Stapler, 20 Sheet Capacity, Black" prdtypeid="0" review="4.5" class="hproduct" mnum="S7074771G" type="sku" skubopswitch="ON" id="609315" bopisenableflag="1"><descs><desc typeid="2">All-steel construction with non-skid rubber base</desc><desc typeid="2">Full strip</desc><desc typeid="2">Staples up to 20 sheets</desc><desc typeid="19">Each</desc><desc typeid="39">All-steel construction with non-skid rubber base</desc><desc typeid="39">Full strip</desc><desc typeid="39">Staples up to 20 sheets</desc><desc class="fn">Swingline® 747® Classic Desktop Full Strip Stapler, 20 Sheet Capacity, Black</desc></descs><price is="18.35" uom="Each"></price><span class="price">18.35</span><span class="currency">USD</span><imgs><pic class="photo" id="1">http://www.staples-3p.com/s7/is/image/Staples/s0021412_sc7?$std$</pic><pic altimg="Y" id="2">http://www.staples-3p.com/s7/is/image/Staples/s0021412_sc7?$thb$</pic><pic id="6">http://www.staples-3p.com/s7/is/image/Staples/s0021412</pic><pic id="120"></pic></imgs><producturl class="url">/Swingline-747-Classic-Desktop-Full-Strip-Stapler-20-Sheet-Capacity-Black/product_264184</producturl><review rating="4.5" count="99" css="45"></review><delivery shiptostore="true" free="false" instore="1" forceshiptostore="false"></delivery></product>

<product bss="ON" envfeeflag="0" comingsoonflag="0" price="19.59" name="Swingline® 747® Classic Desktop Stapler, Burgundy" bopispilot="true" mss="ON" zipcode="01701" comp="1" snum="413732" leadtimedescription="1 Business Day" expandedpromo="0" alttext="Swingline® 747® Classic Desktop Stapler, Burgundy" prdtypeid="0" review="3.5" class="hproduct" mnum="74718/74782" type="sku" skubopswitch="ON" id="1460639" bopisenableflag="0"><descs><desc typeid="2">All-steel construction with non-skid rubber base</desc><desc typeid="2">Spring-loaded inner channel prevents jams</desc><desc typeid="2">Burgundy &lt;br /&gt; &lt;li&gt;Staples up to 20 sheets&lt;/li&gt;</desc><desc typeid="19">Each</desc><desc typeid="39">All-steel construction with non-skid rubber base</desc><desc typeid="39">Spring-loaded inner channel prevents jams</desc><desc typeid="39">Burgundy &lt;br /&gt; &lt;li&gt;Staples up to 20 sheets&lt;/li&gt;</desc><desc class="fn">Swingline® 747® Classic Desktop Stapler, Burgundy</desc></descs><price is="19.59" uom="Each"></price><span class="price">19.59</span><span class="currency">USD</span><imgs><pic class="photo" id="1">http://www.staples-3p.com/s7/is/image/Staples/m000240695_sc7?$std$</pic><pic altimg="Y" id="2">http://www.staples-3p.com/s7/is/image/Staples/m000240695_sc7?$thb$</pic><pic id="6">http://www.staples-3p.com/s7/is/image/Staples/m000240695</pic></imgs><producturl class="url">/Swingline-747-Classic-Desktop-Stapler-Burgundy/product_413732</producturl><review rating="3.5" count="7" css="35"></review><delivery shiptostore="true" free="false" instore="2" forceshiptostore="false"></delivery></product>

<product bss="ON" envfeeflag="0" comingsoonflag="0" price="39.49" name="Swingline® 747® Rio Red Stapler, 20 Sheet Capacity" bopispilot="true" mss="ON" zipcode="01701" comp="1" brandname="Swingline" snum="562485" leadtimedescription="1 - 4 Business Days" expandedpromo="0" alttext="Swingline® 747® Rio Red Stapler, 20 Sheet Capacity" prdtypeid="0" review="4.5" class="hproduct" mnum="74736" type="sku" skubopswitch="ON" id="1093798" bopisenableflag="0"><descs><desc typeid="2">20 sheet capacity with Swingline S.F.® 4® Staples</desc><desc typeid="2">Durable metal construction</desc><desc typeid="2">Stapler opens for tacking ability</desc><desc typeid="19">Each</desc><desc typeid="39">20 sheet capacity with Swingline S.F.® 4® Staples</desc><desc typeid="39">Durable metal construction</desc><desc typeid="39">Stapler opens for tacking ability</desc><desc class="fn">Swingline® 747® Rio Red Stapler, 20 Sheet Capacity</desc></descs><price is="39.49" uom="Each"></price><span class="price">39.49</span><span class="currency">USD</span><imgs><pic class="photo" id="1">http://www.staples-3p.com/s7/is/image/Staples/s0446269_sc7?$std$</pic><pic altimg="Y" id="2">http://www.staples-3p.com/s7/is/image/Staples/s0446269_sc7?$thb$</pic><pic id="6">http://www.staples-3p.com/s7/is/image/Staples/s0446269</pic></imgs><producturl class="url">/Swingline-747-Rio-Red-Stapler-20-Sheet-Capacity/product_562485</producturl><review rating="4.5" count="76" css="45"></review><delivery shiptostore="true" free="true" instore="2" forceshiptostore="false"></delivery></product>
</productcatalog>
</xml>
EOT;

		$result = Mf2\parse($input, 'http://www.staples.com/Swingline-747-Rio-Red-Stapler-20-Sheet-Capacity/product_562485');
		$this->assertCount(4, $result['items']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/81
	 */
	public function test_vevent() {
		$input = <<< EOT
<div class="vevent">
<h3 class="summary">XYZ Project Review</h3>
<p class="description">Project XYZ Review Meeting</p>
<p> <a class="url" href="http://example.com/xyz-meeting">http://example.com/xyz-meeting</a> </p>
<p>To be held on
 <span class="dtstart">
  <abbr class="value" title="1998-03-12">the 12th of March</abbr>
  from <span class="value">8:30am</span> <abbr class="value" title="-0500">EST</abbr>
 </span> until
 <span class="dtend">
  <span class="value">9:30am</span> <abbr class="value" title="-0500">EST</abbr>
 </span>
</p>
<p>Location: <span class="location">1CP Conference Room 4350</span></p>
<small>Booked by: <span class="uid">guid-1.host1.com</span> on
 <span class="dtstamp">
  <abbr class="value" title="1998-03-09">the 9th</abbr> at <span class="value">6:00pm</span>
 </span>
</small>
</div>
EOT;
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertArrayHasKey('description', $output['items'][0]['properties']);
		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertArrayHasKey('start', $output['items'][0]['properties']);
		$this->assertArrayHasKey('end', $output['items'][0]['properties']);

		$this->assertEquals('XYZ Project Review', $output['items'][0]['properties']['name'][0]);
		$this->assertEquals('Project XYZ Review Meeting', $output['items'][0]['properties']['description'][0]);
		$this->assertEquals('http://example.com/xyz-meeting', $output['items'][0]['properties']['url'][0]);
		$this->assertEquals('1998-03-12 08:30-0500', $output['items'][0]['properties']['start'][0]);
		$this->assertEquals('1998-03-12 09:30-0500', $output['items'][0]['properties']['end'][0]);
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/57
	 * @see https://github.com/kartikprabhu/mf2py/pull/50/
	 */
	public function testRelBookmarkUrl() {
		$input = <<< END
<!DOCTYPE html>
<html>
  <head>
    <title>Backcompat test for hEntry with nested rel=bookmark</title>
    <!-- This should not affect parsing elsewhere -->
    <link rel="bookmark" href="/about">
  </head>
  <body>
    <!-- This should not affect parsing elsewhere -->
    <a rel="bookmark" href="/"></a>

    <article class="hentry">
      <span class="author">Lee Adama</span>
      <span class="entry-title"><a rel="bookmark" class="something" href="/2014/11/24/jump-rope">Jumping Rope for Weight Loss</a></span>
      <div class="entry-content">Some Content</div>
      Nov 24, 2014
    </article>

    <article class="hentry">
      <span class="author">Kara Thrace</span>
      <span class="entry-title"><a rel="bookmark" class="" href="/2014/11/23/graffiti">Abstract Art in Graffiti</a></span>
      <div class="entry-content">More Content</div>
      Nov 23, 2014
    </article>

    <article class="hentry">
      <span class="author">President Roslyn</span>
      <span class="entry-title"><a rel="something bookmark" href="/2014/11/21/earth">Dreams of Earth</a></span>
      <div class="entry-content">Additional Content</div>
      Nov 21, 2014
    </article>

    <article class="hentry">
      <span class="author">Chief Tyrrol</span>
      <span class="entry-title"><a rel="something bookmark somethingelse" class="somethingelse" href="/2014/11/19/labor">Organized Labor in Mining Colonies</a></span>
      <div class="entry-content">More Content</div>
      Nov 19, 2014
    </article>

  </body>
</html>
END;
		$output = Mf2\parse($input);

		$u_urls = array(
			'/2014/11/24/jump-rope',
			'/2014/11/23/graffiti',
			'/2014/11/21/earth',
			'/2014/11/19/labor',
		);

		foreach ( $u_urls as $key => $url )
		{
			$this->assertEquals('h-entry', $output['items'][$key]['type'][0]);
			$this->assertArrayHasKey('url', $output['items'][$key]['properties']);
			$this->assertEquals($url, $output['items'][$key]['properties']['url'][0]);
		}

	}


	/**
	 * @see http://microformats.org/wiki/microformats2-parsing-issues#any_h-_root_class_name_overrides_and_stops_backcompat_root
	 */
	public function testMf2RootStopsBackcompatRoot() {
		$input = '<div class="adr h-adr">
  <div class="locality">MF1 adr locality</div>
  <div class="p-locality">MF2 adr locality</div>
</div>';
		$parser = new Parser($input);
		$result = $parser->parse();

		$this->assertCount(1, $result['items'][0]['type']);
		$this->assertEquals('h-adr', $result['items'][0]['type'][0]);
		$this->assertCount(1, $result['items'][0]['properties']['locality']);
		$this->assertEquals('MF2 adr locality', $result['items'][0]['properties']['locality'][0]);
	}


	/**
	 * @see http://microformats.org/wiki/microformats2-parsing-issues#any_h-_root_class_name_overrides_and_stops_backcompat_root
	 */
	public function testMf2CustomRootStopsBackcompatRoot() {
		$input = '<div class="adr h-acme-address">
  <div class="locality">MF1 acme locality</div>
  <div class="p-locality">MF2 acme locality</div>
</div>';
		$parser = new Parser($input);
		$result = $parser->parse();

		$this->assertCount(1, $result['items'][0]['type']);
		$this->assertEquals('h-acme-address', $result['items'][0]['type'][0]);
		$this->assertCount(1, $result['items'][0]['properties']['locality']);
		$this->assertEquals('MF2 acme locality', $result['items'][0]['properties']['locality'][0]);
	}


	/**
	 * @see http://microformats.org/wiki/microformats2-parsing-issues#uf2_children_on_backcompat_properties
	 */
	public function testMf2ChildrenOnBackcompatProperties() {
		$input = '<div class="vcard">
  <div class="adr h-acme-some-acme-object">
    <div class="locality">MF1 some acme locality</div>
    <div class="p-locality">MF2 some acme locality</div>
  </div>
</div>';
		$parser = new Parser($input);
		$result = $parser->parse();

		$this->assertCount(1, $result['items'][0]['properties']['adr'][0]['type']);
		$this->assertEquals('h-acme-some-acme-object', $result['items'][0]['properties']['adr'][0]['type'][0]);
		$this->assertCount(1, $result['items'][0]['properties']['adr'][0]['properties']['locality']);
		$this->assertEquals('MF2 some acme locality', $result['items'][0]['properties']['adr'][0]['properties']['locality'][0]);
	}


	/**
	 * Test mixed microformats2 with mf1 roots + properties
	 * Technically covered by other tests, but this is an additional test with @pfefferle's content
	 * 		after improvements were made to the backcompat parsing.
	 * @see https://github.com/indieweb/php-mf2/issues/45#issue-33893491
	 */
	public function testMixedMf2andMf1Case1() {
		$input = <<< END
<body class="h-entry hentry h-as-article" itemscope="" itemtype="http://schema.org/BlogPosting">
<div id="page">
 <article id="post-7546" class="post-7546 post type-post status-publish format-standard category-web tag-dezentral tag-email-to-id tag-facebook tag-whatsapp tag-xmpp">
  <header class="entry-header">
    <h1 class="entry-title p-name" itemprop="name headline"><a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/" class="u-url url" title="Permalink to Wir brauchen Metadaten für Telefonnummern" rel="bookmark" itemprop="url">Wir brauchen Metadaten für Telefonnummern</a></h1>

        <div class="entry-meta">
      <span class="sep">Ver&ouml;ffentlicht am </span><a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/" title="10:30" rel="bookmark" class="url u-url"><time class="entry-date updated published dt-updated dt-published" datetime="2014-02-20T10:30:40+00:00" itemprop="dateModified">20. Februar 2014</time></a><address class="byline"> <span class="sep"> von </span> <span class="author p-author vcard hcard h-card" itemprop="author" itemscope itemtype="http://schema.org/Person"><img alt='' src='http://1.gravatar.com/avatar/b36983a5651df2c413e264ad4d5cc1a1?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='u-photo avatar avatar-40 photo' height='40' width='40' /> <a class="url uid u-url u-uid fn p-name" href="http://notizblog.org/author/matthias-pfefferle/" title="Alle Beitr&auml;ge von Matthias Pfefferle ansehen" rel="author" itemprop="url"><span itemprop="name">Matthias Pfefferle</span></a></span></address>    </div><!-- .entry-meta -->
      </header><!-- .entry-header -->

      <div class="entry-content e-content" itemprop="description articleBody">
    <p><a href="http://netzwertig.com/2014/02/19/zuckerberg-bekommt-wieder-was-er-will-facebook-uebernimmt-whatsapp-fuer-bis-zu-19-milliarden-dollar/">Facebook kauft WhatsApp</a> und ich hab nur wenig Möglichkeiten meine Konsequenzen daraus zu ziehen. Leider sind alle aktuell populären &#8220;Chat&#8221; Systeme direkt an die App gekoppelt und ich &#8220;muss&#8221; zwangsläufig die App benutzen die mein Freundeskreis bevorzugt.</p>
<p><a href="http://www.whatsapp.com/">WhatsApp</a> benutzt intern das <a href="http://de.wikipedia.org/wiki/WhatsApp#cite_note-10">XMPP-Protokoll</a> und arbeitet dadurch ja theoretisch dezentral und auch <a href="https://telegram.org">Telegram</a> hat beispielsweise <a href="https://core.telegram.org/mtproto">eine Art offenes Protokoll</a> gebaut&#8230; Das Problem: Woher wissen auf welchem Server der Andere angemeldet ist.</p>
<p>Seit WhatsApp die Identifizierung über die Telefonnummer (statt einer z.B. E-Mail Adresse) eingeführt hat, sind viele anderen diesem Beispiel gefolgt und es gibt nichts Verwerfliches daran. Jeder der eine solche App nutzt hat zwangsläufig ein Telefon, was bedeutet dass er auch eine Telefonnummer hat und die Wahrscheinlichkeit dass in seinem (Telefon-)Adressbuch mehr Telefonnummern als E-Mail Adressen stehen ist auch sehr hoch. Prinzipiell also eine gute Idee! Leider kann man aber anhand einer Telefonnummer nicht auf einen Server (mal abgesehen vom Telekommunikations-unternehmen) schließen und das bedeutet, dass das Verfahren leider auch nur zentral funktionieren kann. Nutze ich WhatsApp, kann man mich nur über die WhatsApp-Server erreichen, für Telegram läuft die Kommunikation nur über die Telegram-Server usw.</p>
<p>Um mit XMPP oder anderen Protokollen wirklich dezentral arbeiten zu können, müsste man über die Telefonnummer erfahren können welchen Chat-Server der Andere benutzt. Vielleicht über so eine Art <a href="http://notizblog.org/2008/07/27/email-address-to-url-transformation/"><em>Tel to Id</em></a> &#8211; Service oder über andere Protokolle wie z.B. SMS. Damit könnte sich jeder selbst den Client seines Vertrauens aussuchen und alles wäre <del datetime="2014-02-20T08:59:56+00:00">gut</del> <ins datetime="2014-02-20T08:59:56+00:00">besser</ins> <img src="http://notizblog.org/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley" /> </p>

<div class="social-buttons">
  <a class="FlattrButton" style="display:none;"
     data-flattr-button="compact"
     data-flattr-uid="pfefferle"
     data-flattr-category="text"
     data-flattr-language="de_DE"
     href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/"
     rel="donation payment"></a>

  <div class="g-plusone" data-size="medium" data-lang="de-DE" data-href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/"></div>
</div>      </div><!-- .entry-content -->

  <footer class="entry-meta">
  Ver&ouml;ffentlicht    <span class="cat-links">
    in <a href="http://notizblog.org/category/web/" title="Alle Beiträge in Open Web ansehen" rel="category tag">Open Web</a>  </span>

    <span class="sep"> | </span>
  <span class="tag-links" itemprop="keywords">
    Tags: <a href="http://notizblog.org/tag/dezentral/" rel="tag">dezentral</a>, <a href="http://notizblog.org/tag/email-to-id/" rel="tag">Email to ID</a>, <a href="http://notizblog.org/tag/facebook/" rel="tag">Facebook</a>, <a href="http://notizblog.org/tag/whatsapp/" rel="tag">WhatsApp</a>, <a href="http://notizblog.org/tag/xmpp/" rel="tag">XMPP</a>  </span>

    <span class="sep"> | </span>
  <span class="comments-link"><a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comments" title="Kommentiere Wir brauchen Metadaten für Telefonnummern">7 Meinungen</a></span>

  </footer><!-- #entry-meta --></article><!-- #post-7546 -->
          <nav id="nav-below">
    <h1 class="assistive-text section-heading">Beitragsnavigation</h1>


    <div class="nav-previous"><a href="http://notizblog.org/2014/02/13/amber-case-ueber-privacy-und-das-indieweb/" rel="prev"><span class="meta-nav">&larr;</span> Amber Case über Privacy und das IndieWeb</a></div>

  </nav><!-- #nav-below -->

          <div id="comments">


      <h2 id="comments-title">
      7 Gedanken zu &ldquo;<span>Wir brauchen Metadaten für Telefonnummern</span>&rdquo;    </h2>


    <ol class="commentlist">
        <li class="comment even thread-even depth-1 h-as-comment p-comment h-entry" id="li-comment-466758">
    <article id="comment-466758" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://1.gravatar.com/avatar/1d6a0566df7760e7d1507810b71a363e?s=50&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://dentaku.wazong.de' rel='external' class='u-url url'>Dentaku</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-466758"><time class="updated published u-updated u-published" datetime="2014-02-20T10:36:01+00:00" itemprop="commentTime">
          20. Februar 2014 bei 10:36          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>ENUM (<a href="https://tools.ietf.org/html/rfc6116">RFC6116</a>) macht genau das. Ist zwar für SIP gedacht, passt aber auch auf diese Anforderung.</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=466758#respond' onclick='return addComment.moveForm("comment-466758", "466758", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  <ul class="children">
  <li class="comment byuser comment-author-matthias-pfefferle bypostauthor odd alt depth-2 h-as-comment p-comment h-entry" id="li-comment-466780">
    <article id="comment-466780" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://1.gravatar.com/avatar/b36983a5651df2c413e264ad4d5cc1a1?s=50&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://notizblog.org' rel='external' class='u-url openid_link url'>Matthias Pfefferle</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-466780"><time class="updated published u-updated u-published" datetime="2014-02-20T10:41:31+00:00" itemprop="commentTime">
          20. Februar 2014 bei 10:41          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>Das war ne schnelle Antwort <img src="http://notizblog.org/wp-includes/images/smilies/icon_smile.gif" alt=":)" class="wp-smiley" /> </p>
<p>Vielen Dank für den Tipp mit ENUM (noch nie davon gehört) und den Link&#8230; werde mich später mal durch das RFC kämpfen&#8230;</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=466780#respond' onclick='return addComment.moveForm("comment-466780", "466780", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  </li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
  <li class="comment even thread-odd thread-alt depth-1 h-as-comment p-comment h-entry" id="li-comment-466867">
    <article id="comment-466867" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://0.gravatar.com/avatar/2d4d94afbc593569446625c02e7a2f73?s=50&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://lukasrosenstock.net/' rel='external' class='u-url url'>Lukas Rosenstock</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-466867"><time class="updated published u-updated u-published" datetime="2014-02-20T11:04:26+00:00" itemprop="commentTime">
          20. Februar 2014 bei 11:04          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>Wollte auch gerade ENUM sagen. Dabei wird die Telefonnummer in einen DNS-Namen konvertiert. Wenn du damit spielen willst, kannst du dir unter <a href="http://www.portunity.de/access/produkte/telefonie/enum-domains.html" >http://www.portunity.de/access/produkte/telefonie/enum-domains.html</a> kostenlos eine deutsche Nummer in ENUM eintragen lassen.</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=466867#respond' onclick='return addComment.moveForm("comment-466867", "466867", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  <ul class="children">
  <li class="comment byuser comment-author-matthias-pfefferle bypostauthor odd alt depth-2 h-as-comment p-comment h-entry" id="li-comment-466932">
    <article id="comment-466932" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://1.gravatar.com/avatar/b36983a5651df2c413e264ad4d5cc1a1?s=50&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://notizblog.org' rel='external' class='u-url openid_link url'>Matthias Pfefferle</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-466932"><time class="updated published u-updated u-published" datetime="2014-02-20T11:18:25+00:00" itemprop="commentTime">
          20. Februar 2014 bei 11:18          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>Krass dass das so vollkommen an mit vorbei gegangen ist&#8230; Gibt es da produktive Anwendungen die ENUM zum Beispiel für Chats o.Ä. verwenden?</p>
<p>&#8230;ich sollte echt mehr bloggen!</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=466932#respond' onclick='return addComment.moveForm("comment-466932", "466932", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  <ul class="children">
  <li class="comment even depth-3 h-as-comment p-comment h-entry" id="li-comment-467106">
    <article id="comment-467106" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://0.gravatar.com/avatar/2d4d94afbc593569446625c02e7a2f73?s=50&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://lukasrosenstock.net/' rel='external' class='u-url url'>Lukas Rosenstock</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-467106"><time class="updated published u-updated u-published" datetime="2014-02-20T12:01:54+00:00" itemprop="commentTime">
          20. Februar 2014 bei 12:01          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>ENUM wurde bisher nur als Möglichkeit zur Umgehung der Carrier/Kostenersparnis gesehen, dementsprechend natürlich von Carriern und nahestehenden Hard-/Softwareherstellern nicht unterstützt. Somit kommt es nicht in den Mainstream. Ich sehe es zur Zeit (leider) als reines &#8220;Nerd-Tool&#8221;, genau wie Diaspora, OpenID, IndieWeb &#8230;<br />
Aber der Gedanke eines &#8220;dezentralen WhatsApp&#8221; auf ENUM-Basis kam mir auch schon. Interessantes Projekt, aber auch nicht massentauglich wegen Huhn&amp;Ei-Problemen.</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=467106#respond' onclick='return addComment.moveForm("comment-467106", "467106", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  <ul class="children">
  <li class="comment byuser comment-author-matthias-pfefferle bypostauthor odd alt depth-4 h-as-comment p-comment h-entry" id="li-comment-467346">
    <article id="comment-467346" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://1.gravatar.com/avatar/b36983a5651df2c413e264ad4d5cc1a1?s=50&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://notizblog.org' rel='external' class='u-url openid_link url'>Matthias Pfefferle</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-467346"><time class="updated published u-updated u-published" datetime="2014-02-20T13:22:57+00:00" itemprop="commentTime">
          20. Februar 2014 bei 13:22          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>Hmmm&#8230; Eine Unterstützung von Seiten aller Carrier wäre natürlich wirklich notwendig um massentaugliche Produkte zu bauen&#8230;</p>
<p>Wäre großartig wenn jede Nummer automatisch ne URI bekäme und unter dieser URI ne Art &#8220;Registry&#8221; zu finden wäre, die auch von Apps erweitert werden kann. So ne Art WebFinger für Telefonnummern quasi&#8230;</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=467346#respond' onclick='return addComment.moveForm("comment-467346", "467346", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  </li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
  <li class="comment even thread-even depth-1 h-as-comment p-comment h-entry" id="li-comment-505365">
    <article id="comment-505365" class="comment " itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
      <footer>
        <address class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope itemtype="http://schema.org/Person">
          <img alt='' src='http://1.gravatar.com/avatar/f7a7b6a59e64d4b8c4a3ded1f85a9879?s=50&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D50&amp;r=G' class='u-photo avatar avatar-50 photo' height='50' width='50' />          <cite class="fn p-name" itemprop="name"><a href='http://www.maexoticde/' rel='external' class='u-url url'>Markus Stumpf</a></cite> <span class="says">meant:</span>        </address><!-- .comment-author .vcard -->

        <div class="comment-meta commentmetadata">
          <a href="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#comment-505365"><time class="updated published u-updated u-published" datetime="2014-03-08T21:45:26+00:00" itemprop="commentTime">
          8. März 2014 bei 21:45          </time></a>
                  </div><!-- .comment-meta .commentmetadata -->
      </footer>

      <div class="comment-content e-content p-summary p-name" itemprop="commentText name description"><p>Diese Interoperabilität nennt sich gemeinhin &#8220;Federation&#8221;: <a href="http://en.wikipedia.org/wiki/Federation_(information_technology)" >http://en.wikipedia.org/wiki/Federation_(information_technology)</a></p>
<p>WhatsApp verwendet kein XMPP. XMPP ist für Mobiles der absolute Horror, denn es basiert auf TCP und damit braucht der Client eine stehende TCP-Verbindung, was massiv auf den Akku geht. Außerdem kommt es permanent zu reconnects, wenn sich laufend die IP-Adresse des Clients ändert.<br />
Aus diesem Grund will man ein verbindungsloses Push-System dahinter haben.</p>
<p>Google und Facebook verwenden XMPP, Facebook hat sich aber noch nie an s2s (Server to Server) Verbindungen beteiligt, Google hat es vor ca 1 Jahr abgeschaltet, damit kann man sich zB. von eigenen XMPP-Servern und damit eigenen XMPP-Accounts nicht mehr mit Google-Usern unterhalten, sonern muss den Google Account verwenden.<br />
Ich habe zB. sowohl meine Facebook als auch Google-Account in meinem pidgin konfiguriert.</p>
<p>TextSecure (clients momentan nur für Android) ist momentan das IMHO beste System in diesem Bereich:<br />
- open source<br />
- harte crypto<br />
- multi device (man kann einen Account auf meheren Devices nutzen)<br />
- bald für iOS und Desktop<br />
und: es unterstützt Federation, man kann sich also seinen eigenen Server hinstellen und es darüber machen.<br />
Siehe: <a href="https://whispersystems.org/blog/the-new-textsecure/" >https://whispersystems.org/blog/the-new-textsecure/</a></p>
<p>Ich muss natürlich immer noch den Account des anderen Teilnehmers kennen &#8230;</p>
</div>

      <div class="reply">
        <a class='comment-reply-link' href='/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/?replytocom=505365#respond' onclick='return addComment.moveForm("comment-505365", "505365", "respond", "7546")'>Antworten</a>      </div><!-- .reply -->
    </article><!-- #comment-## -->
  </li><!-- #comment-## -->
    </ol>




                                <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">Hinterlasse eine Antwort <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/#respond" style="display:none;">Antworten abbrechen</a></small></h3>
                                    <form action="http://notizblog.org/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                                                            <p class="comment-notes">Deine E-Mail-Adresse wird nicht veröffentlicht. Erforderliche Felder sind markiert <span class="required">*</span></p>                            <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input autocomplete="nickname name"  id="author" name="author" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-email"><label for="email">E-Mail <span class="required">*</span></label> <input autocomplete="email"  id="email" name="email" type="email" value="" size="30" aria-required='true' /></p>
<p class="comment-form-url"><label for="url">Website</label> <input autocomplete="url"  id="url" name="url" type="url" value="" size="30" /></p>
                                                <p class="comment-form-comment"><label for="comment">Kommentar</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>                        <p class="form-allowed-tags">Du kannst folgende <abbr title="HyperText Markup Language">HTML</abbr>-Tags benutzen:  <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>                       <p class="form-submit">
                            <input name="submit" type="submit" id="submit" value="Kommentar abschicken" />
                            <input type='hidden' name='comment_post_ID' value='7546' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                        </p>
                        <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="9552e566de" /></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_comments" id="subscribe_comments" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" /> <label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Benachrichtige mich über nachfolgende Kommentare via E-Mail.</label></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" /> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Benachrichtige mich über neue Beiträge via E-Mail.</label></p><script type='text/javascript' src='http://notizblog.org/wp-content/plugins/akismet/_inc/form.js?ver=3.0.0'></script>
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="76"/></p>                 </form>
                            </div><!-- #respond -->
                <form id="webmention-form" action="http://notizblog.org/?webmention=endpoint" method="post">
      <p>
        <label for="webmention-source">Responding with a post on your own blog? Send me a <a href="http://indiewebcamp.com/webmention">WebMention</a> <sup>(<a href="http://adactio.com/journal/6469/">?</a>)</sup></label>
        <input id="webmention-source" type="url" name="source" placeholder="URL/Permalink of your article" />
      </p>
      <p>
        <input id="webmention-submit" type="submit" name="submit" value="Ping me!" />
      </p>
      <input id="webmention-target" type="hidden" name="target" value="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/" />
    </form>
    <p>
    <label for="cite-shortlink">Shortlink</label>
    <input id="cite-shortlink" class="u-url url shortlink" type="text" value="http://notizblog.org/b/25m" />
  </p>
  <p>
    <label for="cite-permalink">Permalink</label>
    <input id="cite-permalink" class="u-url url u-uid uid bookmark" type="text" value="http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/" />
  </p>
  <p>
    <label for="cite-cite">HTML</label>
    <input id="cite-cite" class="code" type="text" size="70" value="&lt;cite class=&quot;h-cite&quot;&gt;&lt;a class=&quot;u-url p-name&quot; href=&quot;http://notizblog.org/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/&quot;&gt;Wir brauchen Metadaten für Telefonnummern&lt;/a&gt; (&lt;span class=&quot;p-author h-card&quot; title=&quot;Matthias Pfefferle&quot;&gt;Matthias Pfefferle&lt;/span&gt; &lt;time class=&quot;dt-published&quot; datetime=&quot;2014-02-20T10:30:40+00:00&quot;&gt;20. Februar 2014&lt;/time&gt;)&lt;/cite&gt;">
  </p>

</div><!-- #comments -->
</body>
END;
		$parser = new Parser($input, 'http://notiz.blog/2014/02/20/wir-brauchen-metadaten-fuer-telefonnummern/');
		$result = $parser->parse();

		$this->assertCount(1, $result['items'][0]['properties']['author']);
		$this->assertCount(1, $result['items'][0]['properties']['author'][0]['type']);
		$this->assertEquals('h-card', $result['items'][0]['properties']['author'][0]['type'][0]);
		$this->assertArrayNotHasKey('category', $result['items'][0]['properties']);
	}


	/**
	 * Test mixed microformats2 with mf1 roots + properties
	 * Technically covered by other tests, but this is an additional test with @aaronpk's content
	 * 		after improvements were made to the backcompat parsing.
	 * @see https://github.com/indieweb/php-mf2/issues/45#issuecomment-267621041
	 */
	public function testMixedMf2andMf1Case2() {
		$input = <<< END
<li class="h-review post-review  hreview  post" id="post-id-28640">
      <div style="" class="content-area   has-responses ">
  <div class="pad">
    <div class="item">
      <h3><a href="http://www.irradiatedsoftware.com/dropvox/" class="url fn p-item h-product">Dropvox</a></h3>
    </div>

    <div class="rating-stars">
              <span class="selected"></span>
              <span class="selected"></span>
              <span class="selected"></span>
              <span class="selected"></span>
              <span class="selected"></span>
                </div>
    <span class="rating hidden"><span class="value">5</span> out of <span class="best">5</span></span>
  </div>
    <div class="hidden">
    <!-- provide p-name as fallback for mf2 consumers -->
    <span class="p-name">Dropvox</span>
    <span class="reviewer vcard"><a class="url fn" href="https://aaronparecki.com/">Aaron Parecki</a></span>
    <span class="dtreviewed">2016-12-15T18:01:31-08:00</span>
    <!-- permalink for the review -->
    <a href="https://aaronparecki.com/2016/12/15/16/dropvox" class="permalink">permalink</a>
  </div>
            <div class="pad">
      <div class="post-text e-content description content-type-plain">Voice memos that record straight to your Dropbox account.</div>
    </div>
        <div class="metaline pad">
  <i class="marker icon"></i>
      <span class="p-location h-adr">
          <span class="p-locality">Portland</span>,
        <span class="p-region">Oregon</span>
                <data class="p-latitude" value="45.535432705698"></data>
      <data class="p-longitude" value="-122.62130255822"></data>
      </span>
  </div>

          <div class="metaline pad">
      <a href="https://aaronparecki.com/2016/12/15/16/dropvox" class="u-url">
      <time class="dt-published" datetime="2016-12-15T18:01:31-08:00">
        Thu, Dec 15, 2016 6:01pm -08:00
      </time>
    </a>
      </div>
<a class="u-author" href="/"></a>

  <div style="clear:both;"></div>
</div>
  <div class="responses">



    <form class="webmention-form ui form" action="https://webmention.io/aaronpk/webmention" method="post">
    <div class="fields">
      <div class="twelve wide field">
        <label>Have you written a <a href="https://indieweb.org/responses">response</a> to this? Let me know the URL:</label>
        <input type="url" name="source" class="url">
      </div>
      <div class="four wide field">
        <label>&nbsp;</label>
        <input type="submit" class="ui submit button" value="Send Webmention">
      </div>
    </div>
    <div class="status hidden">
      <div class="ui message"></div>
    </div>
    <input type="hidden" name="target" value="https://aaronparecki.com/2016/12/15/16/dropvox">
  </form>




</div>
  </li>
END;
		$parser = new Parser($input, 'https://aaronparecki.com/2016/12/15/16/dropvox');
		$result = $parser->parse();

		$this->assertCount(1, $result['items'][0]['properties']['item']);
		$this->assertCount(1, $result['items'][0]['properties']['item'][0]['type']);
		$this->assertCount(1, $result['items'][0]['properties']['name']);
		$this->assertCount(1, $result['items'][0]['properties']['url']);
		$this->assertCount(1, $result['items'][0]['properties']['author']);

		$this->assertArrayNotHasKey('reviewer', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('description', $result['items'][0]['properties']);
		# The following two are correct per backcompat algorithm: classic properties are ignored inside the mf2 root.
		$this->assertArrayNotHasKey('rating', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('best', $result['items'][0]['properties']);

		$this->assertEquals('h-product', $result['items'][0]['properties']['item'][0]['type'][0]);
		$this->assertEquals('Dropvox', $result['items'][0]['properties']['name'][0]);
		$this->assertEquals('https://aaronparecki.com/2016/12/15/16/dropvox', $result['items'][0]['properties']['url'][0]);
		$this->assertEquals('https://aaronparecki.com/', $result['items'][0]['properties']['author'][0]);
	}


	/**
	 * Test mixed microformats2 with mf1 roots + properties
	 * @see https://github.com/microformats/microformats2-parsing/issues/11#issue-246579526
	 */
	public function testMixedMf2andMf1Case3() {
		$input = <<< END
<span class="h-card vcard">
<a href="http://cherryreds.com">
  <span class="p-name fn p-org org">Cherry Red's</span>
</a>,
<span class="adr">
  <span class="street-address p-street-address">88-92 John Bright St</span>,
  <span class="p-locality locality">Birmingham</span>,
  <abbr class="p-country-name country-name">UK</abbr>
</span></span>
END;
		$parser = new Parser($input);
		$result = $parser->parse();

		$this->assertCount(2, $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('street-address', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('locality', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('country-name', $result['items'][0]['properties']);
		$this->assertArrayHasKey('children', $result['items'][0]);
		$this->assertEquals('h-adr', $result['items'][0]['children'][0]['type'][0]);
		$this->assertArrayHasKey('street-address', $result['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('locality', $result['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('country-name', $result['items'][0]['children'][0]['properties']);
	}


	/**
	 * Test mixed microformats2 with mf1 roots + properties
	 * @see https://github.com/microformats/microformats2-parsing/issues/11#issuecomment-352281134
	 */
	public function testMixedMf2andMf1Case4() {
		$input = <<< END
<body class="h-entry">
  <div id="page" class="hfeed site wrap">
    <h1 class="entry-title"><span class='p-name'>title</span></h1>
    other content
    <div class="entry-content">
      <div class="e-content">this is a test for indieweb post </div> <span class="syn-text">Also on:</span>
<!--syndication links -->
    </div>
  </div>
</body>
END;
		$parser = new Parser($input);
		$result = $parser->parse();

		// p-name is no longer implied for this test due to nested microformat
		// see https://github.com/microformats/microformats2-parsing/issues/6
		$this->assertArrayNotHasKey('name', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('content', $result['items'][0]['properties']);
		$this->assertArrayHasKey('children', $result['items'][0]);
		$this->assertEquals('h-feed', $result['items'][0]['children'][0]['type'][0]);
		$this->assertEmpty($result['items'][0]['children'][0]['properties']);
	}


	/**
	 * @see http://microformats.org/wiki/hReview#Examples
	 */
	public function testParsesClassicHreview() {
		$input = <<< END
<div class="hreview">
	<span><span class="rating">5</span> out of 5 stars</span>
	<h4 class="summary">Crepes on Cole is awesome</h4>
	<span class="reviewer vcard">Reviewer: <span class="fn">Tantek</span> -
	<abbr class="dtreviewed" title="2005-04-18">April 18, 2005</abbr></span>
	<div class="description item vcard">
		<p> <span class="fn org">Crepes on Cole</span> is one of the best little creperies in <span class="adr"><span class="locality">San Francisco</span></span>. Excellent food and service. Plenty of tables in a variety of sizes for parties large and small.  Window seating makes for excellent people watching to/from the N-Judah which stops right outside. I've had many fun social gatherings here, as well as gotten plenty of work done thanks to neighborhood WiFi. </p>
	</div>
	<p>Visit date: <span>April 2005</span></p>
	<p>Food eaten: <span>Florentine crepe</span></p>
</div>
END;
		$parser = new Parser($input);
		$result = $parser->parse();

		$this->assertArrayNotHasKey('reviewer', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('description', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('summary', $result['items'][0]['properties']);

		$this->assertArrayHasKey('author', $result['items'][0]['properties']);
		$this->assertArrayHasKey('item', $result['items'][0]['properties']);
		$this->assertArrayHasKey('content', $result['items'][0]['properties']);
		$this->assertArrayHasKey('rating', $result['items'][0]['properties']);
		$this->assertArrayHasKey('name', $result['items'][0]['properties']);

		$this->assertCount(1, $result['items'][0]['properties']['author'][0]['type']);
		$this->assertCount(1, $result['items'][0]['properties']['item'][0]['type']);
		$this->assertCount(1, $result['items'][0]['properties']['content'][0]['type']);

		$this->assertEquals('h-card', $result['items'][0]['properties']['item'][0]['type'][0]);
		$this->assertEquals('h-card', $result['items'][0]['properties']['content'][0]['type'][0]);
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/137
	 */
	public function testIgnoreMf2PropertiesUnderClassicRoot()
	{
		$input = <<< END
<div id="page" class="hfeed site wrap">
	<h1 class="entry-title"><span class='p-name'>title</span></h1>
	other content
	<div class="entry-content">
		<div class="e-content">this is a test for indieweb post </div> <span class="syn-text">Also on:</span>
		<!--syndication links -->
	</div>
</div>
END;
		$parser = new Parser($input);
		$result = $parser->parse();

		$this->assertEmpty($result['items'][0]['properties']);
	}


	/**
	 *
	 */
	public function testParsesHfeed() {
		$input = <<< END
<div class="hfeed">
	<article class="hentry">
		<h1 class="entry-title">Microformats are amazing</h1>
		<p>Published by <span class="author vcard"><span class="fn">W. Developer</span></span>
		on <time class="published" datetime="2013-06-13 12:00:00">13<sup>th</sup> June 2013</time>

		<p class="entry-summary">In which I extoll the virtues of using microformats.</p>

		<div class="entry-content">
			<p>Blah blah blah</p>
		</div>
	</article>
</div>
END;
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('type', $output['items'][0]);
		$this->assertEquals('h-feed', $output['items'][0]['type'][0]);
		$this->assertArrayHasKey('children', $output['items'][0]);
		$this->assertArrayHasKey('type', $output['items'][0]['children'][0]);
		$this->assertEquals('h-entry', $output['items'][0]['children'][0]['type'][0]);
		$this->assertArrayHasKey('properties', $output['items'][0]['children'][0]);
		$this->assertArrayHasKey('name', $output['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('summary', $output['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('published', $output['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('content', $output['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('author', $output['items'][0]['children'][0]['properties']);
		$this->assertArrayHasKey('type', $output['items'][0]['children'][0]['properties']['author'][0]);
		$this->assertEquals('h-card', $output['items'][0]['children'][0]['properties']['author'][0]['type'][0]);
		$this->assertArrayHasKey('properties', $output['items'][0]['children'][0]['properties']['author'][0]);
		$this->assertArrayHasKey('value', $output['items'][0]['children'][0]['properties']['author'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/157
	 * @see source: http://www.manton.org/2018/03/indieweb-generation-4-and-hosted-domains.html
	 */
	public function testHEntryRelTag() {
		$input = '<article id="post-6586" class="post-6586 post type-post status-publish format-standard hentry category-technology tag-domains tag-indiewebcamp tag-microblog tag-wordpress">
				<header class="entry-header">

						<h1 class="entry-title">IndieWeb generation 4 and hosted domains</h1>
								</header><!-- .entry-header -->

				<div class="entry-content">
			<p>Naturally because of the goals of Micro.blog, I see a lot of discussion about “owning your content”. It’s an important part of the mission for Micro.blog to take control back from closed, ad-supported social networks and instead embrace posting on our own blogs again.</p>
<p>But what does it mean to own our content? Do we have to install WordPress or some home-grown blogging system for it to be considered true content ownership, where we have the source code and direct SFTP access to the server? No. If that’s our definition, then content ownership will be permanently reserved for programmers and technical folks who have hours to spend on server configuration.</p>
<p><a href="https://indieweb.org/generations">IndieWebCamp has a generations chart</a> to illustrate the path from early adopters to mainstream users. Eli Mellen highlighted it <a href="https://eli.li/entry.php?id=20180318015703">in a recent post</a> about the need to bridge the gap between the technical aspects of IndieWeb tools and more approachable platforms. With Micro.blog specifically, the goal is “generation 4”, and I think we’re on track to get there.</p>
<p>I want blogging to be as easy as tweeting. Anything short of that isn’t good enough for Micro.blog. You’ll notice when you use Twitter that they never ask you to SFTP into twitter.com to configure your account. They don’t ask you to install anything.</p>
<p>More powerful software that you can endlessly customize will always have its place. It’s good to have a range of options, including open source to tinker with. That’s often where some of the best ideas start. But too often I see people get lost in the weeds of plugins and themes, lured in by the myth that you have to self-host with WordPress to be part of the IndieWeb.</p>
<p>Owning your content isn’t about portable software. It’s about portable URLs and data. It’s about domain names.</p>
<p>When you write and post photos at your own domain name, your content can outlive any one blogging platform. This month marked the 16th anniversary of blogging at manton.org, and in that time I’ve switched blogging platforms and hosting providers a few times. The posts and URLs can all be preserved through those changes because it’s my own domain name.</p>
<p>I was disappointed when Medium announced they were <a href="http://web.archive.org/web/20180301231401/https://help.medium.com/hc/en-us/articles/115005579728-Get-started-with-custom-domains">discontinuing support for custom domain names</a>. I’m linking to the Internet Archive copy because Medium’s help page about this is no longer available. If “no custom domains” is still their policy, it’s a setback for the open web, and dooms Medium to the same dead-end as twitter.com/username URLs.</p>
<p>If you can’t use your own domain name, you can’t own it. Your content will be forever stuck at those silo URLs, beholden to the whims of the algorithmic timeline and shifting priorities of the executive team.</p>
<p>For hosted blogs on Micro.blog, we encourage everyone to map a custom domain to their content, and we throw in free SSL and preserve redirects for old posts on imported WordPress content. There’s more we can do.</p>
<p>I’m working on the next version of the macOS app for Micro.blog now, which features multiple accounts and even multiple blogs under the same account. Here’s a screenshot of the settings screen:</p>
<p><img src="https://manton.org/images/2018/prefs_accounts.png" width="512" height="415" alt="Mac screenshot" scale="0"></p>
<p>The goal with Micro.blog is not to be a stop-gap hosting provider, with truly “serious” users eventually moving on to something else (although we make that easy). We want Micro.blog hosting to be the best platform for owning your content and participating in the Micro.blog and IndieWeb communities.</p>
					</div><!-- .entry-content -->

		<footer class="entry-meta">
			This entry was posted in <a href="http://www.manton.org/category/technology" rel="category tag">Technology</a> and tagged <a href="http://www.manton.org/tag/domains" rel="tag">domains</a>, <a href="http://www.manton.org/tag/indiewebcamp" rel="tag">indiewebcamp</a>, <a href="http://www.manton.org/tag/microblog" rel="tag">microblog</a>, <a href="http://www.manton.org/tag/wordpress" rel="tag">wordpress</a> on <a href="http://www.manton.org/2018/03/indieweb-generation-4-and-hosted-domains.html" title="9:24 am" rel="bookmark"><time class="entry-date" datetime="2018-03-23T09:24:36+00:00">2018/03/23</time></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" href="http://www.manton.org/author/manton" title="View all posts by manton" rel="author">manton</a></span></span>.								</footer><!-- .entry-meta -->
	</article>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('category', $output['items'][0]['properties']);
		$this->assertCount(5, $output['items'][0]['properties']['category']);
		$this->assertContains('technology', $output['items'][0]['properties']['category']);
		$this->assertContains('domains', $output['items'][0]['properties']['category']);
		$this->assertContains('indiewebcamp', $output['items'][0]['properties']['category']);
		$this->assertContains('microblog', $output['items'][0]['properties']['category']);
		$this->assertContains('wordpress', $output['items'][0]['properties']['category']);
	}

  public function testHEntryRelTagInContent() {
    $input = <<< END
<article class="hentry">
  <div class="entry-content">
    Entry content should not include the generated <code>data</code> element for rel tag backcompat <a href="/tag/test" rel="tag">test</a>
  </div>
</article>
END;

    $parser = new Parser($input);
    $output = $parser->parse();
    $item = $output['items'][0];

    $this->assertEquals(['test'], $item['properties']['category']);
    $this->assertEquals('Entry content should not include the generated data element for rel tag backcompat test', $item['properties']['content'][0]['value']);
    $this->assertEquals('Entry content should not include the generated <code>data</code> element for rel tag backcompat <a href="/tag/test" rel="tag">test</a>', $item['properties']['content'][0]['html']);
  }

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/157
	 * @see source: http://jg.typepad.com/ciel/2006/02/daniel_bouluds_.html
	 */
	public function testHReviewRelTag() {
		$input = '<div class="hreview">
<span class="version" style="display:none">0.2</span>
  <h2 class="summary">
    Divine Brunch!
  </h2>
  <abbr class="dtreviewed" title="20060219T1919-0800">
    Feb 19, 2006
  </abbr>
  by <span class="reviewer fn"><a href="http://jg.typepad.com/ciel">Joan Gelfand</a></span>
<span class="type" style="display:none">business</span>
  <div class="item vcard">
    <a href="http://www.garconsf.com" class="url fn">
  Garçon
    </a>
    <div class="adr">
      <div class="street-address">1101 Valencia Street</div>
      <span class="locality">San Francisco</span>,
      <span class="region">CA</span>
    </div>
  </div>
  <blockquote class="description"><p>
  <abbr class="rating" title="3">★★★ </abbr>
Best Benedicts!
Two perfectly poached eggs and a thin slice of tasty, French ham rest on a circle of warm brioche. Drizzled on top is a light, slightly tangy sauce. Seamless! The sophisticated room and great wine list added to the whole experience - Super!</p></blockquote>
<p style="text-align:right;font-size:10px;">Technorati Tags: <a href="http://www.technorati.com/tag/Garcon" rel="tag">Garcon</a>, <a href="http://www.technorati.com/tag/Garçon" rel="tag">Garçon</a></p>
</div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('category', $output['items'][0]['properties']);
		$this->assertCount(2, $output['items'][0]['properties']['category']);
		$this->assertContains('Garcon', $output['items'][0]['properties']['category']);
		$this->assertContains('Garçon', $output['items'][0]['properties']['category']);
	}

	/**
	 * Should return the last non-empty URL segment
	 * @see https://github.com/indieweb/php-mf2/issues/157
	 */
	public function testRelTagTrailingSlash() {
		$input = '<div class="hentry">
<a rel="tag" href="/tags/testing/">Testing</a>,
<a rel="tag" href="/tags/microformats">Microformats</a>
</div>

<div class="hreview">
<a rel="tag" href="/tags/phpmf2/">php-mf2</a>,
<a rel="tag" href="/tags/mf2py">mf2py</a>
</div>
';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('category', $output['items'][0]['properties']);
		$this->assertContains('testing', $output['items'][0]['properties']['category']);
		$this->assertContains('microformats', $output['items'][0]['properties']['category']);
		$this->assertArrayHasKey('category', $output['items'][1]['properties']);
		$this->assertContains('phpmf2', $output['items'][1]['properties']['category']);
		$this->assertContains('mf2py', $output['items'][1]['properties']['category']);
	}

	/**
	 * Upgrade multiple mf1 roots on the same element
	 * @see https://github.com/indieweb/php-mf2/issues/156
	 */
	public function testBackcompatMultipleRoots() {
		$input = '<article class="vevent hentry">
    <span class="entry-title">h-entry name</span>
    <span class="summary">h-event name</span>
</article>';
		$result = Mf2\parse($input);

		$this->assertCount(2, $result['items'][0]['type']);
		$this->assertContains('h-event', $result['items'][0]['type']);
		$this->assertContains('h-entry', $result['items'][0]['type']);
		$this->assertArrayHasKey('name', $result['items'][0]['properties']);
		$this->assertCount(2, $result['items'][0]['properties']['name']);
		$this->assertContains('h-event name', $result['items'][0]['properties']['name']);
		$this->assertContains('h-entry name', $result['items'][0]['properties']['name']);
	}

	/**
	 * @see https://github.com/microformats/php-mf2/issues/195
	 */
	public function testVcardGeoNoImpliedName() {
		$input = '<div class="vcard">
	<div class="fn">John Doe</div>
	<div>Location: <abbr class="geo" title="30.267991;-97.739568">Brighton</abbr></div>
</div>';
		$parser = new Parser($input, 'https://example.com');
		$output = $parser->parse();

		$this->assertArrayNotHasKey('name', $output['items'][0]['properties']['geo'][0]['properties']);
	}
}

