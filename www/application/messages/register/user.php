<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'username' => array(
       'unique' => 'поле Логин должно быть уникальным',
     ),
    'email' => array(
        'unique' => 'поле Email должно быть уникальным',
     ),
    'password' => array(
        'min_length' => 'Пароль должен содержать не менее 8 символов',
     ),
);