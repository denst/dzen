<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Thanks extends Controller_Public_App {

    public function action_index()
    {
        if(Valid::not_empty($_POST))
        {
            $model_subscriber = Model::factory('Subscriber');
            if($model_subscriber->add_schedule($_POST))
            {
                $subscriber = $model_subscriber
                        ->get_subscriber_by_id($_POST['subscriber_id']);
                Model::factory('Email')->admin_email($subscriber);
                Session::instance()->set('top_menu', true);
                $this->template->content = View::factory('thanks');
            }
        }
        else
            throw new HTTP_Exception_404;
    }
}
