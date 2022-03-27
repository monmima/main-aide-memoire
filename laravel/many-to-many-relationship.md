# Creating A Many-To-Many Relationship (Pivot Table)

Thanks to [Code with Daryl](https://www.youtube.com/watch?v=2oFNu_RhTt4) for providing his tutorial on YouTube. Also, thanks to [Qirolab](https://www.youtube.com/watch?v=JQ01o10Mva4).

---_

- https://appdividend.com/2018/05/17/laravel-many-to-many-relationship-example/
- https://www.larashout.com/laravel-eloquent-many-to-many-relationship

---

1. To create a new model, migration and controller, type this in your terminal:

        php artisan make:model Category -mc --resource

2. Find the place in your new migration that looks like this:

        $table->id();
        $table->timestamps();

3. Insert a new line so it looks like this:

        $table->id();
        $table->string('title');
        $table->timestamps();

4. Go back to the terminal and force a new migration with this:

        php artisan migrate:fresh

5. Go to the category table in your database and create this categories manually. Don't forget to save your modifications.

6. Now is time to create a migration for the pivot table. Let's assume you have two table. One is called "song" and the other is called "category". Create a pivot table using this command **while respecting the alphabetical order** (***category*** comes before ***song***):

        php artisan make:migration create_category_song_table --create=category_song

7. Go to the newest migration file and find this:

        $table->id();
        $table->timestamps();

8. Insert a new line so it looks like this (**once again, assuming one of the tables is called categories and the other songs**):

        $table->id();
        $table->integer('category_id')->unsigned();
        $table->integer('song_id')->unsigned();
        $table->timestamps();

9. Migrate again using the following command:

        php artisan migrate:fresh

10. Now, go to the **Song** model (assuming that's its name) under app/Models.

11. Find something that looks like this:

        use HasFactory;

12. Change it to this:

        use HasFactory;

        public function categories()
        {
                return $this->belongsToMany(Category::class);
        }

13. Now, go to the **Category** model (assuming that's its name) under app/Models.

14. Find something that looks like this:

        use HasFactory;

15. Change it to this:

        use HasFactory;

        public function songs()
        {
                return $this->belongsToMany(Song::class);
        }

16. Create a controller for your categories;

17. Add an index function that returns JSON to your CategoryController. This will confirm that everything is working just fine.

        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {

                $categories = Category::all();

                return [
                "categories" => $categories,
                ];

        }

18. Create a route that returns a page with the content of the above index function.

19. Add a line such as this one to load the model in the SongController:

        use App\Models\Category;

