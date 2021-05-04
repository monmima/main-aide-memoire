<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController002 extends Controller
{
    public function show($recipe)
    {
        // creating a pseudo-database/a store
        $recipes = [
            "my-first-recipe" => "Hello, this is my first recipe!",
            "my-second-recipe" => "Now I am getting the hang of this cooking thing."
        ];
        
        if (! array_key_exists($recipe, $recipes)) {
            abort(404, "Sorry, this page doesn't exist.");
        }

        return view("example-004", [
            "recipe" => $recipes[$recipe]
        ]);
    }
}
