<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{   
    /**
     * The active page.
     * 
     * @var string
     */
    public $page;
    /**
     * Create a new component instance.
     * @param  string  $active
     * @return void
     */

    public function __construct($page = '')
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
