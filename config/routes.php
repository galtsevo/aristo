<?php

return [
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'delivery' => [
        'controller' => 'delivery',
        'action' => 'index',
    ],

    'catalog/type/{id:\d+}' => [
        'controller' => 'catalog',
        'action' => 'type',
    ],

    'catalog/item/{id:\d+}' => [
        'controller' => 'catalog',
        'action' => 'item',
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'news/show' => [
        'controller' => 'news',
        'action' => 'show',
    ],

    'delivery/show' => [
        'controller' => 'delivery',
        'action' => 'show',
    ],

    'contacts' => [
        'controller' => 'main',
        'action' => 'contacts',
    ],

    'main/catalog' => [
        'controller' => 'main',
        'action' => 'catalog',
    ],

    'feedback' => [
        'controller' => 'feedback',
        'action' => 'index',
    ],

    'feedback/commen' => [
        'controller' => 'feedback',
        'action' => 'commen',
    ],

    'feedback/commenadd' => [
        'controller' => 'feedback',
        'action' => 'commenadd',
    ],

    'calculator/dev' => [
        'controller' => 'calculator',
        'action' => 'dev',
    ],

    'zame' => [
        'controller' => 'zamer',
        'action' => 'index',
    ],
];