<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(Request $request)
    {

        return view('admin.login');
    }
    // public function login(Request $request)
    // {
    //     $validate = $request->validate(
    //         [
    //             'email' => 'required|email',
    //             'password' => 'required',
    //         ],
    //     );
    //     if ($validate) {

    //         if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
    //             return redirect()->route('admin/index');
    //         } else {
    //             return redirect()->back()->with('error', 'Email or password is wrong');
    //         }
    //     }
    // }
}
