<?php
    session_start();

    // $_SESSION["name"] = "John Doe";

    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

    print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <p>Page 2</p>
    <p>Thank you <?php echo $name; ?></p>
    <p>You have subscribed with the email <?php echo $email; ?></p>

    <a href="page3.php" title="Page 3">Go to page 3</a>
    <a href="page4.php" title="Page 4">Go to page 4</a>
</body>
</html>