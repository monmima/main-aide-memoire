<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $name; ?></h1> <!-- dangerous; user could inject code -->
    <p><?= htmlspecialchars($name, ENT_QUOTES) ?></p> <!-- would work in PHP, but is quite long -->
    <p>{{ $name }}</p> <!-- much better; the Laravel way -->
</body>
</html>