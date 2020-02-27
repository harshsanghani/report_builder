<?php

namespace App\Helpers;

class ReportBuilder {
    public static function get() {
        //$users = \App\User::all();
        $users = \DB::table('users')->get();

        return $users;
    }
}