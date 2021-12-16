# Working with databases in Laravel

## Populating your database automatically instead of manually

If you don't want to populate your database manually, you have several options.

- Using a seeder
- Using a route
- Using a migration

The optimal way is to use a seeder because you don't necessarily want to populate your database when you're in production. The easy solution is to use a migration or a route.

## Populating your database with a migration or a route

- Go to web.php or your migration file (/database/migrations/) depending on how you want your database to be populated.
- Import your model at the beginning of the file (this assumes your model is called NewMessage):

        use App\Models\NewMessage;

- Add this to your file if you want to add one record to the database:

        NewMessage::insert(
            ["message" => "test"]
        );

- Or this if you want to add multiple records to the database:

        NewMessage::insert([
            ["message" => "test 1"],
            ["message" => "test 2"]
        ]);

- If you are using a migration, remember that the insertion has to be done after creation of your schema, like so:

        public function up()
        {
			Schema::create('new_messages', function (Blueprint $table) {
				$table->id();
				$table->string('message')->nullable();
				$table->timestamps();
			});

			NewMessage::insert(
				["message" => "test 3"]
			);
        }

- If you're using a route instead, if should look like this:

	// to populate the database
	Route::get("/pop", function () {
		NewMessage::create(["message" => "testala"]);

		return ("Populated the database.");
	});
