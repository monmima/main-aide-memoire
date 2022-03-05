## Making PHP arrays readable

Instead of just this:

    var_dump($rows);

Use this:

    echo "<pre>";
    var_dump($rows);
    echo "</pre>";

Or even better:

    echo "<pre>";
    print_r($rows);
    echo "</pre>";