<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class CartController extends Controller
{

    public function ViewCart()
    {
        $all_cart = DB::table('carts')
            ->select([
                'carts.*',
                'food_detail.food_name',
                'food_detail.images',
                'food_detail.price',
            ])
            ->join('food_detail', 'carts.menu_id', '=', 'food_detail.id')
            ->where('user_id', Auth::user()->id)
            ->get();

        return view('client_side.cart')->with(['all_cart' => $all_cart]);
    }

    public function AddtoCart($menu_id)
    {
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->menu_id = $menu_id;
        $cart->current_date = Carbon::now();
        $cart->save();

        return redirect()->route('view_cart');
    }

    public function updatecart($cart_id, $quantity)
    {

        $cart = Cart::find($cart_id);

        // DB::table('carts')->where('id', $cart_id)->increment('quantity', $quantity);

        return redirect()->route('view_cart');
    }


    public function deleteCart($cart_id)

    {
        $delete_cart = Cart::find($cart_id);
        $delete_cart->delete();

        return redirect()->route('view_cart');
    }
}
