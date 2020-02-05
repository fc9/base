<?php

return [

    'store' => [

        'status' => [

            'inactive' => 0,
            'active' => 1,
            'canceled' => 2,

        ],

    ],

    'product' => [

        'type' => [

            'accession' => 1, #membership
            'signature' => 2, #robot
            'title' => 3, #voucher
            'digital' => 4, #course
            'physical' => 5,
            'service' => 6,

        ],

        'status' => [

            'inactive' => 0,
            'active' => 1,
            'sold out' => 2,
            'blocked' => 3,
            'canceled' => 4,

        ],

        'tag' => [

            'robot' => 1,
            'membership' => 2,
            'voucher' => 3,
            'course' => 4,
            'basic' => 41, #course
            'vision' => 42, #course
            'advanced' => 43, #course

        ],

        'voucher' => [

            'status' => [

                'canceled' => 0,
                'free' => 1,
                'usage' => 2,

            ],

        ],

    ],

];