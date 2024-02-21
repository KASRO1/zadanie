<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Coin;

class AdminController extends Controller
{
    public function showUsers()
    {
        $users = User::all()->toArray();
        return view("admin.users", ["Users" => $users]);
    }
    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        if($user){
            $user->delete();
            return response()->json(["success" => true], 200);
        }
        return response()->json(["success" => false], 400);
    }

    public function showCoins(){
        $coins = Coin::all()->toArray();
        return view("admin.coins", ["Coins" => $coins]);
    }
    public function deleteCoin(Request $request)
    {
        $coin = Coin::find($request->id);
        if($coin){
            $coin->delete();
            return response()->json(["success" => true], 200);
        }
        return response()->json(["success" => false], 400);
    }

    public function createCoin(Request $request)
    {
       $validator = Validator::make($request->all(), [
            "full_name" => "required",
            "symbol" => "required",
            "id_coingap" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $coin = Coin::create([
            "name" => $request->name,
            "symbol" => $request->symbol,
            "id_coingap" => $request->id_coingap,
        ]);

        if(!$coin) {
            return response()->json(["success" => false], 400);
        }

        return response()->json(["success" => true], 200);
    }
}
