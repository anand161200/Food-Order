<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientSideController extends Controller
{

    public function allCart()
    {
        return DB::table('carts')
            ->select([
                'carts.*',
                'food_detail.food_name',
                'food_detail.images',
                'food_detail.price',
            ])
            ->join('food_detail', 'carts.menu_id', '=', 'food_detail.id')
            ->where('user_id', Auth::user()->id)
            ->get();
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

        return view('client_side.Home')->with(['fooddetail' => $menus, 'all_cart' => $this->allCart()]);
    }


    function About()
    {
        return view('client_side.about')->with(['all_cart' => $this->allCart()]);
    }


    function Gallery()
    {
        return view('client_side.gallery')->with(['all_cart' => $this->allCart()]);
    }

    function Contact_us()
    {
        return view('client_side.contact_us')->with(['all_cart' => $this->allCart()]);
    }

    function UserProfile()
    {
        return view('client_side.user_profile_update');
    }

    function UserPassword()
    {
        return view('client_side.user_password_update');
    }
}
