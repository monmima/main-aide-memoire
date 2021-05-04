<?php
    # substr() - returns a portion of a string
    #

    echo "<h2>substr</h2>";

    echo substr("Hello<br>", 1);
    echo substr("Hello<br>", 0);
    echo substr("Hello<br>", 3);
    echo substr("Hello<br>", 1, 3);
    echo "<br>";
    echo substr("Hello", -1);
    echo "<br>";
    echo substr("Hello", -2);

    # strlen
    # length of a string
    echo "<h2>strlen</h2>";

    echo strlen("test");

    # strpos()
    # finds the position of the FIRST occurrence of a substring
    echo "<h2>strpos</h2>";

    echo strpos("Hello World", "e");

    # strpos()
    # finds the position of the LAST occurrence of a substring
    echo "<h2>strrpos</h2>";

    echo strrpos("Hello World", "d");

    # trim()
    # strips white spaces
    echo "<h2>trim()</h2>";

    echo strrpos("Hello World", "d");

    echo "<br>";

    $text = "Hello World!            ";

    echo "<br>";

    var_dump($text);

    echo "<br>";

    $trimmed = trim($text);

    var_dump($trimmed);

    echo "<br>";

    # strtoupper()
    echo strtoupper("<h2>strtoupper()</h2>");

    # strtolower()

    echo strtolower("<h2>STRTOLOWER()</h2>");

    # ucwords()

    echo ucwords("<h2> u c words() </h2>");

    # str_replace
    $text = "<h2>String Replace: Hello World</h2>";

    echo str_replace("World", "Everyone", $text);

    # is_string

    $val = "Hello";
    $output = is_string($val);

    echo "<h2>is_string: $output</h2>";

    $values = [true, false, null, "abc", 33, "33", 22.4, "22.4", "", " ", 0, "0"];

    foreach ($values as $value) {
        if (is_string($value)) {
            echo "{$value} is a string<br>";
        }
    }

    # gzcompress()
    # compress a string

    $string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    $compressed = gzcompress($string);

    echo "<h2>Normal string:</h2> $string";

    echo "<h2>Compressed string:</h2> $compressed";

    $uncompressed = gzuncompress($compressed);

    echo "<h2>Uncompressed string:</h2> $uncompressed";
?>