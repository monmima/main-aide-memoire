# Ajax: autocomplete form that suggests names

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=nU0KDn-vLT4&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=18).

Your index.php file:

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search User</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
        <script>

            function showSuggestion(str) {
                if (str.length == 0) {
                    // the string that was typed has to be at least one-character long
                    document.getElementById("output").innerHTML = "";
                } else {
                    // AJAX request
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("output").innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "suggest.php?q="+str, true);
                    xmlhttp.send();
                }
            }

        </script>
    </head>
    <body>

        <div class="container">
            <h1>Search Users</h1>
            <form> 
                Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
            </form>
            <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
        </div>

    </body>
    </html>

Your suggest.php file:

    <?php

    $people[] = "Steve";
    $people[] = "John";
    $people[] = "Kathy";
    $people[] = "Evan";
    $people[] = "Anthony";
    $people[] = "Tom";
    $people[] = "Rhonda";
    $people[] = "Hal";
    $people[] = "Ernie";
    $people[] = "Johanna";
    $people[] = "Farrah";
    $people[] = "Linda";
    $people[] = "Shawn";
    $people[] = "Olivia";
    $people[] = "Derek";
    $people[] = "Amanda";
    $people[] = "Rachel";
    $people[] = "Katie";
    $people[] = "Jillian";
    $people[] = "Jose";
    $people[] = "Malcom";
    $people[] = "Greg";
    $people[] = "Mary";
    $people[] = "Brad";
    $people[] = "Mike";

    // Get Query String
    $q = $_GET["q"];

    $suggestion = "";

    // Get suggestion
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);

        foreach ($people as $person) {
            // substr returns part of a string
            if (stristr($q, substr($person, 0, $len))) {
                if ($suggestion === "") {
                    $suggestion = $person;
                } else {
                    // append
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No suggestion." : $suggestion;