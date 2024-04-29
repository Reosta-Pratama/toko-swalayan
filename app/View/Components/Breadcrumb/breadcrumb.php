<?php

namespace App\View\Components\Breadcrumb;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb extends Component
{
    public $nav1;
    public $nav2;
    public $nav3;
    public $nav4;
    public $href1;
    public $href2;
    public $href3;
    /**
     * Create a new component instance.
     */
    public function __construct($nav1, $nav2, $nav3 = null, $nav4 = null, $href1, $href2 = null, $href3 = null)
    {
        //
        $this->nav1 = $nav1;
        $this->nav2 = $nav2;
        $this->nav3 = $nav3;
        $this->nav4 = $nav4;

        $this->href1 = $href1;
        $this->href2 = $href2;
        $this->href3 = $href3;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb.breadcrumb');
    }
}
