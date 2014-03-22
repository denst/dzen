<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Page extends ORM {
    
    public function get_all_pages()
    {
        return ORM::factory('Page')->order_by('id', 'ASC')->find_all();
    }
    
    public function add_page($values)
    {
        try         
        {
            $page = ORM::factory('Page')->values($values)->create();
            return true;
        }
        catch (ORM_Validation_Exception $ex)      
        {
            return false;
        }
    }
    
    public function edit_page($values)
    {
        try         
        {
            $page = ORM::factory('Page', $values['page_id'])
                ->values($values)->update();
            return true;
        }
        catch (ORM_Validation_Exception $ex)      
        {
            return false;
        }
    }
    
    public function delete_page($id)
    {
        try         
        {
            $page = ORM::factory('Page', $id)->delete();
            return true;
        }      
        catch (ORM_Validation_Exception $ex)         
        {
            return false;
        }
    }

    public function get_page_by_id($id)
    {
        return Helper_Values::get_value('Page', $id);
    }
    
    public function get_page_by_url($url)
    {
        return Helper_Values::get_value('Page', false, 'url', $url);
    }
}
