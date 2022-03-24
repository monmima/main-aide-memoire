<?php
    require("config/config.php");
    require("config/db.php");

    // check for Delete Submit
    if (isset($_POST["delete"])) {
        // just to see if this works; the rest could all be commented
        echo "Submitted";

        // ideally, validation should be added here for security purposes

        $delete_id = mysqli_escape_string($conn, $_POST["delete_id"]);

        $query = "DELETE FROM posts WHERE id = {$delete_id};";

        // if query is successful
        if (mysqli_query($conn, $query)) {
            header('Location:' . ROOT_URL . '');
        } else {
            echo "ERROR" . mysqli_error($conn);
        }
    }

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
    <?php include("includes/header.php"); ?>
    
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-danger">Back</a>

    <div class="jumbotron">
        <h1><?php echo $post["title"]; ?></h1>

        <small>Created on <?php echo $post["created_at"] . " by " . $post["author"] ?></small>

        <p><?php echo $post["body"]; ?></p>

    </div>

    <hr>

    <!-- it's better to delete stuff from the database with a POST method because it would be very insecure to use a GET method here -->
    <form class="d-flex justify-content-end" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="hidden" name="delete_id" value="<?php echo $post["id"] ?>">
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>

        
    </form>

    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'] ?>" title="Edit Post" class="btn btn-primary">Edit</a>

    <?php include("includes/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>