<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexCategory()
    {
        $Categories = Category::all();

        return view ('categories.viewCat', compact('Categories'));
    }

    
    public function CategoryForm()
    {
        return view ('categories.addCat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCat(Request $request)
    {
        $request->validate( [
            'name' => 'required',
        ] );

        $Category = new Category();
        $Category->name = $request->name;
        $Category->save();

        return redirect(route('Category.view'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
