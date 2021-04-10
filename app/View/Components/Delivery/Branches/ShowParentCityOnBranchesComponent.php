<?php

namespace App\View\Components\Delivery\Branches;

use Illuminate\View\Component;

class ShowParentCityOnBranchesComponent extends Component
{
    public $id;
    public $namearabic;
    public $nameenglish;
    public $country;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $namearabic, $nameenglish, $country, $active)
    {
        //
        $this->id = $id;
        $this->namearabic = $namearabic;
        $this->nameenglish = $nameenglish;
        $this->country = $country;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delivery.branches.show-parent-city-on-branches-component');
    }
}
