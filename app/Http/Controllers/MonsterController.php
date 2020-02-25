<?php

namespace App\Http\Controllers;

use App\Overrides\BladeViewService;
use App\Overrides\ComponentsService;
use App\Overrides\DashboardService;

class MonsterController extends Controller
{
    public function index()
    {
        return view('demo-apps.monster.home-one');
    }

    public function hometwo()
    {
        return view('demo-apps.monster.home-two');
    }

    /**
     * Simulating a connection to a database/webservice, to
     * fetch data, putting it in Javascript/Client-Side
     * So then it will be rendered in the browser
     *
     */
    public function PHPToJSVars(DashboardService $dashboardService)
    {
        //Fetching data
        $chart2Data = $dashboardService->getChart2Data();
        $chartSales = $dashboardService->getChartSales();
        $salesDifference = $dashboardService->getSalesDifference();
        $salesPrediction = $dashboardService->getSalesPrediction();

        //Passing data to the view
        return view('app.dashboard')
            ->with('chart2Data', $chart2Data)
            ->with('salesPrediction', $salesPrediction)
            ->with('salesDifference', $salesDifference)
            ->with('chartSales', $chartSales);
    }

    public function bladeComponents(ComponentsService $componentsService)
    {
        return view('demo-apps.monster.blade-components')->with('tabs', $componentsService->getTabs());
    }

    public function bladeLoops(BladeViewService $bladeViewService, ComponentsService $componentsService)
    {
        return view('demo-apps.monster.blade-loops')
            ->with('data', $bladeViewService->getData())
            ->with('tabs', $componentsService->getTabs());
    }

    public function boxed()
    {
        return view('demo-apps.monster.home-boxed');
    }

    public function logoCenter()
    {
        return view('demo-apps.monster.logo-center');
    }

    public function singleColumn()
    {
        return view('demo-apps.monster.single-column');
    }

    public function fixHeader()
    {
        return view('demo-apps.monster.fix-header');
    }

    public function fixSidebar()
    {
        return view('demo-apps.monster.fix-sidebar');
    }

    public function fixHeaderSidebar()
    {
        return view('demo-apps.monster.fix-header-sidebar');
    }

    public function groupPage($group, $page)
    {
        return view('demo-apps.monster.group-page')
            ->withGroup($group)
            ->withPage($page);
    }
}
