<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_App extends Controller_Public_App {
    
    public $template = 'template/admin';
    
    public function before() 
    {
        $_controllers = array(
            "Страницы" => "pages",
            "Расписание событий" => "schedule",
            "Подписчики" => "subscribers",
            "Пользователи" => "users",
            "Найстройка" => "settings ",
        );

        View::set_global("_controllers", $_controllers);
        View::set_global("_controller", $this->request->controller());
        View::set_global("_title", Kohana::$config->load("default.title"));
        View::set_global("_user", Auth::instance()->get_user());
            
        parent::before();
        if(Auth::instance()->logged_in('admin') == false)
        {
            $this->redirect('admin/login');
        }
        $this->set_admin_media();
    }
}
