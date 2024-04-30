<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;

class menuBtn extends Component
{
    public $id;
    public $type;
    public $addClass;
    public $icon;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $type = 'button', $addClass = null, $icon)
    {
        $this->id = $id;
        $this->type = in_array($type, ['button', 'menu', 'reset', 'submit']) ? $type : 'button';
        $this->addClass = $addClass;
        $this->icon = new HtmlString($icon);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.menu-btn');
    }
}
