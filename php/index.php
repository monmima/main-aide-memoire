

    <form action="index.php">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">

        <p><button type="submit">Submit</button></p>
    </form>


    Answer:
    <?php
        echo $_GET["num1"] + $_GET["num2"];
    ?>