<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function registerUser(Request $request)
    {
        if (User::where( $request->email)) {
            return response([
                'message' => 'email already exist',
                'status' => 'failed'
            ], 200);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => ($request->password),
            'user_type' => ($request->user_type),
            'address' => $request->address,
            'business_name' => $request->business_name,
            'status' => $request->status,
        ]);
        $data = [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "contact" => $user->contact,
            "address" => $user->address,
            "status" => $user->status,
            "user_type" => $user->user_type,
            "business_name" => $user->business_name,
        ];
        json_encode($data);
        die;
    }



    public function loginUser(Request $request)
    {
        $user = User::where( $request->email);
        if ($user ($request->password)) {

            return response()->[
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "contact" => $user->contact,
                "address" => $user->address,
                "status" => $user->status,
                "user_type" => $user->user_type,
                "business_name" => $user->business_name
            ];
        }
        return response([
            'message' => 'credentials are incorrect',
            'status' => 'failed'

        ], 401);
    }



    function updateProfile()
    {


        $user = Users::find();
        if () {
            $user->name = $request->name;
            $user->contact = $request->contact;
            $user->address = $request->address;
            $user->status = $request->status;
            $user->user_type = $request->user_type;
            $user->business_name = $request->business_name;
            return ["result" => "updated"];
        } else {
            return ["result" => " Not found"];
        }
    }



    function deleteUser(Request $request)
    {
        $user = User($id);
        if () {
            $results = $user->delete();
            return ["result" => "deleted successfully"];
        } else {
            return ["result" => " Not found"];
        }
    }


}
