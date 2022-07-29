<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();
        return view ('setting',['categories'=>$allCategories]);
    }
    public function create()
    {
        $allCategories=Category::all();
        return view ('add_category');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return redirect ('categories')->with('flash_message','New Category Added!');
    }
    public function update(Request $request, $id)
    {
        $orders = Category::find($id);
        $input = $request->all();
        $orders->update($input);
        return redirect('categories')->with('flash_message','Category Updated!');
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('categories')->with('flash_message','Category Deleted!');
    }
    public function edit($id)
    {   

        $selectedcategories = Category::find($id);
        return view('edit_category',['category'=>$selectedcategories]);

    }
}
