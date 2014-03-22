<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin_App {
    
    public function action_index() 
    {
        if(Valid::not_empty($_POST))
        {
            if(Model::factory('Setting')->set_settings($_POST))
                Helper_Message::add('success', 'Настройки были успешно изменены');
        }
        $this->template->content = View::factory('admin/settings')
                ->set('post', Settings::instance()->get_settings());
    }
}