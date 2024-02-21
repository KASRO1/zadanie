<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required|min:8",
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $credentials = $request->only("email", "password");

        if (auth()->attempt($credentials)) {
            return response()->json(["success" => true]);
        }

        return response()->json(["errors" =>["email"=>["The email field must be a valid email address."]]], 400);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => "required|email|unique:users",
            "password" => "required|confirmed|min:8",
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user = User::create([
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => "user"
        ]);

        if(!$user) {
            return response()->json(["success" => false]);
        }
        auth()->login($user);

        return response()->json(["success" => true]);
    }

    public function logout()
    {
        if(Auth::check()) {
            Auth::logout();
        }
        return redirect()->route("main");
    }

    public function getAssets(){
        $coins = Coin::all()->toArray();
        return response()->json($coins, 200);
    }
}
