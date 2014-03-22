<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

    private $errors = array();

    protected $_table_name = 'users';
    
    protected $_has_many = array(
        'user_tokens' => array('model' => 'User_Token'),
        'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
    );

    public function get_errors()
    {
        return $this->errors;
    }
    
    /**
     * Сreate a new user.
     *
     * @param   array   $fields
     * @return  mixed   user or false
     */
    public function register_user($fields) 
    {
        try 
        {
            $fields = Arr::map('strip_tags', $fields);
            $fields['email'] = trim(strtolower($fields['email']));
            $user = ORM::factory('User')->create_user($fields, array(
                'username',
                'password',
                'email',
            ));
            $user->add('roles', ORM::factory('Role', array('name' => 'login')));
            $user->add('roles', ORM::factory('Role', array('name' => 'admin')));
            return $user;
        } 
        catch (ORM_Validation_Exception $e) 
        {
            $errors = $e->errors('register');
            $this->errors = array_merge($errors, ( isset($errors['_external']) ? $errors['_external'] : array() ));
            return false;
        }
    }
    
    public function edit_user($values)
    {
        try         
        {
            $user = ORM::factory('User', $values['user_id'])
                ->update_user($values, array(
                    'username',
                    'password',
                    'email')
                );
            return true;
        }
        catch (ORM_Validation_Exception $e)         
        {
            $errors = $e->errors('register');
            $this->errors = array_merge($errors, ( isset($errors['_external']) ? $errors['_external'] : array() ));
            return false;
        }
    }

    public function get_user_by_id($id)
    {
        return Helper_Values::get_value('User', $id);
    }
    
    public function get_user_by_field_value($field, $value)
    {
        return Helper_Values::get_value('User', false, $field, $value);
    }
    
    public function get_all_users()
    {
        return ORM::factory('User')->find_all();
    }
}