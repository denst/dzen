<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin_App {
    
//    public $template = 'template/admin';

    public function action_index() 
    {
        $this->template->content = View::factory('admin/pages/index')
                ->set("pages", Model::factory('Page')->get_all_pages());
    }

    public function action_add() 
    {
        if (Valid::not_empty($_POST))
        {
            if(Model::factory('Page')->add_page($_POST))
                $this->redirect('admin/pages');
        }
            
        $this->template->content = View::factory('admin/pages/edit')
                ->bind('post', $post);
    }

    public function action_edit() {
        
        $id = $this->request->param('id');
        
        if(Valid::not_empty($_POST))
        {
            if(Model::factory('Page')->edit_page($_POST))
                $this->redirect('admin/pages');
        }
        
        if(Valid::numeric($id))
        {
            if(($page = Model::factory('Page')->get_page_by_id($id)))
            {
                $page = $page->as_array();
                $this->template->content = View::factory('admin/pages/edit')
                    ->set('post', $page)
                    ->set('page', $page);
                return;
            }
        }
        throw new HTTP_Exception_404;
    }

    public function action_delete() 
    {
        if(Valid::not_empty($_POST))
        {
            if(Model::factory('Page')->delete_page($_POST['delete_page_id']))
            {
                Helper_Message::add('success', 'Страница успешно удалена');
                $this->redirect('admin/pages');
            }
        }
        else
            throw new HTTP_Exception_404;
    }

}
