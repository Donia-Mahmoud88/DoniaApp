<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'manager' => [
            'users' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'profile' => 'r,u',
            'Meals' => 'c,r,u,d',
            'images' => 'c,r,u,d',
            'orders' => 'r',
            'payments' => 'r',
        ],
        'customer' => [
            'profile' => 'r,u',
            'categories' => 'c,r,u,d',
            'Meals' => 'r',
            'images' => 'c,r,u,d',
            'orders' => 'r',
            'payments' => 'r',
        ],
        'role_name' => [
            'module_1_name' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
