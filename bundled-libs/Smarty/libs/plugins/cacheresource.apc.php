<?php

/**
 * APC CacheResource for Smarty 3.1.x
 *
 * CacheResource Implementation based on the KeyValueStore API to use
 * apc as the storage resource for Smarty's output caching.
 *
 */
class Smarty_CacheResource_Apc extends Smarty_CacheResource_KeyValueStore {

    public function __construct()
    {
        if(!function_exists('apc_cache_info'))
          throw new Exception('APC Template Caching Error: APC is not installed');
    }
    /**
     * Read values for a set of keys from cache
     *
     * @param array $keys list of keys to fetch
     * @return array list of values with the given keys used as indexes
     * @return boolean true on success, false on failure
     */
    protected function read(array $keys)
    {
      return apc_fetch($keys);
    }
    /**
     * Save values for a set of keys to cache
     *
     * @param array $keys list of values to save
     * @param int $expire expiration time
     * @return boolean true on success, false on failure
     */
    protected function write(array $keys, $expire=null)
    {
        return apc_store($keys, null, $expire);
    }
    /**
     * Remove values from cache
     *
     * @param array $keys list of keys to delete
     * @return boolean true on success, false on failure
     */
    protected function delete(array $keys)
    {
        foreach ($keys as $k) {
           apc_delete($k);
        }
        return true;
    }
    /**
     * Remove *all* values from cache
     *
     * @return boolean true on success, false on failure
     */
    protected function purge()
    {
        return apc_clear_cache('user');
    }
}
