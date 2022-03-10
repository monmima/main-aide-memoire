# Forms: handling checkboxes

<code>fruits[]</code> means that you store the data from your checkboxes inside of an array.

    <form action="index.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>

        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>

        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

        <button type="submit">Submit</button>
        
    </form>

    <?php
        $fruits = $_POST["fruits"];

        print_r($fruits);
    ?>