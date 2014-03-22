<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Schedule extends Controller_Admin_App {
    
    public function action_index() 
    {
        $this->template->content = View::factory('admin/schedule')
            ->set('dates', Model::factory('Schedule')->get_all_dates());
    }
    
    public function action_add()
    {
        if(Valid::not_empty($_POST))
        {
            Model::factory('Schedule')->add_date($_POST);
            $this->redirect('admin/schedule');
        }
        else
        {
            throw new HTTP_Exception_404;
        }
    }
    
    public function action_delete()
    {
        if(Valid::not_empty($_POST))
        {
            if(Model::factory('Schedule')->delete_date($_POST['delete_date_id']))
            {
                Helper_Message::add('success', 'Дата успешно удалена');
                $this->redirect('admin/schedule');
            }
        }
        else
        {
            throw new HTTP_Exception_404;
        }
    }
}