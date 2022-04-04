# Classes and inheritance

The idea of inheritance is that the child of a class can do exactly the same as the parent class, on top of other stuff you define in it.

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