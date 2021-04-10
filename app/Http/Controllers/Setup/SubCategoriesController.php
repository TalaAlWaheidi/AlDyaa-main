<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setup\CreateSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subCategories = SubCategory::all();
        return view('setup.subCategories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('setup.subCategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSubCategoryRequest $request)
    {
        //
        SubCategory::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'category_id' => $request->category,
            'description_ar' => $request->desc_ar,
            'description_en' => $request->desc_en,
            'active' => $request->active ?? 0
        ]);
        return redirect()->route('setups.sub.category.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        $subProducts = $subCategory->products;
        return view('setup.subCategories.show', compact('subProducts', 'subCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('setup.subCategories.edit', compact('categories', 'subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSubCategoryRequest $request,SubCategory $subCategory)
    {
        $subCategory->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'category_id' => $request->category,
            'description_ar' => $request->desc_ar,
            'description_en' => $request->desc_en,
            'active' => $request->active ?? 0
        ]);
        return redirect()->route('setups.sub.category.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('setups.sub.category.all');
    }
}
