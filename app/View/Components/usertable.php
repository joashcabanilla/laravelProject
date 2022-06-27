<?php

namespace App\View\Components;

use Illuminate\View\Component;

class usertable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $collection;
    public function __construct($collection)
    {
        $this->collection=$collection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.usertable');
    }
}
