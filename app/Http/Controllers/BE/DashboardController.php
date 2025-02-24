<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {

    }

    public function index()
    {
        $config=$this->config();

        $template='be.dashboard.home.index';
        return view('be.dashboard.layout',compact('template','config'));
    }


private function config()
{
    return [
        'js' => [
            // Flot plugins
            'backend/js/plugins/flot/jquery.flot.js',
            'backend/js/plugins/flot/jquery.flot.spline.js',
            'backend/js/plugins/flot/jquery.flot.tooltip.min.js',
            'backend/js/plugins/flot/jquery.flot.resize.js',
            'backend/js/plugins/flot/jquery.flot.pie.js',
            'backend/js/plugins/flot/jquery.flot.symbol.js',
            'backend/js/plugins/flot/jquery.flot.time.js',

            // Peity plugins
            'backend/js/plugins/peity/jquery.peity.min.js',
            'backend/js/demo/peity-demo.js',

            // Custom and plugin JavaScript
            'backend/js/inspinia.js',
            'backend/js/plugins/pace/pace.min.js',

            // jQuery UI
            'backend/js/plugins/jquery-ui/jquery-ui.min.js',

            // Jvectormap plugins
            'backend/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
            'backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',

            // Sparkline and EasyPieChart plugins
            'backend/js/plugins/sparkline/jquery.sparkline.min.js',
            'backend/js/plugins/easypiechart/jquery.easypiechart.js',
            'js/demo/sparkline-demo.js',
        ],
    ];
}
}