<?php
    require("config/config.php");
    require("config/db.php");

    // Create query
    $query = "SELECT * FROM posts ORDER BY created_at DESC;";

    // the connection below comes from the config/db.php file
    // Get result
    $result = mysqli_query($conn, $query);

    // fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);

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

    <h1>Posts</h1>

    <?php foreach($posts as $post) : ?>
        <div class="jumbotron">
            <h3><?php echo $post["title"]; ?></h3>

            <small>Created on <?php echo $post["created_at"] . " by " . $post["author"] ?></small>

            <p><?php echo $post["body"]; ?></p>

            <a class="btn btn-danger" href="post.php?id=<?php echo $post['id'] ?>" title="Read More">Read More</a>
        </div>
    <?php endforeach ?>

    <?php include("includes/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>