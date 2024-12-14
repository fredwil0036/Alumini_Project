<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbasboardController extends Controller
{
    public function index(){
        return view('alumni.dashboard');
    }
}