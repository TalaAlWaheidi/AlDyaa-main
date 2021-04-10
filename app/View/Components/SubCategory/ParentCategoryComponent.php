<?php

namespace App\View\Components\SubCategory;

use Illuminate\View\Component;

class ParentCategoryComponent extends Component
{
    public $id;
    public $message;
    public $category;
    public $nameeng;
    public $descen;
    public $descar;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $message, $category, $nameeng, $descen, $descar, $active)
    {
        //
        $this->id = $id;
        $this->message = $message;

        $this->category = $category;
        $this->nameeng = $nameeng;
        $this->descen = $descen;
        $this->descar = $descar;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-category.parent-category-component');
    }
}
