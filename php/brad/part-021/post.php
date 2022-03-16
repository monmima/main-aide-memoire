<?php
    require("config/config.php");
    require("config/db.php");

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET["id"]);

    $query = "SELECT * FROM posts WHERE id = $id";

    // the connection below comes from the config/db.php file
    // Get result
    $result = mysqli_query($conn, $query);

    // fetch data
    // mysqli_fetch_assoc = turn one post into an associative array
    $post = mysqli_fetch_assoc($result);

    // Free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body class="container">
    <?php include("includes/header.php"); ?>
    
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-danger">Back</a>

    <div class="jumbotron">
        <h1><?php echo $post["title"]; ?></h1>

        <small>Created on <?php echo $post["created_at"] . " by " . $post["author"] ?></small>

        <p><?php echo $post["body"]; ?></p>



    
    </div>


    <?php include("includes/footer.php"); ?>

</body>
</html>