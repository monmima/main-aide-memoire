<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Super Site</title>

    <!-- https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_navbar&stacked=h -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- custom CSS file -->
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <a class="navbar-brand" href="/example-006" class="{{ Request::path() === '/example-006' ? active : '' }}">WebSiteName</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="/example-006" class="{{ (request()->is('example-006')) ? 'active' : '' }}">Home</a></li>
                <li><a href="/example-007" class="{{ (request()->is('example-007')) ? 'active' : '' }}">Page 1</a></li>
                <li><a href="/example-008" class="{{ (request()->is('example-008')) ? 'active' : '' }}">Page 2</a></li>
                <li><a href="/example-009" class="{{ (request()->is('example-009')) ? 'active' : '' }}">Page 3</a></li>
            </ul>

        </div>
    </nav>
    <!-- fin header -->

    @yield ("header")
    @yield ("content")

    <footer>This is the footer. My footer is the same on each page.</footer>

    <!-- custom JS file -->
    <script src="/script.js"></script>
</body>
</html>