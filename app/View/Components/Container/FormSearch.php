<?php

namespace App\View\Components\Container;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSearch extends Component
{
    public $action;
    public $addClass;
    /**
     * Create a new component instance.
     */
    public function __construct($action, $addClass=null)
    {
        //
        $this->action = $action;
        $this->addClass = $addClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.container.form-search');
    }
}
