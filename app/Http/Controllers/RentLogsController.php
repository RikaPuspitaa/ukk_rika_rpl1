<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;


class RentLogsController extends Controller
{
    public function index()
    {
        $rentlogs = RentLogs::with(['user', 'company'])->get();
        return view('rentlog', ['rent_logs' =>  $rentlogs]);
    }
}
