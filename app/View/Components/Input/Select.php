<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $id;
    public $name;
    public $required;
    public $addClass;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $required=false, $addClass=null)
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->required = $required;
        $this->addClass = $addClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.select');
    }
}
