<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'name' => array(
       'not_empty' => 'поле Имя не должно быть пустым',
     ),
    'email' => array(
        'email' => 'неверный формат Email',
        'not_empty' => 'поле Email должно быть уникальным',
     ),
    'skype' => array(
        'not_empty' => 'поле Skype не должно быть пустым',
     ),
    'phone' => array(
        'not_empty' => 'поле Телефон не должно быть пустым',
     ),
    'sponsor' => array(
        'not_empty' => 'поле Спонсор не должно быть пустым',
     ),
);