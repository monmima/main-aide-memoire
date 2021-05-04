<?php
    require("config/config.php");
    require("config/db.php");

    // check for Submit



    if (isset($_POST["submit"])) {
        // just to see if this works; the rest could all be commented
        echo "Submitted";

        // ideally, validation should be added here for security purposes

        $update_id = mysqli_escape_string($conn, $_POST["update_id"]);

        $title = mysqli_escape_string($conn, $_POST["title"]);

        $body = mysqli_escape_string($conn, $_POST["body"]);

        $author = mysqli_escape_string($conn, $_POST["author"]);

		$query = "INSERT INTO posts(title, author,body) VALUES('$title', '$author', '$body')";

        // if query is successful
        if (mysqli_query($conn, $query)) {
            header('Location:' . ROOT_URL . '');
        } else {
            echo "ERROR" . mysqli_error($conn);
        }

    }
    
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

    <h1>Add Post</h1>

    <!-- PHP_SELF means you submit to the current page -->
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">

        <div class="form-group">
            <label>Title</label>

            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Author</label>

            <input type="text" name="author" class="form-control">
        </div>

        <div class="form-group">
            <label>Body</label>

            <textarea name="body" class="form-control"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>

    <?php include("includes/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>