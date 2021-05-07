<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Aide-Mémoire</title>
</head>
<body>
    <h1>This is the index page</h1>

    <hr>

    <h2>What is Blade exactly?</h2>

    <p>
        <dfn>Blade</dfn> is a templating engine similar to EJS under NodeJS. So for instance you could name a file <code>index.blade.php</code> (with the templating) or <code>index.php</code> (without the templating).
    </p>

    <hr>

    <section>
        <h2><a href="https://laracasts.com/series/laravel-6-from-scratch" title="Link to the tutorials">Jeffrey Way's Tutorials</a></h2>

        <h4>Testing Out Stuff With Routes</h4>

        <ul>
            <li><a href="/json">Returning JSON</a></li>
            <li><a href="/plain-text">Returning plain text</a></li>
            <li><a href="/html">Returning HTML, JS and CSS</a></li>
            <li><a href="/html-2">Returning HTML, JS and CSS (alternate route, same content)</a></li>
            <li><a href="/html-3">Returning HTML, JS and CSS (forward slashes in back-end route are optional)</a></li>
            <li><a href="/query-string-plain-text/?name=jack">Passing the query string "jack" as plain text</a></li>
            <li><a href="/query-string-html/?name=jack">Passing the query string "jack" to the view</a></li>  
            <li><a href="/route-with-wildcard-value-or-id/123">Handling a route with a wildcard/id</a></li>
            <li>Handling a route with a wildcard/id and a view too</li>

            <ul>
                <li><a href="/route-with-wildcard-and-view/my-first-post">My First Post</a></li>
                <li><a href="/route-with-wildcard-and-view/my-second-post">My Second Post</a></li>
            </ul>

            <li>Handling a route with a wildcard/id, a view and a controller (for more sizable projects)</li>

            <ul>
                <li><a href="/route-with-wildcard-no-view-and-controller/my-first-recipe">My First Recipe</a></li>
                <li><a href="/route-with-wildcard-view-and-controller/my-second-recipe">My Second Recipe</a></li>
            </ul>
        </ul>

        <h4>Connecting to a database</h4>

        <li>Handling a route with a wildcard/id, a view, a controller (for more sizable projects) and a database</li>

        <ul>
            <li><a href="/route-with-wildcard-view-controller-and-database/1">My First Recipe</a></li>
            <li><a href="/route-with-wildcard-view-controller-and-database/2">My Second Recipe</a></li>
        </ul>

        <h4>Views</h4>

        <ul>
            <li><a href="/example-006">Layout example</a></li>
            <li><a href="/example-007">Other layout example</a></li>
            <li><a href="/example-008">Layout example with header</a></li>
            <li><a href="/example-009">Layout example with header</a></li>
            <li><a href="/example-010">String inserted into the view</a></li>
        </ul>

        <hr>

        <h2>Mini Projects</h2>

        <ul>
            <li><a href="/example-011">Displaying stuff from the database in many different ways</a></li>
            <li><a href="/bg-json">Baldur's Gate example as JSON</a></li>
            <li><a href="/bg-html">Baldur's Gate example as HTML</a></li>
            <li><a href="/bg-json-pagination">Baldur's Gate example as JSON with pagination</a></li>
            <li><a href="/bg-html-pagination">Baldur's Gate example as HTML with pagination</a></li>
            <li><a href="/crud">CRUD</a></li>
            <li><a href="/zh">Chinese Words</a></li>
        </ul>

        <hr>

        <h2>Vanilla PHP tutorials</h2>

        <ul>
            <li><a href="/brad">Brad Traversy's Tutorial</a></li>
            <li><a href="/freecodecamp">Mike Dane/freeCodeCamp's Tutorial</a></li>
        </ul>

    </section>

</body>
</html>