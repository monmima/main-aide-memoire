<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController003 extends Controller
{
    public function show($id)
    {
        $post = \DB::table("posts_tb")->where("id", $id)->first();

        // if item does not exist in database
        if (! $post) {
            abort(404);
        }

        return view("example-005", [
            // "recipe" => $recipes[$recipe]
            "post" => $post
        ]);
    }
}
