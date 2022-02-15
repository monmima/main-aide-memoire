## Using a controller for your routes

This assumes your controller has already been created.

- Go to /routes/web.php.
- Create a route like so, modifying the name of the controller and the method used to match names that exist:

	Route::get('/', "App\Http\Controllers\[YourController]@[yourMethod]");

- Go to App\Http\Controllers\[YourController].
- You create new routing methods like so:

    public function index()
    {
        return view("index", [
            "produits" => Produit::all(),
            "categories" => ProduitCategorie::all()
        ]);

        // JSON
        // return [
        //     "produits" => $produits,
        //     "categories" => $categories
        // ];

    }