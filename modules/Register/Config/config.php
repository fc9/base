<?php

return [

    'name' => 'Register',

    'address' => [

        'type' => [ #inUse
            'primary' => 'Primary',
            'business' => 'Business',
            'billing' => 'Billing',
            'delivery' => 'Delivery',
        ],

    ],

    'membership' => [

        'status' => [ #inUse
            'inactive' => 'Inactive',
            'active' => 'Active',
        ],

        'contract_read' => [ #inUse
            'yes' => 'yes',
            'no' => 'no',
        ],

        'graduate' => [ #inUse
            'undefined' => 'Undefined',
            'partner' => 'Partner',
            'member' => 'Member',
            '1_star' => '1 Star',
            '2_star' => '2 Star',
            '3_star' => '3 Star',
            'manager' => 'Manager',
            'manager_25k' => 'Manager 25K',
            'manager_50k' => 'Manager 50K',
            'director_100k' => 'Director 100K',
            'director_250k' => 'Director 250K',
            'director_500k' => 'Director 500K',
            'millionaire_1m' => 'Millionaire 1M',
            'millionaire_25m' => 'Millionaire 2.5M',
            'millionaire_5m' => 'Millionaire 5M',
            'chairman_10m' => 'Chairman 10M',
            'chairman_25m' => 'Chairman 25M',
            'chairman_50m' => 'Chairman 50M',
        ],

        'default' => [
            'company_id' => 2,
        ],

    ],

    'pattern' => [

        # For username:
        # Number of characters must be between 6 to 18.
        # Underscore and dot can't be at the end or start of a username (e.g _username_, .username, username.).
        # Underscore or dot can't be used multiple times in a row (e.g user__name / user..name).
        # Only contains alphanumeric characters, underscore and dot.
        # Underscore and dot can't be next to each other (e.g user_.name).
        'username' => '/^(?=.{6,18}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/',

        'route' => [
            'locale' => '[a-z\-A-Z]+',
            'username' => '[0-9a-zA-Z._]+',
        ],

    ],

    'person' => [

        'type' => [ #inUse
            'artificial' => 'Artificial',
            'physical' => 'Physical',
            'juridical' => 'Juridical',
        ],

        'avatar' =>[
            'path' => 'uploads/profile/',
        ],

    ],

    'user' => [

        'status' => [ #inUse
            'inactive' => 'Inactive',
            'active' => 'Active',
            'locked' => 'Locked',
            'canceled' => 'Canceled',
        ],

        'access_profile' => [ #inUse
            'visitant' => 'Visitant',
            'partner' => 'Partner',
            'member' => 'Member',
            'support' => 'Support',
            'attendance' => 'Attendance',
            'admin' => 'Admin',
            'superuser' => 'Superuser',
        ],

        'password' => [ #inUse
            'superuser' => 'm0r3N111',
            'admin' => '&a5yeeex',
            'tester' => 'teste123',
        ],

    ],

//    'access_profile' => [
//
//        'min_for_indicator' => 2,
//
//        # group(
//
//        'visitant' => 0,
//        'partner' => 1,
//        'member' => 2,
//        'support' => 3,
//        'attendance' => 4,
//        'admin' => 10,
//        'superuser' => 99,
//
//        # )endGroup
//
//        'label' => [
//
//            0 => 'Visitant',
//            1 => 'Partner',
//            2 => 'Member',
//            3 => 'Support',
//            4 => 'Attendance',
//            10 => 'Admin',
//            99 => 'Superuser',
//
//        ],
//
//    ],

];