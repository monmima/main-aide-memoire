<?php
    require("config/config.php");
    require("config/db.php");

    // check for Submit



    if (isset($_POST["submit"])) {
        // just to see if this works; the rest could all be commented
        echo "Submitted";

        // ideally, validation should be added here for security purposes

        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);

        $title = mysqli_escape_string($conn, $_POST["title"]);

        $body = mysqli_escape_string($conn, $_POST["body"]);

        $author = mysqli_escape_string($conn, $_POST["author"]);

		$query = "UPDATE posts SET 
					title='$title',
					author='$author',
					body='$body' 
						WHERE id = {$update_id}";

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

    <h1>Edit Post</h1>

    <!-- PHP_SELF means you submit to the current page -->
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">

        <div class="form-group">
            <label>Title</label>

            <input type="text" name="title" class="form-control" value="<?php echo $post["title"]; ?>">
        </div>

        <div class="form-group">
            <label>Author</label>

            <input type="text" name="author" class="form-control" value="<?php echo $post["author"]; ?>">
        </div>

        <div class="form-group">
            <label>Body</label>

            <textarea name="body" class="form-control"><?php echo $post["body"]; ?></textarea>
        </div>

        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>

    <?php include("includes/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>