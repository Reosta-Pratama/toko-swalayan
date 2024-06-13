<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;

class IconTextBtn extends Component
{
    public $name;
    public $type;
    public $icon;
    public $addClass;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $icon, $addClass)
    {
        //
        $this->name = $name;
        $this->type = $type;
        $this->icon = new HtmlString($icon);
        $this->addClass = $addClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.icon-text-btn');
    }
}
