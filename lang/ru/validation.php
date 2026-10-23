<?php

return [

    'required' => 'Незаполнены обязательные поля',
    'email' => 'Некорректный email',
    'unique' => 'Поле :attribute уже занято',
    'exists' => 'Пользователь с такой почтой не найден',
    'min' => [
        'string' => 'Поле :attribute: минимум :min символов',
    ],
    'max' => [
        'string' => 'Поле :attribute: максимум :max символов',
    ],
    'confirmed' => 'Пароли не совпадают',
    'regex' => 'Недопустимые символы',

    'attributes' => [
        'name' => 'имя',
        'email' => 'почта',
        'password' => 'пароль',
    ],

];
