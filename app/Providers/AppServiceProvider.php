<?php

namespace App\Providers;

use App\View\Components\Delivery\Areas\ShowParentLocalityComponent;
use App\View\Components\Delivery\Branches\ShowParentCityOnBranchesComponent;
use App\View\Components\Delivery\Discounts\ShowDiscountComponent;
use App\View\Components\SubCategory\ParentCategoryComponent;
use App\View\Components\SubCategory\ShowSubCategoryProductParentUnitComponent;
use App\View\Components\Units\ShowUnitInformationComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::component('parent-category-component', ParentCategoryComponent::class);
        Blade::component('parent-unit-component', ShowSubCategoryProductParentUnitComponent::class);
        Blade::component('show-unit-component', ShowUnitInformationComponent::class);
        Blade::component('parent-locality-component', ShowParentLocalityComponent::class);
        Blade::component('parent-city-component', ShowParentCityOnBranchesComponent::class);
        Blade::component('delivery-discount-component', ShowDiscountComponent::class);
    }
}
