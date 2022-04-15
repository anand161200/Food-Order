<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientSideController extends Controller
{
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


    function Gallery()
    {
        return view('client_side.gallery');
    }

    function Contact_us()
    {
        return view('client_side.contact_us');
    }
}
