<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_StaticPages extends Controller_Public_App {
    
    public function action_view() 
    {
        $url = $this->request->param('url');
        $page = Model::factory('Page')->get_page_by_url($url);
        if($page)
        {
            $this->page_title($page->title);
            View::set_global("description", $page->description);
            View::set_global("keywords", $page->keywords);
            $this->template->content = View::factory('staticpage')
                ->set('page', $page);
        }
        else
            throw new HTTP_Exception_404;
    }
}
