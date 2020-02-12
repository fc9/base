<?php

namespace App\Services;


class DashboardService
{
    /**
     * This is where you implement your logic to get the data for a
     * chart. We begin here with an example to get you started.
     * It will most likely come from DB or webservice.
     *
     * @return array
     */
    public function getChart2Data()
    {
        $title = 'Revenue Statistics';

        $subtitle = 'January 2019';

        $seriesTitles = [
            "Product A",
            "Product B",
        ];

        $seriesClasses = [
            "text-success",
            "text-info",
        ];

        $series = [
            [0, 2, 3.5, 0, 13, 1, 4, 1],
            [0, 4, 0, 4, 0, 4, 0, 4]
        ];

        $labels = ['0', '4', '8', '12', '16', '20', '24', '30'];

        $high = collect($series)->flatten()->max() + 2;

        $low = 0;

        return [
            'title'         => $title,
            'subtitle'      => $subtitle,
            'seriesTitles'  => $seriesTitles,
            'seriesClasses'  => $seriesClasses,
            'labels'        => $labels,
            'series'        => $series,
            'high'          => $high,
            'low'           => $low,
        ];
    }

    public function getChartSales()
    {
        $title = 'Sales of the Month';

        $seriesTitles = [
            "Item A",
            "Item B",
            "Item C",
            "Item D"
        ];


        $colors = ["#edf1f5", "#009efb", "#55ce63", "#745af2"];

        $data = [
            ['value' => 835, 'name' => 'Item A'],
            ['value' => 310, 'name' => 'Item B'],
            ['value' => 134, 'name' => 'Item C'],
            ['value' => 235, 'name' => 'Item D']
        ];

        return [
            'title'          => $title,
            'seriesTitles'   => $seriesTitles,
            'data'           => $data,
            'colors'         => $colors
        ];
    }

    public function getSalesPrediction(){

        $title = 'Sales Prediction';

        $series = [35, 15, 10];

        $data = [
            ['value' => 835, 'name' => 'Item A'],
            ['value' => 310, 'name' => 'Item B'],
            ['value' => 134, 'name' => 'Item C'],
            ['value' => 235, 'name' => 'Item D']
        ];

        return [
            'title'          => $title,
            'series'         => $series,
            'data'           => $data
        ];
    }

    public function getSalesDifference(){

        $title = 'Sales Difference';

        $series = [35, 15, 10];

        return [
            'title'          => $title,
            'series'         => $series
        ];
    }
}
