<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Subscribers extends Controller_Admin_App {
    
    public function action_index() 
    {
        $this->template->content = View::factory('admin/subscribers')
            ->set('subscribers', Model::factory('Subscriber')->get_all_subscribers());
    }
    
    public function action_delete() 
    {
        if(Valid::not_empty($_POST))
        {
            if(Model::factory('Subscriber')->delete_subscriber($_POST['delete_subscriber_id']))
            {
                Helper_Message::add('success', 'Подписчик успешно удалён');
                $this->redirect('admin/subscribers');
            }
        }
        else
            throw new HTTP_Exception_404;
    }
}