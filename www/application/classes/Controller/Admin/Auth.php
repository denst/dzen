<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_Public_App {
    
    public $template = 'template/login';
    
    public function before() 
    {
        if(Auth::instance()->logged_in('admin') and 
                $this->request->action() == 'login')
        {
            $this->redirect('admin/pages');
        }
        parent::before();
        $this->set_admin_media();
    }
    
    public function action_login() 
    {
        $this->page_title('login');
        $view = View::factory('admin/auth/login');
        if(Valid::not_empty($_POST))
        {
            if (Auth::instance()->login($_POST['username'], $_POST['password']))
                $this->redirect('admin/pages');
            else
            {
                 Helper_Message::add('error', 'Неправильный логин или пароль.');
                 $view->set('post', $_POST);
            }
        }
        
        $this->template->content = $view;
    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->redirect('home');
    }
}
