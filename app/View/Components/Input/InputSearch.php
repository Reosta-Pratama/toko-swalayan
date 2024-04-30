<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSearch extends Component
{
    public $id;
    public $name;
    public $placeholder;
    public $addClass;
    public $required;
    public $autocomplete;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $placeholder, $addClass=null, $required=false, $autocomplete=false)
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->addClass = $addClass;
        $this->required = $required;
        $this->autocomplete = $autocomplete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.input-search');
    }
}
