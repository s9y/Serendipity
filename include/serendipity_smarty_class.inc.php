<?php // (experimental) serendipity_smarty_class.inc.php 2011-11-03 10:29 Ian
            
// This is the only way I found to get this into Serendipity_Smarty_Security_Policy class as secure_dir and trusted_dir.
// Does this somehow has any negativ effects on building template paths in serendipity and/or smarty, partitially builded somehow dynamic?
@define('S9Y_TEMPLATE_FALLBACK', $serendipity['serendipityPath'] . $serendipity['templatePath'] . 'default');
@define('S9Y_TEMPLATE_DEFAULT', $serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['template']);
@define('S9Y_TEMPLATE_SECUREDIR', $serendipity['serendipityPath'] . $serendipity['templatePath']);
            

// Create a wrapper class extended from Smarty_Security 
class Serendipity_Smarty_Security_Policy extends Smarty_Security 
  { 
    // these are the allowed functions ONLY. - default as is
    public $php_functions = array('isset', 'empty', 'count', 'sizeof', 'in_array', 'is_array', 'time', 'nl2br');
    // disable all PHP functions
    #public $php_functions = null;
    
    // remove PHP tags
    public $php_handling = Smarty::PHP_REMOVE; // = 2
    
    // what is the exact difference between php_functions and php_modifiers? (see also default_modifiers)
    
    // ALL php functions as modifiers are accessible. (for instance {$somevar|PHP_FUNCTION_NAME}) - default = array( 'escape', 'count' );
    public $php_modifiers = array('escape', 'sprintf', 'sizeof', 'count', 'rand', 'print_r', 'str_repeat');
    #Warning: rand() expects exactly 2 parameters, 1 given in 
    #Warning: str_repeat() expects exactly 2 parameters, 1 given in 
    #public $php_modifiers = array('escape', 'sprintf', 'sizeof', 'count', 'rand', 'print_r', 'str_repeat');
    
    public $allow_constants = true;
    
    public $allow_super_globals = true; 

    // setting by global Serendipity var is not allowed, actually only CONSTANTS are working, if not done by __construct(), right??
    public $secure_dir = array(S9Y_TEMPLATE_SECUREDIR); 
    
    // actually no need, as template dirs are explicit defined as trusted_dirs (unproofed)
    public $trusted_dir = array(S9Y_TEMPLATE_DEFAULT, S9Y_TEMPLATE_FALLBACK); // do i need this then?
    
    #public $modifiers = array(); // kann weg, wenn alles erlaubt
    // guter test - überschreibt Serendipity_Smarty::default_modifiers und Serendipity_Smarty_Security_Policy::php_modifiers - modifier 'escape' not allowed by security setting
    #public $allowed_modifiers = array('escape:"htmlall"');
    
    /* I could have used this, but actually there is no real need as staying with properties only, right?
       Which construction is recommended, using CONSTANTS or __construct() with global $serendipity for trusted and secure_dir ??
       STILL LEARNING OOP:
       Does this has to be renamed to public function __construct(Serendipity_Smarty $serendipity['smarty']) 
       as my class is Serendipity_Smarty and my object is $serendipity['smarty'] ???
    public function __construct(Smarty $smarty)
     {
        parent::__construct($smarty);
        // whatever you need to do to setup…
     } 
     */

    static public function test() 
      { 
        var_dump(get_called_class());
      }
  }

// Create a wrapper class extended from Smarty
class Serendipity_Smarty extends Smarty 
  {
    // backward compat for plugins INCLUDE_ANY fetch calls - undefinied property Serendipity_Smarty::security_settings, which were used in old smarty libs (in early 2.6.x versions)
    public $security_settings = false;
    
    // some documentary from the smarty forum
    /*********************************************************
     * It is often helpful to access the Smarty object from anywhere in your code. Although you could use a global variable, 
     * globals are not adequate for larger projects. The singleton pattern ensures that there is one and only one instance of the object available.
     * To obtain an instance of this class:
     * $serendipity['smarty'] = Serendipity_Smarty::getInstance();
     * The first time this is called a new instance will be created. Thereafter, the same instance is handed back.
     **/
     // ??? what does that mean exactly? 
     // Do we need to call also $serendipity['smarty']->enableSecurity('Serendipity_Smarty_Security_Policy'); // enable security policy by instance of the Smarty_Security class
    public static function getInstance()
      {
        static $instance = null;
        if ( $instance == null )
            $instance = new Serendipity_Smarty();
        return $instance;
      }

    public function __construct() 
      {
        // Class Constructor. These automatically get set with each new instance.
        parent::__construct();
        // call the objects parameter
        self::setParams(); // your initialization code goes in here
    }

    // smarty (3.1.x) object main parameter setup
    private function setParams() 
      {
        global $serendipity; 
        
        // some documentary from the smarty forum
        /*********************************************************
         * Adressing a specific $template_dir (see 3.1 release notes)
         *
         * Smarty 3.1 introduces the $template_dir index notation.
         * $smarty->fetch('[foo]bar.tpl') and {include file="[foo]bar.tpl"} require the template bar.tpl to be loaded from $template_dir['foo'];
         * Smarty::setTemplateDir() and Smarty::addTemplateDir() offer ways to define indexes along with the actual directories. 
         **/
    
        /***********************
         * Set all directories
         **********************/
        // WAHRSCHEINLICH SPIELT DIE REIHENFOLGE DER SET UND ADDTEMPLATEDIR PFADE EINE ROLLE IN DER FALLBACK FRAGE
        // initiate templateDir setter
        $this->setTemplateDir(array(S9Y_TEMPLATE_DEFAULT));
        // set addTemplate array with the blogs used template anyway
        $serendipity['addTemplateDir'] = array($serendipity['serendipityPath'] . $serendipity['templatePath'] . $serendipity['defaultTemplate']);
        // merge engine only templates to addTemplate array - BEWARE: Bulletproof and default templates do not have any engine settings, so this will be empty
        // if empty array [0] => , $serendipity['addTemplateDir'] will have $serendipity['serendipityPath'] . $serendipity['templatePath']!
        // we could add if !empty(), but since we have array_unique at the end there is no need
        $p = explode(',', $serendipity['template_engine']);
        foreach($p AS $te) {
            $serendipity['addTemplateDir'][] = $serendipity['serendipityPath'] . $serendipity['templatePath'] . $te; 
        }
        // add secure dir to template path, in case engine did have entries
        $serendipity['addTemplateDir'][] = S9Y_TEMPLATE_SECUREDIR;
        // disable plugin dir as added template dir is not adviced, if set security is enabled (backend & frontend need access to fetch plugin templates)
        $serendipity['addTemplateDir'][] = $serendipity['serendipityPath'] . 'plugins';
        // add default template to addTemplate array, if not already set in engine
        $serendipity['addTemplateDir'][] = S9Y_TEMPLATE_FALLBACK;
        // expand smarty objects (add)TemplateDir setter with $serendipity['addTemplateDir'] as is
         $this->addTemplateDir($serendipity['addTemplateDir']); 
        // setTemplateDir again to unified getTemplateDir() to avoid doubles for (engine, default and main template)
        $this->setTemplateDir(array_merge(array(), array_unique($this->getTemplateDir()))); // used additional array_merge to reset keys

        $this->setCompileDir($serendipity['serendipityPath'] . PATH_SMARTY_COMPILE);
        
        $this->setConfigDir(array(S9Y_TEMPLATE_DEFAULT));
        
        // changed init false to die(error) in here, as original false had no use
        if (!is_dir($this->getCompileDir()) || !is_writable($this->getCompileDir())) {
            die(printf(DIRECTORY_WRITE_ERROR, $this->getCompileDir()));
        }
#cache# $this->setCacheDir($serendipity['serendipityPath'] . 'cache'); // uncomment if not using cache
        
        /**
         * here we go with our other Smarty class properties, which can all be called by their property name (recommended)
         * $smarty->use_sub_dirs = true; or by $smarty->setUseSubDirs(true); and echo $smarty->getUseSubDirs(); 
         * as the latter's would run through an internal __call() wrapper function.
         **/
        
        /************************************
         * Set Smarty caching (enable #cache# properties)
         ***********************************/
        // WIE GEHT das genau?
        // 3.1.4 test 2011-10-20
        // cache_modified, caching, cache_lifetime und cache_id müssen gesetzt sein, sonst funktioniert caching nur nach Ablauf lifetime!
        // cache_id($id) gab Fehler und musste deshalb auf md5($_SERVER['REQUEST_URI']) gesetzt sein, damit jede einzelne url auch wirklich gecached wird. 
        // Wie ist das mit fallbacks auf index (zb mit fehlermeldungen)???
        //
        // cache_modified_check, cache_lifetime, setCaching arbeiten zwar mit cache, reagieren aber nicht auf unterschiedliche urls, sondern erst auf ende lifetime - WARUM???
        // If cache_modified_check is enabled Smarty tries to make use of the client browser cache. Maybe you got some garbage in your browser cache. Have you tried to clear the browser cache first? 

#cache# $this->cache_modified_check = true; // must be true to enable 304 headers
        // Muss ich cache noch auf true setzen?

        // some documentary from the smarty forum
        /*********************************************************
         * With Smarty::CACHING_LIFETIME_SAVED the expiration date is written into the cached file. 
         * So each cache_id / compile_id combination may have their own cache lifetime. 
         * The point is simply, that once the cache lifetime (expiration date) has been saved to the cache file, 
         * it cannot be altered except for clearing and regenerating said cache file
         **/

#cache# $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // $this->setCaching(2); // 1 will change the end of lifetime immediately.
        // $this->caching = Smarty::CACHING_LIFETIME_SAVED; // $this->setCaching(Smarty::CACHING_LIFETIME_SAVED);
        // #$this->setCaching(Smarty::CACHING_OFF) // stop caching >= 3.1.4
        // set the cache_lifetime for index.tpl to 5 minutes
        
#cache# $this->cache_lifetime = 300; // $this->setCacheLifetime(120);
        // some documentary from the smarty forum
        /*********************************************************
         * Smarty caching is based purely on the fetch() or display() call. So:
         * $smarty->fetch('application.tpl');
         * Will generate a cached output and use that on repeated calls. If you have multiple versions of this call, you need to pass a cache_id. Example:
         * $cache_id = md5($_SERVER['REQUEST_URI']);
         * $smarty->fetch('application.tpl',$cache_id);
         * It is entirely up to you what is taken into account for the cache_id (URL, etc.)
         **/
//
// does this mean $this->setCacheId($id); is useless here and has to be set where the actual templates are called? or does ist work as something default?
//
        // some documentary from the smarty forum
        /*********************************************************
         * Smarty will use the cache_id for distributing the cache files into sub_dirs
         * A cache id is used if you cache different output generated by the same template as for example on a product page. 
         * In such a case you should use a product id as cache id.
         * $this->cache_id($id); // $this->setCacheId($id);
         **/
         
#cache# $this->cache_id = md5($_SERVER['REQUEST_URI']); // this isn't a good idea either, better have it disabled or use a special id (where of?)
       
        /************************************************
         * Set all other needed Smarty class properties
         ***********************************************/
        // welche gehören noch in die security klasse?
#???#        $this->merge_compiled_includes = true; // $this->setMergeCompiledIncludes(true);

        $this->debugging = false; // $this->setDebugging(false); // default here to be overwritten by $serendipity['production'] == 'debug'!
        // Smarty will create subdirectories under the compiled templates and cache directories if $use_sub_dirs is set to TRUE, default is FALSE.
        $this->use_sub_dirs = ( ini_get('safe_mode') ? false : true ); // $this->setUseSubDirs(false); // cache and compile dir only
        //Smarty should update the cache files automatically if $smarty->compile_check is true. 
        $this->compile_check = true; // $this->setCompileCheck(true);
        #$this->compile_check = COMPILECHECK_OFF (false) - template files will not be checked
        #$this->compile_check = COMPILECHECK_ON (true) - template files will always be checked
        #$this->compile_check = COMPILECHECK_CACHEMISS - template files will be checked if caching is enabled and there is no existing cache file or it has expired            
        $this->compile_id    = &$serendipity['template']; // $this->setCompileId(&$serendipity['template'])
        $this->config_overwrite = true; // $this->setConfigOverwrite(true);
        // guter test - modifier 'escape' wird zwar by security setting generell erlaubt, hiermit aber beschränkt - also keine exeption und doch keine < >
        #$this->default_modifiers = array('escape:"htmlall"');
        //default_modifiers gehört zu smarty klasse, wird mit allowed bzw php modifiers in security Klasse überschrieben....?!
        #$this->default_modifiers = array('sprintf', 'sizeof', 'count', 'rand', 'print_r', 'str_repeat');

        // production == debug extends from s9y version information (alpha|beta|cvs) is always debug | USE ===
        if ($serendipity['production'] === 'debug') {
            $this->force_compile   = true;   // $this->setForceCompile(true);
            $this->caching         = false;  // $this->setCaching(false); 
            $this->debugging       = true;   // $this->setDebugging(true);
        }
        
        $this->error_reporting = E_ALL & ~E_NOTICE;
        #$this->error_reporting = E_STRICT; // produces lots of errors, a la 
        // Strict Standards: Non-static method *** should not be called statically in *** | solution may be add "public static" function to functions
        //
        // http://stackoverflow.com/questions/4684454/error-message-strict-standards-non-static-method-should-not-be-called-staticall
        // Your methods are missing the static keyword. Change
        // function getInstanceByName($name=''){
        // to
        // public static function getInstanceByName($name=''){
        // if you want to call them statically.
        // Note that static methods (and Singletons) are death to testability. (http://sebastian-bergmann.de/archives/883-Stubbing-and-Mocking-Static-Methods.html)
        // Also note do not overload the constructor with code that shouldn't be in there. 
        // All your constructor is supposed to do is set the object into a valid state. If you have to have data from outside 
        // the class to do that consider injecting it instead of pulling it. Also note that constructors cannot return anything. 
        // They will always return void so all these return false statements do nothing but end the construction.
        
        // ...constructor is supposed to ... this is why all register() things went back to function init()

      } 
      
    /***************************************************************************
     * Search "$serendipity['smarty']->register_" (11 hits in 6 files) in additional_plugins
     * serendipity_event_communityrating.php, serendipity_event_customarchive.php, serendipity_event_microformats.php, 
     * serendipity_event_multilingual.php, serendipity_event_smartymarkup.php, serendipity_event_staticpage.php
     **************************************************************************/
     
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

    static public function test() 
      { 
        var_dump(get_called_class());
      } 
  }

?>