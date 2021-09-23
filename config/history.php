<?php

return [
    'user_model' => \App\User::class,
    'date_show_humans' => true,

    'authors' => [
        'table' => 'users',
        'model' => \App\User::class,
    ],
    'style' => [
        'scrolleable' => true,
        'table' => '',
    ],

];
