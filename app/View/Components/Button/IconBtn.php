<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;

class IconBtn extends Component
{
    public $id;
    public $name;
    public $href;
    public $addClass;
    public $icon;
    public $target;
    public $textColor;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $href, $addClass=null, $icon, $target=false, $textColor)
    {
        $this->id = $id;
        $this->name = $name;
        $this->href = $href;
        $this->addClass = $addClass;
        $this->icon = new HtmlString($icon);
        $this->target = $target;
        $this->textColor = $textColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.icon-btn');
    }
}
