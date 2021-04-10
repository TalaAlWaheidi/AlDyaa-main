<?php

namespace App\View\Components\Units;

use Illuminate\View\Component;

class ShowUnitInformationComponent extends Component
{
    public $id;
    public $image;
    public $arabicname;
    public $englishname;
    public $arabicdesc;
    public $englishdesc;
    public $rate;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $image, $arabicname, $englishname, $arabicdesc, $englishdesc, $rate, $active)
    {
        //
        $this->id = $id;
        $this->image = $image;
        $this->arabicname = $arabicname;
        $this->englishname = $englishname;
        $this->arabicdesc = $arabicdesc;
        $this->englishdesc = $englishdesc;
        $this->rate = $rate;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.units.show-unit-information-component');
    }
}
