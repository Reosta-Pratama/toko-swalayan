<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class td extends Component
{
    public $addClass;

    /**
     * Create a new component instance.
     */
    public function __construct($addClass=null)
    {
        //
        $this->addClass = $addClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.td');
    }
}
