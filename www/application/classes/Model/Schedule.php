<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Schedule extends ORM {
    
    protected $_table_name = 'schedules';
    
    public function add_date($values)
    {
        try         
        {
            if(Valid::not_empty($values['datetime']))
            {
                list($values['date'], $values['time']) = explode(' / ', $values['datetime']);
                $date = ORM::factory('Schedule')->values($values)->create();
                return true;
            }
            else
                return false;
        }
        catch (ORM_Validation_Exception $ex)         
        {
            return false;
        }
    }
    
    public function delete_date($date_id)
    {
        try         
        {
            $date = ORM::factory('Schedule', $date_id)->delete();
            return true;
        }
        catch (ORM_Validation_Exception $ex)         
        {
            return false;
        }
    }
    
    public function get_schedule_by_id($id)
    {
        return Helper_Values::get_value('Schedule', $id);
    }

    public function get_all_dates()
    {
        return ORM::factory('Schedule')->find_all();;
    }
}