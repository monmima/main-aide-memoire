<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZHcontroller extends Controller
{
    // show all entries
    public function index()
    {
        $data = \DB::table("zh_tb")
            ->get();

        // if item does not exist in database
        if (! $data) {
            abort(404);
        }

        // result
        // return [
        //     "data" => $data
        // ];

        // return view("zh/index", [
        //     "data" => $data
        // ]);

        return view("zh/index", [
            "data" => $data
        ]);
    }
}
