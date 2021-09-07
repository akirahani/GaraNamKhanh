<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Calendar;
class DashboardController extends Controller
{
      public function index()
        {
            $calendar = Calendar::all();
            return view('backend.calendar.calendar_index',compact('calendar'));
        }
}
