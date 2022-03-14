<!-- https://www.youtube.com/watch?v=OK_JCtrrv-c&t=13557s -->

<?php

class Chef {
    function makeChicken() {
        echo "The chef makes chicken <br>";
    }

    function makeSalad() {
        echo "The chef makes salad <br>";
    }

    function makeSpecialDish() {
        echo "The chef makes BBQ ribs <br>";
    }
}

class ItalianChef extends Chef {
    function makePasta() {
        echo "The chef makes Pasta <br>";
    }

    // overriding a function
    function makeSpecialDish() {
        echo "The chef makes chicken parm <br>";
    }
}

$italianChef = new ItalianChef;
$italianChef->makeChicken();
$italianChef->makePasta();

?>