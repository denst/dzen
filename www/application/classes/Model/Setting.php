<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Setting extends ORM {
    
    public function set_settings($settings)
    {
        try
        {
            foreach ($settings as $key => $value) 
            {
                $setting = ORM::factory('Setting')->where('key', '=', $key)->find(); 
                $setting->set('value', $value)->update();
            }
//            parent::clear_cache_entities('settings_cache');
            return true;
        }
        catch (ORM_Validation_Exception $e)
        {
            return false;
        }
    }

    public static function get_settings()
    {
        if(Kohana::$config->load('ads.enable_project_cache'))
            return parent::cache_execute('Model_Setting::get_settings()', 'settings', array(true));
        
        $settings = array();
        
        $all_settings = ORM::factory('Setting')->find_all();
        foreach ($all_settings as $setting) 
        {
            $settings[$setting->key] = $setting->value;
        }
        return $settings;
    }
}