<?php

namespace App\Http\Controllers\Reigistar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbasboardController extends Controller
{
    public function index(){
        return view('registrar.dashboard');
    }
}
