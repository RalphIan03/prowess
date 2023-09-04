<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{


    public $cardTitle;
    public $cardData;

    /**
     * Create a new component instance.
     */
    public function __construct($cardTitle, $cardData)
    {
        $this->cardTitle = $cardTitle;
        $this->cardData = $cardData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}
