# Printing to the page: the basics

## Basic printing

    <?php
        echo "test";
    ?>

## Printing inside a tag

    <h1>
        <?php echo "test"; ?>
    </h1>

## Print and echo

<code>echo</code> is a little bit faster than <code>print</code>.

    <?php
        $myVar = 20;

        echo $myVar + $myVar; // 40
        print $myVar + $myVar; // 40
    ?>