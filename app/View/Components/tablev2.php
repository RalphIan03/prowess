<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tablev2 extends Component
{
    
    public $tableTitle;

    public function __construct($tableTitle)
    {
        $this->tableTitle = $tableTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tablev2');
    }
}
