<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryResource::collection(Category::all());
        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        $category = Category::create($request->validated());
        CategoryResource::make($category);
        return view('category.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Category $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categories)
    {
        //
    }
}
