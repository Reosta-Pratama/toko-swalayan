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
    public $type;
    public $onclick;
    public $addClass;
    public $icon;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $type = 'button', $onclick = null, $addClass = null, $icon)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = in_array($type, ['button', 'menu', 'reset', 'submit']) ? $type : 'button';
        $this->onclick = $onclick;
        $this->addClass = $addClass;
        $this->icon = new HtmlString($icon);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.icon-btn');
    }
}
