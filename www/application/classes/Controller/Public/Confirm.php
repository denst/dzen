<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Confirm extends Controller_Public_App {

    public function action_index()
    {
        if(Valid::not_empty(Session::instance()->get('subscriber_id')))
        {
            $this->template->content = View::factory('confirm')
                ->set('subscriber_id', Session::instance()->get_once('subscriber_id'))
                ->set('dates', Model::factory('Schedule')->get_all_dates());
            return;
        }
        else
            throw new HTTP_Exception_404;
    }
}
