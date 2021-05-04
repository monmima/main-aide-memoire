<?php
    // session_start();

    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php $name; ?></h1>

    <p>This is what happens when you don't initialize a session on a page.</p>
</body>
</html>