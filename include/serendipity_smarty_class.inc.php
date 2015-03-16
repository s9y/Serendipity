<?php
// serendipity_smarty_class.inc.php lm 2014-12-10 Ian

// define secure_dir and trusted_dirs for Serendipity_Smarty_Security_Policy class.
@define('S9Y_TEMPLATE_FALLBACK',    $serendipity['serendipityPath'] . $serendipity['templatePath'] . 'default');
@define('S9Y_TEMPLATE_USERDEFAULT', $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template']);
@define('S9Y_TEMPLATE_USERDEFAULT_BACKEND', $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template_backend']);
@define('S9Y_TEMPLATE_SECUREDIR',   $serendipity['serendipityPath'] . $serendipity['templatePath']);


// Create a wrapper class extended from Smarty_Security - which allows access to S9Y-plugin and S9Y-template dirs
class Serendipity_Smarty_Security_Policy extends Smarty_Security
  {
    // these are the allowed functions only. - default as is
    public $php_functions = array('isset', 'empty', 'count', 'sizeof', 'in_array', 'is_array', 'time', 'nl2br', 'class_exists');
    // to disable all PHP functions
    #public $php_functions = null;

    // remove PHP tags
    public $php_handling = Smarty::PHP_REMOVE; // = 2

    // set allowed modifiers only. (default = array( 'escape', 'count' );)
    public $php_modifiers = array('escape', 'sprintf', 'sizeof', 'count', 'rand', 'print_r', 'str_repeat', 'nl2br');

    public $allow_constants = true;

    public $allow_super_globals = true;

    // array of template directories that are considered secure. No need, as ...TemplateDir concidered secure implicitly.  (unproofed)
    public $secure_dir = array(S9Y_TEMPLATE_SECUREDIR); // do we need this then?

    // actually no need, as template dirs are explicit defined as trusted_dirs. (unproofed)
    public $trusted_dir = array(S9Y_TEMPLATE_USERDEFAULT, S9Y_TEMPLATE_USERDEFAULT_BACKEND, S9Y_TEMPLATE_FALLBACK); // do we need this then?

    #public $modifiers = array(); // can be omitted, when all allowed

    // to test this - overwrites Serendipity_Smarty::default_modifiers and Serendipity_Smarty_Security_Policy::php_modifiers - modifier 'escape' not allowed by security setting
    #public $allowed_modifiers = array('escape:"htmlall"');

    // This allows the fetch() and include calls to pull .tpl files from any directory,
    // so that symlinked plugin directories outside the s9y path can be included properly.
    // TODO / FUTURE: If Smarty will implement a seperation option to dissect fetch() from
    // {include} calls, we should only apply this workaround to fetch() calls.
    // Redirecting fetch() as our custom function is too risky and has too high a performance
    // impact.
    public function isTrustedResourceDir($path) {
        return true;
    }

    public static function test()
      {
        var_dump(get_called_class());
      }
  }

// Create a wrapper class extended from Smarty
class Serendipity_Smarty extends Smarty
  {
    // bc mode for plugins Smarty2 compat INCLUDE_ANY fetch() calls - to avoid an undefinied property error.
    public $security_settings = false;


    public function __set($name, $value) {
        if ($name == 'security') {
            if ($value) {
                 $this->enableSecurity('Serendipity_Smarty_Security_Policy');
            } else {
                 $this->disableSecurity();
            }
        } else {
            parent::__set($name, $value);
        }
    }

    /**
     * It is often helpful to access the Smarty object from anywhere in your code, e.g in Plugins.
     * Enables the Smarty object by instance always. The singleton pattern ensures that there is only one instance of the object available.
     * To obtain an instance of this class use:
     * $serendipity['smarty'] = Serendipity_Smarty::getInstance();
     * The first time this is called a new instance will be created. Thereafter, the same instance is handed back.
     **/
    public static function getInstance($newInstance = null)
      {
        static $instance = null;
        if(isset($newInstance)) {
            $instance = $newInstance;
        }
        if ( $instance == null ) {
            $instance = new Serendipity_Smarty();
        }
        return $instance;
      }

    public function __construct()
      {
        // Class Constructor. These automatically get set with each new instance.
        parent::__construct();

        // call the objects initialization parameters
        self::setParams();
    }

    // smarty (3.1.x) object main parameter setup
    private function setParams()
      {
        global $serendipity;

        // some documentary from the smarty forum
        /*
           Adressing a specific $template_dir (see 3.1 release notes)

           Smarty 3.1 introduces the $template_dir index notation.
           $smarty->fetch('[foo]bar.tpl') and {include file="[foo]bar.tpl"} require the template bar.tpl to be loaded from $template_dir['foo'];
           Smarty::setTemplateDir() and Smarty::addTemplateDir() offer ways to define indexes along with the actual directories.
        */

        /*  +++++++++++++++++++++++++++++++++++++++++++
           Set all directory setters
           Smarty will always use the first template found in order of the given array. Move the least significant directory to the end.
        */

        $template_engine = serendipity_get_config_var('template_engine');
        $template_dirs   = array();

        if ($template_engine) {
            $p = explode(',', $template_engine);
            foreach($p AS $te) {
                $template_dirs[] = $serendipity['serendipityPath'] . $serendipity['templatePath'] . trim($te) . '/';
            }
        } else {
            // this is tested without need actually, but it makes the directory setter fallback chain a little more precise
            $template_dirs[] = $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template'];
        }
        $template_dirs[] = $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['defaultTemplate'];
        $template_dirs[] = $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template_backend'];

        // add secure dir to template path, in case engine did have entries
        if (S9Y_TEMPLATE_SECUREDIR != $serendipity['serendipityPath'] . $serendipity['templatePath']) {
            $template_dirs[] = S9Y_TEMPLATE_SECUREDIR;
        }

        // disable plugin dir as added template dir is not adviced, if set security is enabled (backend & frontend need access to fetch plugin templates)
        $template_dirs[] = $serendipity['serendipityPath'] . 'plugins';
        // add default template to addTemplate array, if not already set in engine
        $template_dirs[] = S9Y_TEMPLATE_FALLBACK;

        $this->setTemplateDir($template_dirs);

        if (defined('S9Y_DATA_PATH')) {
            $this->setCompileDir(S9Y_DATA_PATH . PATH_SMARTY_COMPILE);
        } else {
            $this->setCompileDir($serendipity['serendipityPath'] . PATH_SMARTY_COMPILE);
        }    

        $this->setConfigDir(array(S9Y_TEMPLATE_USERDEFAULT));

        if ( ( !is_dir($this->getCompileDir()) || !is_writable($this->getCompileDir()) ) && IN_installer !== true) {
            if(ini_get('display_errors') == 0 || ini_get('display_errors') == 'off') printf(DIRECTORY_WRITE_ERROR, $this->getCompileDir());
            trigger_error(sprintf(DIRECTORY_WRITE_ERROR, $this->getCompileDir()), E_USER_ERROR);
        }


        /*
            here we go with our other Smarty class properties, which can all be called by their property name (recommended)
            $smarty->use_sub_dirs = true; or by $smarty->setUseSubDirs(true); and echo $smarty->getUseSubDirs();
            as the latter's would run through an internal __call() wrapper function.
            Note: rodneyrehm - From within the Smarty class context you can safely access properties like Smarty::$use_sub_dirs directly.
        */


        /*  +++++++++++++++++++++++++++++++++++
            Set Smarty caching - outsourced to README_SMARTY_CACHING_PURPOSES.txt
            Not usable in Serendipity with current template structure!
        */

        /*  ++++++++++++++++++++++++++++++++++++++++++++++
            Set all other needed Smarty class properties
        */

        #$this->merge_compiled_includes = true; // $this->setMergeCompiledIncludes(true);  // With this option the subtemplate code is stored together with the calling template.

        // default here to be overwritten by $serendipity['production'] == 'debug' - see below!
        $this->debugging = false; // $this->setDebugging(false);

        // Smarty will create subdirectories under the compiled templates and cache directories if $use_sub_dirs is set to TRUE, default is FALSE.
        $this->use_sub_dirs = ( ini_get('safe_mode') ? false : true ); // $this->setUseSubDirs(false); // cache and compile dir only

        // Smarty should update the cache files automatically if $smarty->compile_check is true.
        $this->compile_check = true; // $this->setCompileCheck(true);
            #$this->compile_check = COMPILECHECK_OFF (false) - template files will not be checked
            #$this->compile_check = COMPILECHECK_ON (true)   - template files will always be checked
            #$this->compile_check = COMPILECHECK_CACHEMISS   - template files will be checked, if caching is enabled and there is no existing cache file, or it has expired
        /*
            Note: rodneyrehm
            If you actually manage to build a page from a single template (with inclusions and plugins and stuff)
            in a way that allows smarty to do 304 handling - or implement the serve-stale-while-update approach,
            you should go with CACHEMISS.
        */
        $this->compile_id    = &$serendipity['template']; // $this->setCompileId(&$serendipity['template'])
        /*
            Note: rodneyrehm
            Please only specify the compile_id if you really need to.
            That means if you pre-process templates for say internationalization.
            Otherwise you don't need this and are better off ignoring it (performance-wise).
        */
        $this->config_overwrite = true; // $this->setConfigOverwrite(true);

        // production == debug extends from s9y version information (alpha|beta|cvs) is always debug | USE ===
        if ($serendipity['production'] === 'debug') {
            $this->force_compile   = true;   // $this->setForceCompile(true);
            $this->caching         = false;  // $this->setCaching(false);
            $this->debugging       = true;   // $this->setDebugging(true);
        }

        // set smarty error reporting. General error_reporting is set in serendipity/serendipity_config.inc.php
        $this->error_reporting = E_ALL & ~(E_NOTICE|E_STRICT);

        // we use our own error_handler and get in conflicts with smarty?
        // $this->muteExpectedErrors();
    }

    /*
        Note: Ian
        These BC methods are to be kept as long as not converted to new syntax in additional plugins
        Search "$serendipity['smarty']->register_" (11 hits in 6 files) in additional_plugins
        serendipity_event_communityrating.php, serendipity_event_customarchive.php, serendipity_event_microformats.php,
        serendipity_event_multilingual.php, serendipity_event_smartymarkup.php, serendipity_event_staticpage.php
    */

    /**
     * Registers custom function to be used in templates - BC mode Smarty 2 -> 3
     *
     * @param string $function      the name of the template function
     * @param string $function_impl the name of the PHP function to register
     * @param bool   $cacheable
     * @param mixed  $cache_attrs
     */
    public function register_function($function, $function_impl, $cacheable=true, $cache_attrs=null)
     {
        $this->registerPlugin('function', $function, $function_impl, $cacheable, $cache_attrs);
     }

    /**
     * Registers modifier to be used in templates - BC mode Smarty 2 -> 3
     *
     * @param string $modifier name of template modifier
     * @param string $modifier_impl name of PHP function to register
     */
    public function register_modifier($modifier, $modifier_impl)
     {
        $this->registerPlugin('modifier', $modifier, $modifier_impl);
     }

    /**
     * Registers a resource to fetch a template - BC mode Smarty 2 -> 3
     *
     * @param string $type      name of resource
     * @param array  $functions array of functions to handle resource
     */
    public function register_resource($type, $functions)
     {
        $this->registerResource($type, $functions);
     }

    /**
     * wrapper for assign_by_ref - BC mode Smarty 2 -> 3 (Serendipity core uses assignByRef already - and nearly no occurances in additional plugins)
     *
     * @param string $tpl_var the template variable name
     * @param mixed  &$value  the referenced value to assign
     */
    public function assign_by_ref($tpl_var, &$value)
    {
        $this->assignByRef($tpl_var, $value);
    }

    /**
     * Returns an array containing template variables- BC mode Smarty 2 -> 3
     *
     * @param string $name
     * @return array
     */
    public function get_template_vars($name=null)
    {
        return $this->getTemplateVars($name);
    }

    public static function test()
      {
        var_dump(get_called_class());
      }
  }

