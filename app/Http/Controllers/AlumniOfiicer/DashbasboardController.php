<?php

namespace App\Http\Controllers\AlumniOfiicer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbasboardController extends Controller
{
    public function index(){
        return view('alumniOfficer.dashboard');
    }
}
