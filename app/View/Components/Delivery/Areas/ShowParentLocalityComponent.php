<?php

namespace App\View\Components\Delivery\Areas;

use Illuminate\View\Component;

class ShowParentLocalityComponent extends Component
{
    public $id;
    public $namear;
    public $nameen;
    public $city;
    public $deliveryprice;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $namear, $nameen, $city, $deliveryprice, $active)
    {
        //
        $this->id = $id;
        $this->namear = $namear;
        $this->nameen = $nameen;
        $this->city = $city;
        $this->deliveryprice = $deliveryprice;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delivery.areas.show-parent-locality-component');
    }
}
