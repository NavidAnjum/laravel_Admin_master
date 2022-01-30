<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;


class AuthController extends Controller
{


    public function login(Request $request)
    {

        $user_id=str_replace("admin","",$request->shop_id);
        $credentials = [
            'id' => $user_id,
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {
            return view('layout.supplier.add_supplier');
         //   return redirect()
        }

        return 'Failure';




    }
}
