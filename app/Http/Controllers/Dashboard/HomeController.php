<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Services\DashboardService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function home(DashboardService $dashboardService)
    {
//        auth()->logout();
//        return redirect()->route('/');

        //Fetching data
        $chart2Data = $dashboardService->getChart2Data();
        $chartSales = $dashboardService->getChartSales();
        $salesDifference = $dashboardService->getSalesDifference();
        $salesPrediction = $dashboardService->getSalesPrediction();

        $currency_sign_BTC = config('bank.currency.BTC.sign');
        $currency_sign_USD = config('bank.currency.USD.sign');

        //Passing data to the view
        return view('dashboard.home')
            ->with('chart2Data', $chart2Data)
            ->with('salesPrediction', $salesPrediction)
            ->with('salesDifference', $salesDifference)
            ->with('chartSales', $chartSales)
            ->with('currency_signal_BTC', $currency_sign_BTC)
            ->with('currency_signal_USD', $currency_sign_USD);
    }
}
