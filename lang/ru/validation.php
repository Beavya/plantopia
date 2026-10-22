<?php

return [

    'required' => 'Незаполнены обязательные поля',
    'email' => 'Некорректный email',
    'unique' => 'Поле :attribute уже занято',
    'exists' => 'Пользователь с такой почтой не найден',
    'max' => [
        'string' => 'Максимум :max символов',
    ],
    'min' => [
        'string' => 'Минимум :min символов',
    ],
    'confirmed' => 'Пароли не совпадают',
    'regex' => 'Недопустимые символы',

    'attributes' => [
        'name' => 'Имя',
        'email' => 'Почта',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'current_password' => 'Текущий пароль',
    ],

];
