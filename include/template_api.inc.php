<?php # $Id: plugin_api.inc.php 1228 2006-06-01 11:18:53Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*
 *@author Garvin Hicking
 *@state EXPERIMENTAL

 This file provides a basic Smarty emulating layer
 You can use different template engines than the default Smarty one
 by putting a "template.inc.php" file into your template directory.
 It should look something like this:

 <?php
 include_once S9Y_INCLUDE_PATH . 'include/template_api.inc.php';
 $GLOBALS['template'] = new serendipity_smarty_emulator();
 $GLOBALS['serendipity']['smarty'] =& $GLOBALS['template'];
 ?>

 You could of course also use inherited different template classes. It is important
 that your own template object contains method declarations like the class below
 for full interoperability to Serendipity templates. It is important that
 you assign a reference copy of your template object to the $serendipity['smarty']
 object for backwards compatibility.

 All variables that are assigned from this class to your templates/.php files
 will be put into $GLOBALS['tpl'].

 Since the scope of includes can vary, you'll need to use $GLOBALS['tpl'] instead
 of just $tpl in some cases. Thus it's recommended to always use the $GLOBALS['tpl']
 way. Also it's safer to use $GLOBALS['serendipity'] / $GLOBALS['template'] in most
 cases because of the same reason.

 Instead of Smarty $CONST.xxx constants you can use the usual 'xxx' constant access
 method by PHP.

 You can use any Smarty template file to construct your custom PHP template. You
 just need to do this:

  - Replace '{$variable}' calls with '<?= $GLOBALS['tpl']['variable'] ?>'.

  - Replace '{$variable|XXX}' smarty modifiers with corresponding PHP code, like:
    '<?= substr($GLOBALS['tpl']['XXX'], 0, 25) ?>'
     would correspond with
    '{$variable|truncate:'...':25}'
  - Replace '{if CONDITION} ... {/if}' checks with '<?php if (CONDITION): ?> ... <?php endif; ?>'

  - Replace '{foreach} ... {/foreach}' calls correspondingly.

  - Replace '{smartycommand param1=x param2=x}' function calls with
    '<?php $GLOBALS['template']->call('smartycommand', array('param1' => 'x', 'param2' => 'x')); ?>' ones

  - NOTA BENE: Be aware that many smarty function calls are just wrappers to Serendipity API
    calls. To save grandma's performance pennies you should search the original Serendipity API
    function before calling them with the $GLOBALS['template']->call() wrapper! This costs dearly.

 The Serendipity Admin backend will still make use of Smarty. It rocks.

 Know your PHP before you think about using this. :-)
*/

class serendipity_smarty_emulator {
    var $compile_dir = '/tmp'; // Not used
    var $security_settings = array(); // Not used

/**
 * Assign one or multiple template variable
 *
 * @param   mixed       Either a variable name, or an array of variables
 * @param   mixed       Either null or the variable content.
 * @access public
 * @return null
 */
    function assign($tpl_var, $value = null) {
        if (is_array($tpl_var)) {
            foreach ($tpl_var as $key => $val) {
                if ($key != '') {
                    $GLOBALS['tpl'][$key] = $tpl_var[$key];
                }
            }
        } else {
            $GLOBALS['tpl'][$tpl_var] = $value;
        }

        return true;
    }

/**
 * Assign one or multiple template variable by reference - Smarty API Change > 3.0
 *
 * @param   string      Variable name
 * @param   mixed       Referenced variable
 * @access public
 * @return null
 */
    function assignByRef($tpl_var, &$value) {
        $GLOBALS['tpl'][$tpl_var] =& $value;

        return true;
    }

/**
 * Assign one or multiple template variable by reference
 *
 * @param   string      Variable name
 * @param   mixed       Referenced variable
 * @access public
 * @return null
 */
    function assign_by_ref($tpl_var, &$value) {
        $GLOBALS['tpl'][$tpl_var] =& $value;

        return true;
    }

/**
 * Helper function to call a 'serendipity_smarty_xx' function with less parameters.
 *
 * @param   string      Function name to call.
 * @param   array       Array of parameters
 * @access public
 * @return  string      Output
 */
    function call($funcname, $params) {
        if (function_exists('serendipity_smarty_' . $funcname)) {
            return call_user_func('serendipity_smarty_' . $funcname, $params, $this);
        } elseif (function_exists('serendipity_' . $funcname)) {
            return call_user_func('serendipity_' . $funcname, $params, $this);
        } elseif (function_exists($funcname)) {
            return call_user_func($funcname, $params, $this);
        } else {
            return "<span class='msg_error'>ERROR: " . htmlspecialchars($funcname) . " NOT FOUND.</span>";
        }
    }

/**
 * Outputs a smarty template.
 *
 * @param   string      Full path to template file
 * @access public
 * @return boolean
 */
    function display($resource_name) {
        return include $resource_name;
    }

/**
 * Triggers a template error
 *
 * @param   string      Error message
 * @access public
 * @return null
 */
    function trigger_error($txt) {
        echo '<b>SMARTY EMULATOR ERROR: ' . $txt;
    }

/**
 * Echoes a default value. Append multiple values and will output the first non empty value.
 *
 * @param   mixed    The value to emit.
 * @access public
 * @return null
 */
    function getdefault() {
        $vars = func_get_args();
        foreach($vars as $title) {
            if (!empty($GLOBALS['tpl'][$title])) {
                return $GLOBALS['tpl'][$title];
            }
        }

        return false;
    }

/**
 * Parses a template file into another.
 *
 * @param   string      The path to the resource name (prefixed with 'file:' usually)
 * @param   string      The Cache ID (not used)
 * @param   string      The Compile ID (not used)
 * @param   boolean     Output data (true) or return it (false)?
 * @access public
 * @return null
 */
    function &fetch($resource_name, $cache_id = null, $compile_id = null, $display = false) {
        $resource_name = str_replace('file:', '', $resource_name);

        if (!$display) {
            ob_start();
        }

        include $resource_name;

        if (!$display) {
            $out = ob_get_contents();
            ob_end_clean();
            return $out;
        } else {
            return true;
        }
    }
}

/*
 *@author Garvin Hicking
 *@state EXPERIMENTAL
 *
 * XML Engine
 */

class serendipity_smarty_emulator_xml extends serendipity_smarty_emulator {
    /**
     * Parses a template file into another.
     *
     * @access public
     * @return null
     */
    function fetch() {
        return true;
    }

    /**
     * Outputs a smarty template.
     *
     * @access public
     * @return null
     */
    function display() {
        echo "</serendipity>\n";
        return true;
    }

    function __construct() {
        header('Content-Type: text/xml; charset=' . LANG_CHARSET);
        echo '<?xml version="1.0" encoding="' . LANG_CHARSET . '" ?>' . "\n";
        /*
        echo '<?xml-stylesheet href="' . serendipity_getTemplateFile('xml.css') . '" type="text/css" ?>' . "\n";
        */
        echo "<serendipity>\n";
        ob_end_flush(); // This ends the started ob from index.php!
    }
    
    function serendipity_smarty_emulator_xml() {
        $this->__construct();
    }

    /**
     * Assign one or multiple template variable
     * @TODO: Why can't this function accept references. This sucks.
     *
     * @param   mixed       Either a variable name, or an array of variables
     * @param   mixed       Either null or the variable content.
     * @access public
     * @return null
     */
    function assign($tpl_var, $value = null, $level = 0) {
        if (is_array($tpl_var)) {
            foreach ($tpl_var as $key => $val) {
                $this->createXML($level, $key, $val);
            }
        } else {
            $this->createXML($level, $tpl_var, $value);
        }

        return true;
    }
    
/**
 * Assign one or multiple template variable by reference - Smarty API Change > 3.0
 *
 * @param   string      Variable name
 * @param   mixed       Referenced variable
 * @access public
 * @return null
 */
    function assignByRef($tpl_var, &$value) {
        if (is_array($value)) {
            foreach ($value as $key => $val) {
                $this->createXML($level, $key, $val);
            }
        } else {
            $this->createXML($level, $tpl_var, $value);
        }

        return true;
    }

/**
 * Assign one or multiple template variable by reference
 *
 * @param   string      Variable name
 * @param   mixed       Referenced variable
 * @access public
 * @return null
 */
    function assign_by_ref($tpl_var, &$value) {
        if (is_array($value)) {
            foreach ($value as $key => $val) {
                $this->createXML($level, $key, $val);
            }
        } else {
            $this->createXML($level, $tpl_var, $value);
        }

        return true;
    }

/**
  * Create the XML output for an element
  *
  * @param  int     The intend level
  * @param  mixed   The XML element name
  * @param  mixed   The XML element value
  */
    function createXML(&$level, &$key, &$val) {
        if (is_numeric($key)) {
            $openkey  = 'item index="' . $key . '"';
            $closekey = 'item';
        } else {
            $openkey = $closekey = str_replace(':', '_', $key);
        }

        if (is_array($val)) {
            echo str_repeat("\t", $level) . "<$openkey>\n";
            $this->assign($val, null, $level + 1);
            echo str_repeat("\t", $level) . "</$closekey>\n";
        } else {
            echo str_repeat("\t", $level) . "<$openkey>" . htmlspecialchars($val) . "</$closekey>\n";
        }
    }
}

