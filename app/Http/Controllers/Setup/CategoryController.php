<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setup\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('setup.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {

        Category::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => null,
            'description_ar' => $request->desc_ar,
            'description_en' => $request->desc_en,
            'active' => $request->active ?? 0
        ]);
        return  redirect()->route('setups.category.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category  $category)
    {
        //
        return view('setup.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request,Category $category)
    {
        //
        $category->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => null,
            'description_ar' => $request->desc_ar,
            'description_en' => $request->desc_en,
            'active' => $request->active ?? 0
        ]);
        return  redirect()->route('setups.category.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return  redirect()->route('setups.category.all');
    }
}
