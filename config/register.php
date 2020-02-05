<?php

return [

    'pattern' => [

        'username' => '[0-9a-zA-Z._]+',

        'preg' => [

            # For username:
            # Number of characters must be between 6 to 20.
            # Underscore and dot can't be at the end or start of a username (e.g _username_, .username, username.).
            # Underscore or dot can't be used multiple times in a row (e.g user__name / user..name).
            # Only contains alphanumeric characters, underscore and dot.
            # Underscore and dot can't be next to each other (e.g user_.name).
            'username' => '/^(?=.{6,24}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/',

        ],

    ],

    'access_profile' => [

        'min_for_indicator' => 2,

        # group(

        'partner' => 1,
        'member' => 2,
        'support' => 3,
        'attendance' => 4,
        'admin' => 10,
        'superuser' => 99,

        # )endGroup

        'label' => [

            0 => '',
            1 => 'Partner',
            2 => 'Member',
            3 => 'Support',
            4 => 'Attendance',
            10 => 'Admin',
            99 => 'Superuser',

        ],

    ],

    'membership' => [

        'status' => [

            'inactive' => 0,
            'active' => 1,

        ],

        'contract_read' => [

            'yes' => 'yes',
            'no' => 'no',

        ],

    ],

    'person' => [

        'type' => [

            'artificial' => 0,
            'physical' => 1,
            'juridical' => 2,

        ],

    ],

    'user' => [

        'status' => [

            'inactive' => 0,
            'active' => 1,
            'locked' => 2,
            'canceled' => 3,

        ],

        'password' => [

            'superuser' => 'm0r3N111',
            'admin' => '&a5yeeex',
            'tester' => 'Qk01@nHz%X2020',

        ],

    ],

    'graduate' => [

        'initial' => 1,

        # group(

        'partner' => 1,
        'member' => 2,
        '1star' => 3,
        '2star' => 4,
        '3star' => 5,
        'manager' => 6,
        'manager25k' => 7,
        'manager50k' => 8,
        'director100k' => 9,
        'director250k' => 10,
        'director500k' => 11,
        'millionaire1m' => 12,
        'millionaire2_5m' => 13,
        'millionaire5m' => 14,
        'chairman10m' => 15,
        'chairman25m' => 16,
        'chairman50m' => 17,

        # )endGroup

        'label' => [

            0 => '',
            1 => 'Partner',
            2 => 'Member',
            3 => '1 Star',
            4 => '2 Star',
            5 => '3 Star',
            6 => 'Manager',
            7 => 'Manager 25K',
            8 => 'Manager 50K',
            9 => 'Director 100K',
            10 => 'Director 250K',
            11 => 'Director 500K',
            12 => 'Millionaire 1M',
            13 => 'Millionaire 2.5M',
            14 => 'Millionaire 5M',
            15 => 'Chairman 10M',
            16 => 'Chairman 25M',
            17 => 'Chairman 50M',

        ],

    ],

    'address' => [

        'type' => [

            'primary' => 1,
            'business' => 2,
            'billing' => 3,
            'delivery' => 4,

        ],

    ],

];