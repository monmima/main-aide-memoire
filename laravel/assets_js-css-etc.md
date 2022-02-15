## How to load assets (CSS, JS, etc.)

There are three ways of loading assets in Laravel.

- assets() (HTTP)
- secure_assets (HTTPS)
- mix() (apparently both, so this is what you should you if you intend to run your site both locally and remotely)

So for instance, your /resources/views/app.blade.php file should have a line like this one:

	<link href="{{ mix('/css/app.css') }}" rel="stylesheet" />