# Forms and getting user input: example 1

## A simple calculator

<code>action</code> is the name of the php page that we want to be able to handle with this form.

In this case, the name of the current page is **index.php**.

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