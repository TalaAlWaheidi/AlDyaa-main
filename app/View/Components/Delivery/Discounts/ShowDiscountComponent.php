<?php

namespace App\View\Components\Delivery\Discounts;

use Illuminate\View\Component;

class ShowDiscountComponent extends Component
{
    public $id;
    public $amount;
    public $percentage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $amount, $percentage)
    {
        //
        $this->id = $id;
        $this->amount = $amount;
        $this->percentage = $percentage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delivery.discounts.show-discount-component');
    }
}
