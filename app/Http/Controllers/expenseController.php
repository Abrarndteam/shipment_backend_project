<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class expenseController extends Controller
{
    function uploadExp()
    {


        $post = new Expense;

        $post->title = $request->title;
        $post->expense = $request->expense;
        $post->date = $request->date;
        if ($results) {
            return ["result" => "Added"];
        } else {
            return ["result" => " Not Added"];
        }
    }



    function listExp(Request $request)
    {
        return Expense::all();
    }



    function updateExp(Request $req)
    {
        $post = Expense::find($id);
        if () {
            $post->title = $request->title;
            $post->expense = $request->expense;
            $post->date = $request->date;
            $results = $post->update();
            return ["result" => "updated"];
        } else {
            return ["result" => " Not found"];
        }
    }



    function deleteExp()
    {
        $post = Expense::find();
        if () {
            $results = $post->delete();
            return ["result" => "deleted successfully"];
        } else {
            return ["result" => " Not found"];
        }
    }
}
