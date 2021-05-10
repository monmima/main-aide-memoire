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

    // show the create form
    public function create()
    {
        // result
        return view("zh/create");
    }

    // submit the create form
    // after you clicked Submit
    public function store()
    {
        // die("hello");
        // dump(request()->all());

        // create new entry
            \DB::table('zh_tb')->insert([
                'fr' => request("fr"),
                'pinyin' => request("pinyin"),
                'zh' => request("zh")
            ]);
        // end create new entry

        // return index page
            $data = \DB::table("zh_tb")
                ->get();

            // if item does not exist in database
            if (! $data) {
                abort(404);
            }

            // result
            return view("zh/index", [
                "data" => $data
            ]);
        // end return index page
    }


}
