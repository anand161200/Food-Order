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

        $total = DB::table('carts')
            ->select([
                DB::raw('sum(carts.quantity * food_detail.price) as total')
            ])
            ->join('food_detail', 'carts.menu_id', '=', 'food_detail.id')
            ->where('user_id', Auth::user()->id)
            ->first();

        return view('client_side.cart')->with([
            'all_cart' => $all_cart,
            'sub_total' => $total
        ]);
    }

    public function AddtoCart($menu_id)
    {
        $card_details = Cart::where('menu_id', $menu_id)
            ->where('user_id', Auth::user()->id)
            ->get();

        // dd($card_details);

        if (count($card_details) > 0) {
            foreach ($card_details as $item) {
                $item->quantity = $item->quantity + 1;
                $item->save();
            }
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->menu_id = $menu_id;
            $cart->current_date = Carbon::now();
            $cart->save();
        }

        return redirect()->route('view_cart');
    }

    public function updatecart($cart_id = null, $quantity = null)
    {

        // $cart = Cart::find($cart_id);

        DB::table('carts')->where('id', $cart_id)->increment('quantity', $quantity);

        return redirect()->route('view_cart');
    }


    public function deleteCart($cart_id)

    {
        $delete_cart = Cart::find($cart_id);
        $delete_cart->delete();

        return redirect()->route('view_cart');
    }
}
