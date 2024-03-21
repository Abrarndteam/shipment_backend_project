<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cods;

class codController extends Controller
{
    function uploadData()
    {


        $post = new Cod;

        $post->name = $request->name;
        $post->business_name = $request->business_name;
        $post->business_address = $request->business_address;
        $post->other_field = $request->other_field;
        $post->return_address = $request->return_address;
        $post->receiver_name = $request->receiver_name;
        $post->receiver_address = $request->receiver_address;
        $post->product_price = $request->product_price;
        $post->total_price = $request->total_price;
        $post->shipping_charges = $request->shipping_charges;
        $post->receiver_contact = $request->receiver_contact;
        if ($results) {
            return ["result" => "Added"];
        } else {
            return ["result" => " Not Added"];
        }
    }



    function listData(Request $request)
    {
        return Cod::all();
    }



    function updateData(Request $req)
    {
        $post = Cod::find();
        if ($post) {
            $post->name = $request->name;
            $post->business_name = $request->business_name;
            $post->business_address = $request->business_address;
            $post->other_field = $request->other_field;
            $post->return_address = $request->return_address;
            $post->receiver_name = $request->receiver_name;
            $post->receiver_address = $request->receiver_address;
            $post->product_price = $request->product_price;
            $post->total_price = $request->total_price;
            $post->shipping_charges = $request->shipping_charges;
            $post->receiver_contact = $request->receiver_contact;
            $results = $post->update();
            return ["result" => "updated"];
        } else {
            return ["result" => " Not found"];
        }
    }



    function deleteData()
    {
        $post = Cod::find($id);
        if ($post) {
            $results = $post->delete();
            return ["result" => "deleted successfully"];
        } else {
            return ["result" => " Not found"];
        }
    }
}
