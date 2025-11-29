<?php

return [

    'required' => 'Поле :attribute обязательно для заполнения.',
    'email'    => 'Поле :attribute должно быть корректным email адресом.',
    'min'      => [
        'string' => 'Поле :attribute должно содержать минимум :min символов.',
    ],
    'max'      => [
        'string' => 'Поле :attribute должно содержать максимум :max символов.',
    ],

    'attributes' => [
        'email' => 'Email',
        'subject' => 'Отзыв',
        'message' => 'Сообщение',
    ],

];
