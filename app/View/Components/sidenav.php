<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidenav extends Component
{   
    /**
     * The active page.
     *
     * @var string
     */
    public $active;

    /**
     * Create a new component instance.
     * @param  string  $active
     * @return void
     */
    public function __construct($active = '')
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidenav');
    }
}
