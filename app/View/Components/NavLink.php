<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $route;
    public $label;

    /**
     * Create a new component instance.
     *
     * @param string $route
     * @param string $label
     * @return void
     */
    public function __construct($route, $label)
    {
        $this->route = $route;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
