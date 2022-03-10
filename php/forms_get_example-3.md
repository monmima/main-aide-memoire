# Forms and getting user input: example 2

<code>action</code> is the name of the php page that we want to be able to handle with this form.

    <form action="index.php" method="GET">
        Color: <input type="text" name="color"><br>

        Plural noun: <input type="text" name="pluralNoun"><br>

        Celebrity: <input type="text" name="celebrity"><br>
    
        <button type="submit">Submit</button>
    </form>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";

        echo "$pluralNoun are blue <br>";

        echo "I love $celebrity <br>";
    ?>