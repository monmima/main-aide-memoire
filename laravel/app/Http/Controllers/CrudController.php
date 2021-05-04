<?php

// https://laravel.com/docs/8.x/queries#upserts
// 5.35 in tutorial

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// public means you can access a function from outside of a class
class CrudController extends Controller
{

    // show all entries
    public function index()
    {
        $friends = \DB::table("friends_tb")
            ->get();

        // if item does not exist in database
        if (! $friends) {
            abort(404);
        }

        // result
        return view("crud/index", [
            "friends" => $friends
        ]);
    }

    // show one entry
    public function show($id)
    {
        $friends = \DB::table('friends_tb')
            ->where('id', $id)
            ->get();

        // if item does not exist in database
        if (! $friends) {
            abort(404);
        }

        // result
        return [
            "friends" => $friends
        ];
    }

    // show the create form
    public function create()
    {
        // result
        return view("crud/create");
    }

    // submit the create form
    // after you clicked Submit
    public function store()
    {
        // die("hello");
        // dump(request()->all());

        // create new entry
            \DB::table('friends_tb')->insert([
                'first_name' => request("first_name"),
                'last_name' => request("last_name")
            ]);
        // end create new entry

        // return index page
            $friends = \DB::table("friends_tb")
                ->get();

            // if item does not exist in database
            if (! $friends) {
                abort(404);
            }

            // result
            return view("crud/index", [
                "friends" => $friends
            ]);
        // end return index page
    }

    // show the edit form
    public function edit($id)
    {
        $friends = \DB::table('friends_tb')
            ->where('id', $id)
            ->get();

        return view("crud/edit", [
            "friends" => $friends
        ]);
    }

    // submit to edit form
    public function update($id)
    {
        \DB::table('friends_tb')
            ->where('id', $id)
            ->update(
                [
                    'first_name' => request("first_name"),
                    'last_name' => request("last_name")
                ]);

        $friends = \DB::table("friends_tb")
            ->get();

        // result
        return view("crud/index", [
            "friends" => $friends
        ]);
    }

    // delete the resource
    public function delete($id)
    {

        // delete one friend
        \DB::table('friends_tb')
            ->where('id', $id)
            ->delete();

        /// 

        // list all friends
        $allFriends = \DB::table("friends_tb")
            ->get();

        // result
        return view("crud/index", [
            "friends" => $allFriends
        ]);
    }

} // end of class