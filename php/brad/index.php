<?php
    if(isset($_GET["name"])) {
        $name = $_GET["name"];
        echo $name;
        echo "<br>";
        echo $_SERVER["QUERY_STRING"];
    };
?>

<form method="GET" action="index.php">
    <div>
        <p><label for="">Name</label></p>
        <input type="text" name="name">
    </div>
    <div>
        <p><label for="">Email</label></p>
        <input type="email" name="email">
    </div>

    <button type="submit">Submit</button>
</form>