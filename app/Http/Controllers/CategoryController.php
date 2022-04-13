<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryshow()
    {
        $category_list = category::all();

        return view('Category.categorylist')->with([
            'categorydata' => $category_list
        ]);
    }

    public function addCategory()
    {
        return view('Category.add_category');
    }


    public function categoryinsert(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);


        $add_category = new category();
        $add_category->category_name = $request->category_name;
        $add_category->save();

        return redirect()->route('categorylist');
    }

    function editData($id)
    {
        $edit_category = category::where('id', $id)->first();

        return view('Category.edit_category')->with(['edit_category' => $edit_category]);
    }

    function updateData(Request $request)
    {

        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);

        $update_category = category::find($request->id);
        $update_category->category_name = $request->category_name;
        $update_category->save();

        return redirect()->route('categorylist');
    }

    function deleteData($id)
    {

        $delete_category = category::find($id);
        $delete_category->delete();
        return redirect()->route('categorylist');
    }
}
