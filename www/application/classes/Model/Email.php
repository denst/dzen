<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Email {
    
    private $error;
    
    public function admin_email($subscriber)
    {
        $subject = 'Новый подписчик на '.'http://'.$_SERVER['HTTP_HOST'];
        $view = View::factory('email/admin')
            ->set('subscriber', $subscriber);
        
        if(Model::factory('Email')->send(Settings::instance()
            ->get_setting('admin_email'),$subject, $view->render()))
            return true;
        else
            return false; 
    }
    
    public function send($to, $subject, $message)
    {
        $config = Kohana::$config->load('email');
        Email::connect($config);
        $from = Settings::instance()->get_setting('admin_email');
        $res = Email::send($to, $from, $subject, $message, $html = true);
        if($res > 0)
            return true;
        else
            return false;
    }
}