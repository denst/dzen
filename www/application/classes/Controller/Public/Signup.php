<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Signup extends Controller_Public_App {
    
    public function action_index()
    {
        
        if(Valid::not_empty($_POST))
        {
            $this->page_title('signup');
            $view = View::factory('signup');
            
            $model_subscriber = Model::factory('Subscriber');
            
            if(isset($_POST['signup']))
            {
                if(($subscriber = $model_subscriber->add_subscriber($_POST)))
                {
                    Session::instance()->set('subscriber_id', $subscriber->id);
                    $this->redirect('confirm');
                }
                else
                {
                    $view->set('errors', $model_subscriber->get_errors());
                    $view->set('post', $_POST);
                }
            }
            $this->template->content = $view;
            return;
        }
        else
            throw new HTTP_Exception_404;
    }
}
