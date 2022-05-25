## Returning one record from the database as JSON

This assumes that you have created a model and a controller using this command:

    php artisan make:model Character -mc --resource

/app/Http/Controllers/CharacterController.php:

    // show one record as JSON
    public function edit($id)
    {
        $character = Character::findOrFail($id);

        return [
            "character" => $character,
        ];
    }

/app/web.php:

    Route::get('/{id}/edit', "App\Http\Controllers\CharacterController@edit");