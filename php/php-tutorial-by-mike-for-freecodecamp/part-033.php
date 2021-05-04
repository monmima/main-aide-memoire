<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>


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
    
</body>
</html>