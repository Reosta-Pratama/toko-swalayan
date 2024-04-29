<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddButton extends Component
{
    public $href;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($href, $name)
    {
        //
        $this->href = $href;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.add-button');
    }
}
