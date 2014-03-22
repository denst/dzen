<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Subscriber extends ORM {
    
    protected $_table_name = 'subscribers';
    
    private $errors = array();
    
    public function rules()
    {
            return array(
                    'name' => array(
                            array('not_empty'),
                    ),
                    'email' => array(
                            array('not_empty'),
                            array('email'),
                    ),
                    'skype' => array(
                            array('not_empty'),
                    ),
                    'phone' => array(
                            array('not_empty'),
                    ),
                    'sponsor' => array(
                            array('not_empty'),
                    ),
            );
    }
    
    public function add_subscriber($values)
    {
        try         
        {
            $values['date'] = date("Y-m-d H:m:s");
            $subscriber =  ORM::factory('Subscriber')->values($values)->create();
            return $subscriber;
        }
        catch (ORM_Validation_Exception $ex)     
        {
            $this->errors = $ex->errors('subscriber');
            return false;
        }
    }
    
    public function delete_subscriber($id)
    {
        try         
        {
            $subscriber = ORM::factory('Subscriber', $id)->delete();
            return true;
        }      
        catch (ORM_Validation_Exception $ex)         
        {
            return false;
        }
    }
    
    public function add_schedule($post)
    {
        try         
        {
            $subscriber = ORM::factory('Subscriber', $post['subscriber_id'])
                ->set('schedule', $post['date'])
                ->update();
            return true;
        }
        catch (ORM_Validation_Exception $ex)         
        {
            return false;
        }
    }

    public function get_subscriber_by_id($id)
    {
        return Helper_Values::get_value('Subscriber', $id);
    }
    
    public function get_all_subscribers()
    {
        return ORM::factory('Subscriber')->find_all();
    }

    public function get_errors()
    {
        return $this->errors;
    }
}