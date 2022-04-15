<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\FoodDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FoodDetailController extends Controller
{
    public function index()
    {
        $menus = DB::table('food_detail')
            ->select([
                'food_detail.*',
                'categories.category_name'
            ])
            ->join('categories', 'food_detail.category_id', '=', 'categories.id')
            ->get();

        $group_data = $menus->groupBy('category_name');

        // dd($group_data->toArray());

        return view('Food_Details.index')->with(['fooddata' => $group_data]);
    }

    public function addfrom()
    {
        return view('Food_Details.add_food')->with('categorydata', category::all());
    }


    public function insert(Request $request)
    {
        $request->validate([
            'food_name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|max:5',
            'images' => 'required'
        ]);

        $menu = new FoodDetail();
        $menu->food_name = $request->food_name;
        $menu->description = $request->description;
        $menu->category_id = $request->category;
        $menu->price = $request->price;

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/foodimage/', $filename);
            $menu->images = $filename;
        }
        $menu->save();

        return redirect()->route('index');
    }

    function editData($id)
    {
        $food_detail = FoodDetail::where('id', $id)->first();
        return view('Food_Details.edit_food')->with([
            'food_detail' => $food_detail,
            'categorydata' => category::all()
        ]);
    }

    function updateData(Request $request)
    {

        $request->validate([
            'food_name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|max:5'
        ]);

        $menu = FoodDetail::find($request->id);
        $menu->food_name = $request->food_name;
        $menu->description = $request->description;
        $menu->category_id = $request->category;
        $menu->price = $request->price;

        if ($request->hasFile('images')) {

            $destination = 'uploads/foodimage/' . $menu->images;

            if (File::exists($destination)) {

                File::delete($destination);
            }

            $file = $request->file('images');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/foodimage/', $filename);
            $menu->images = $filename;
        }


        $menu->save();

        return redirect()->route('index');
    }

    function deleteData($id)
    {
        $delete_food = FoodDetail::find($id);

        $destination = 'uploads/foodimage/' . $delete_food->images;
        File::delete($destination);

        $delete_food->delete();
        return redirect()->route('index');
    }


    function viewData($id)
    {

        $viewfood = FoodDetail::where('id', $id)->first();

        return view('Food_Details.view_foodDetail')->with(['user' => $viewfood]);
    }

    function UserHome()
    {
        $menus = DB::table('food_detail')
            ->select([
                'food_detail.*',
                'categories.category_name'
            ])
            ->join('categories', 'food_detail.category_id', '=', 'categories.id')
            ->get();

        return view('client_side.Home')->with(['fooddetail' => $menus]);
    }


    function About()
    {
        return view('client_side.about');
    }
}
