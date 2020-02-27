<?php

namespace App\Http\Controllers;

use App\Helpers\ReportBuilder;

class Report extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $result = ReportBuilder::get();
        dd($result);
    }
}
