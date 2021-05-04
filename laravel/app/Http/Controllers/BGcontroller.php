<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// public means you can access a function from outside of a class
class BGcontroller extends Controller
{

    public function bgJson()
    {

        $companions = \DB::table("bg_tb")->get();

        // if item does not exist in database
        if (! $companions) {
            abort(404);
        }
    
        // JSON
        return [
            "companions" => $companions
        ];
        
    }

    public function bgJsonPaginate()
    {
        $companions = \DB::table("bg_tb")->paginate(4);

        // if item does not exist in database
        if (! $companions) {
            abort(404);
        }
    
        // JSON
        return [
            "companions" => $companions
        ];
    }

    public function bgHtml()
    {
        // sorting by ascending order
        $companions = \DB::table('bg_tb')
            // remove the next line to stop sorting the data
            ->orderBy('name', 'asc')
            ->get();

        // if item does not exist in database
        if (! $companions) {
            abort(404);
        }

        return view("bg/bg-html", [
            "companions" => $companions
        ]);
    }

    public function bgHtmlPagination()
    {
        $companions = \DB::table("bg_tb")
        ->orderBy('name', 'asc')
        ->paginate(4);
    
        // if item does not exist in database
        if (! $companions) {
            abort(404);
        }
    
        // html
        return view("bg/bg-html-pagination", [
            "companions" => $companions
        ]);
    }

    public function bgHtmlId($id)
    {
        $companions = \DB::table('bg_tb')
            ->where('id', $id)
            ->get();

        // if item does not exist in database
        if (! $companions) {
            abort(404);
        }

        // JSON
        return [
            "companions" => $companions
        ];
    }


}
