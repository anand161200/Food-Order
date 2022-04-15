<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\FoodDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class usercontroller extends Controller
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions;

    public function dashboard()
    {
        $total_category = category::count();
        $total_menu = FoodDetail::count();

        return view('dashboard')->with([
            'total_category' => $total_category,
            'total_menu' => $total_menu
        ]);
    }

    public function viewRegister()
    {
        return view('auth.registration');
    }

    public function addNewUser(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'required',
            'contact_number' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'Zip_code' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User();
        $user->user_name = $request->user_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->date_of_birth = $request->date_of_birth;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->Zip_code = $request->Zip_code;
        $user->password = bcrypt($request->password);
        $user->save();

        $user->assignRole(2);

        return redirect()->route('login_form');
    }

    public function loginform()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->hasrole('admin')) {
                return redirect()->route('dashboard');
            }
            return redirect()->route('user_Home');
        }

        Session::flash('message', 'Email or passsword inccorect.');

        return back();
    }

    public function editprofile()
    {
        return view('auth.update_profile');
    }

    public function updateUser(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'Zip_code' => 'required'
        ]);

        $user = User::find($request->id);
        $user->user_name = $request->user_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->date_of_birth = $request->date_of_birth;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->Zip_code = $request->Zip_code;
        $user->save();

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function UpdatepasswordForm()
    {
        return view('auth.update_password');
    }

    public function updatepassword(Request $request)
    {

        $request->validate([

            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('dashboard');
    }
}
