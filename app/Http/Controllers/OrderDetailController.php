<?php

namespace App\Http\Controllers;

use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    public function CheckOutForm()
    {
        $total = DB::table('carts')
            ->select([
                DB::raw('sum(carts.quantity * food_detail.price) as total')
            ])
            ->join('food_detail', 'carts.menu_id', '=', 'food_detail.id')
            ->where('user_id', Auth::user()->id)
            ->first();

        $result = (new ClientSideController)->allCart();
        return view('client_side.checkout')->with(['all_cart' => $result, 'sub_total' => $total]);;
    }

    public function StoreOrder(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'contact_number' => 'required',
            'Name_of_card' => 'required',
            'Credit_card_number' => 'required',
            'Expiration' => 'required',
            'CVV' => 'required',

        ]);

        $order = new PaymentDetail();
        $order->order_id = time();
        $order->amount = $request->amount;
        $order->address = $request->address;
        $order->contact_number = $request->contact_number;
        $order->Name_of_card = $request->Name_of_card;
        $order->Credit_card_number = $request->Credit_card_number;
        $order->Expiration = $request->Expiration;
        $order->CVV = $request->CVV;
        $order->save();
        return view('client_side.Home');
    }
}
