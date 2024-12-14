<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class RegistrarLayout extends Component
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.registrarHead');
    }
}
