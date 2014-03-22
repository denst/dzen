<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_App {

    public function action_index() 
    {
        $this->template->content = View::factory('admin/users/index')
            ->set("users", Model::factory('User')->get_all_users());
    }
    
    public function action_add()
    {
        $this->page_title('signup');
        $view = View::factory('admin/users/edit');
        
        if(Valid::not_empty($_POST))
        {
            $model_users = Model::factory('User');
            
            if(($user = $model_users->register_user($_POST)))
            {
                Helper_Message::add('success', 
                    'Новый пользователь был успешно создан');
                $this->redirect('admin/users');
            }
            else
            {
                $view->set('errors', $model_users->get_errors());
                $view->set('post', $_POST);
            }
        }
        
        $this->template->content = $view;
    }

    public function action_edit() 
    {
        $view = View::factory('admin/users/edit');
        
        $id = $this->request->param('id');
        $model_users = Model::factory('User');
        
        if(Valid::not_empty($_POST))
        {
            
            if($model_users->edit_user($_POST))
            {
                Helper_Message::add('success', 
                    'Данные пользователя успешно измены');
                $this->redirect('admin/users');
            }
            else
            {
                $this->template->content = $view
                    ->set('errors', $model_users->get_errors())
                    ->set('post', $_POST)
                    ->set('user', $model_users->get_user_by_id($_POST['user_id']));
                return;
            }
        }
        
        if(Valid::numeric($id) AND ($user = $model_users->get_user_by_id($id)))
        {
            $this->template->content = $view
                ->set('user', $user)
                ->set('post', $user->as_array());
        }
        else
            throw new HTTP_Exception_404;
    }
}
