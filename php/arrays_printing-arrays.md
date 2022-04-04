# Printing arrays

If you use <code>echo</code> or <code>print</code> on an Array, all you'll get is the type of your array, which is, of course, <code>Array</code>.

Your output with <code>print_r($cars);</code>

    array(3) { [0]=> string(3) "red" [1]=> string(6) "purple" [2]=> string(4) "blue"

Your output with <code>var_dump($cars);</code>

    Array ( [0] => red [1] => purple [2] => blue )

So as you can see the output for <code>var_dump($cars);</code> is much for easy to read.

## Making PHP arrays even more readable

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