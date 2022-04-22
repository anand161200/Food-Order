<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function GetInTouch(Request $request)
    {
        $result = (new ClientSideController)->allCart();

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('Contact_us')->with(['all_cart' => $result]);
    }

    function UserContactlist()
    {

        $user_contact_list = ContactUs::all();

        return view('admin_side.user_contact_list')->with([
            'user_contact_list' => $user_contact_list
        ]);
    }

    function DeleteContactlist($id)
    {
        $delete_conact = ContactUs::find($id);
        $delete_conact->delete();
        return redirect()->route('conatct_list');
    }
}
