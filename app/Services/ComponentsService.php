<?php

namespace App\Services;


class ComponentsService
{
    /**
     * This is where you implement your logic to get the data for a
     * chart. We begin here with an example to get you started.
     * It will most likely come from DB or webservice.
     *
     * @return array
     */

    public function getTabs()
    {
        $defaultTabPanes = [];

        $defaultTabPanes[] = (object)[
            'id' => 'tab1',
            'tab_id' => 1,
            'title' => 'Home',
            'content' => 'Best Clean Tab ever
            you can use it with the small code
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.',
            'domId' => 'tab1'
        ];

        $defaultTabPanes[] = (object)[
            'id' => 'tab2',
            'tab_id' => 1,
            'title' => 'Profile',
            'content' => '2',
            'domId' => 'tab2'
        ];

        $defaultTabPanes[] = (object)[
            'id' => 'tab3',
            'tab_id' => 1,
            'title' => 'Messages',
            'content' => '3',
            'domId' => 'tab3'
        ];

        $customTabPanes = [];

        $customTabPanes[] = (object)[
            'id' => 'tab4',
            'tab_id' => 2,
            'title' => 'Home',
            'content' => 'Best Clean Tab ever you can use it with the small code. 
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.',
            'domId' => 'tab4'
        ];

        $customTabPanes[] = (object)[
            'id' => 'tab5',
            'tab_id' => 2,
            'title' => 'Profile',
            'content' => '2',
            'domId' => 'tab5'
        ];

        $customTabPanes[] = (object)[
            'id' => 'tab6',
            'tab_id' => 2,
            'title' => 'Messages',
            'content' => '3',
            'domId' => 'tab6'
        ];

        $verticalTabPanes = [];

        $verticalTabPanes[] = (object)[
            'id' => 'tab7',
            'tab_id' => 3,
            'title' => 'Home',
            'content' => 'Best Clean Tab ever
            you can use it with the small code
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.',
            'domId' => 'tab7'
        ];

        $verticalTabPanes[] = (object)[
            'id' => 'tab8',
            'tab_id' => 3,
            'title' => 'Profile',
            'content' => '2',
            'domId' => 'tab8'
        ];

        $verticalTabPanes[] = (object)[
            'id' => 'tab9',
            'tab_id' => 3,
            'title' => 'Messages',
            'content' => '3',
            'domId' => 'tab9'
        ];

        $verticalCustomTabPanes = [];

        $verticalCustomTabPanes[] = (object)[
            'id' => 'tab10',
            'tab_id' => 4,
            'title' => 'Home',
            'content' => 'Best Clean Tab ever
            you can use it with the small code
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.',
            'domId' => 'tab10'
        ];

        $verticalCustomTabPanes[] = (object)[
            'id' => 'tab11',
            'tab_id' => 4,
            'title' => 'Profile',
            'content' => '2',
            'domId' => 'tab11'
        ];

        $verticalCustomTabPanes[] = (object)[
            'id' => 'tab12',
            'tab_id' => 5,
            'title' => 'Messages',
            'content' => '3',
            'domId' => 'tab12'
        ];

        return [
            'defaultTabs' =>
                (object)[
                    'tabPanes' => $defaultTabPanes
                ],
            'customTabs' =>
                (object)[
                    'tabPanes' => $customTabPanes
                ],
            'verticalTabs' =>
                (object)[
                    'tabPanes' => $verticalTabPanes
                ],
            'verticalCustomTabs' =>
                (object)[
                    'tabPanes' => $verticalCustomTabPanes
                ]
        ];
    }
}