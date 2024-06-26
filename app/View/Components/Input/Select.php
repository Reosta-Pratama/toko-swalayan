<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $id;
    public $label;
    public $name;
    public $top;
    public $required;
    public $addClass;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $label=null, $name, $top, $required=false, $addClass=null)
    {
        //
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->top = $top;
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
