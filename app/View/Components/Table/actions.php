<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;

class actions extends Component
{
    public $icon;
    public $type;
    public $href;
    /**
     * Create a new component instance.
     */
    public function __construct($icon, $type, $href)
    {
        //
        $this->icon = new HtmlString($icon);
        $this->type = $type;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.actions');
    }
}
