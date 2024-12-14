<?php

namespace App\Http\Controllers\AlumniHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbasboardController extends Controller
{
    public function index(){
        return view('alumniHead.dashboard');
    }
}
