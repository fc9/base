<?php

namespace App\Services;


class BladeViewService
{
    /**
     * This is where you implement your logic to get the data for a
     * chart. We begin here with an example to get you started.
     * It will most likely come from DB or webservice.
     *
     * @return array
     */

    public function getData()
    {
        $userCards = [];

        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/1.jpg",
            "alt" => "user",
            "effect" => "",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/2.jpg",
            "alt" => "user",
            "effect" => "",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/3.jpg",
            "alt" => "user",
            "effect" => "",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/4.jpg",
            "alt" => "user",
            "effect" => "",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];

        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/5.jpg",
            "alt" => "user",
            "effect" => "scrl-dwn",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/6.jpg",
            "alt" => "user",
            "effect" => "scrl-dwn",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/7.jpg",
            "alt" => "user",
            "effect" => "scrl-dwn",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/8.jpg",
            "alt" => "user",
            "effect" => "scrl-dwn",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];

        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/1.jpg",
            "alt" => "user",
            "effect" => "scrl-up",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/2.jpg",
            "alt" => "user",
            "effect" => "scrl-up",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/3.jpg",
            "alt" => "user",
            "effect" => "scrl-up",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];
        $userCards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/4.jpg",
            "alt" => "user",
            "effect" => "scrl-up",
            "action" => "#",
            "title" => "Genelia Deshmukh",
            "subtitle" => "Managing Director"
        ];

        $cards = [];

        $cards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/big/img1.jpg",
            "alt" => "Card image cap",
            "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "title" => "Card title",
            "button_text" => "Go somewhere",
            "action" => "#",
            "slot" => "",
        ];
        $cards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/big/img2.jpg",
            "alt" => "Card image cap",
            "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "title" => "Card title",
            "button_text" => "Go somewhere",
            "action" => "#",
            "slot" => "",
        ];
        $cards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/big/img3.jpg",
            "alt" => "Card image cap",
            "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "title" => "Card title",
            "button_text" => "Go somewhere",
            "action" => "#",
            "slot" => "",
        ];
        $cards[] = (object)[
            "url" => "/vendor/wrappixel/monster-admin/4.2.1/assets/images/big/img4.jpg",
            "alt" => "Card image cap",
            "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            "title" => "Card title",
            "button_text" => "Go somewhere",
            "action" => "#",
            "slot" => "",
        ];

        $generalButtons = [];

        $generalButtons[] = (object)[
            "text" => "Primary",
        ];
        $generalButtons[] = (object)[
            "color" => "btn-secondary",
            "text" => "Secondary",
        ];
        $generalButtons[] = (object)[
            "color" => "btn-success",
            "text" => "Success",
        ];
        $generalButtons[] = (object)[
            "color" => "btn-info",
            "text" => "Info",
        ];
        $generalButtons[] = (object)[
            "color" => "btn-warning",
            "text" => "Warning",
        ];
        $generalButtons[] = (object)[
            "color" => "btn-danger",
            "text" => "Danger",
        ];

        $buttonsWithOutline = [];

        $buttonsWithOutline[] = (object)[
            "text" => "Primary",
        ];
        $buttonsWithOutline[] = (object)[
            "color" => "btn-outline-secondary",
            "text" => "Secondary",
        ];
        $buttonsWithOutline[] = (object)[
            "color" => "btn-outline-success",
            "text" => "Success",
        ];
        $buttonsWithOutline[] = (object)[
            "color" => "btn-outline-info",
            "text" => "Info",
        ];
        $buttonsWithOutline[] = (object)[
            "color" => "btn-outline-warning",
            "text" => "Warning",
        ];
        $buttonsWithOutline[] = (object)[
            "color" => "btn-outline-danger",
            "text" => "Danger",
        ];

        $buttonsSize = [];

        $buttonsSize[] = (object)[
            "text" => "Large .btn-lg",
            "size" => "btn-lg",
        ];
        $buttonsSize[] = (object)[
            "color" => "btn-secondary",
            "text" => "Normal .btn"
        ];
        $buttonsSize[] = (object)[
            "text" => "Small .btn-sm",
            "size" => "btn-sm",
        ];
        $buttonsSize[] = (object)[
            "text" => "Tiny .btn-xs",
            "size" => "btn-xs"
        ];

        $tooltips = [];

        $tooltips[] = (object)[
            "color" => "btn-outline-secondary",
            "data_toggle" => "tooltip",
            "data_placement" => "top",
            "data_original_title" => "Tooltip",
            "text" => "Tooltip on top"
        ];
        $tooltips[] = (object)[
            "color" => "btn-outline-secondary",
            "data_toggle" => "tooltip",
            "data_placement" => "right",
            "data_original_title" => "Tooltip",
            "text" => "Tooltip on right"
        ];
        $tooltips[] = (object)[
            "color" => "btn-outline-secondary",
            "data_toggle" => "tooltip",
            "data_placement" => "bottom",
            "data_original_title" => "Tooltip",
            "text" => "Tooltip on bottom"
        ];
        $tooltips[] = (object)[
            "color" => "btn-outline-secondary",
            "data_toggle" => "tooltip",
            "data_placement" => "left",
            "data_original_title" => "Tooltip",
            "text" => "Tooltip on left"
        ];

        $popovers = [];

        $popovers[] = (object)[
            "color" => "btn-secondary",
            "data_toggle" => "popover",
            "data_placement" => "top",
            "data_container" => "body",
            "title" => "Popover title",
            "text" => "Popover on top",
            "data_content" => "Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
        ];
        $popovers[] = (object)[
            "color" => "btn-secondary",
            "data_toggle" => "popover",
            "data_placement" => "right",
            "data_container" => "body",
            "title" => "Popover title",
            "text" => "Popover on right",
            "data_content" => "Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
        ];
        $popovers[] = (object)[
            "color" => "btn-secondary",
            "data_toggle" => "popover",
            "data_placement" => "bottom",
            "data_container" => "body",
            "title" => "Popover title",
            "text" => "Popover on bottom",
            "data_content" => "Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
        ];
        $popovers[] = (object)[
            "color" => "btn-secondary",
            "data_toggle" => "popover",
            "data_placement" => "left",
            "data_container" => "body",
            "title" => "Popover title",
            "text" => "Popover on left",
            "data_content" => "Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
        ];

        return [
            'userCards' => $userCards,
            'cards' => $cards,
            'generalButtons' => $generalButtons,
            'buttonsWithOutline' => $buttonsWithOutline,
            'buttonsSize' => $buttonsSize,
            'tooltips' => $tooltips,
            'popovers' => $popovers
        ];
    }
}
