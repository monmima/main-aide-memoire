<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <?php
        class Movie {
            # "public" is a way of declaring variables inside a class; it means it's open to the world, open to everybody
            # private means any code outside of the class won't be able to access a variable directly
            public $title;
            private  $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            // this is necessary to access a private variable
            function getRating() {
                return $this->rating;
            }

            // Valid Ratings: G, PG, PG-13, R, NR
            function setRating($rating) {
                $this->rating = $rating;

                if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");

        // $avengers->rating = "Dog";

        // this is necessary to access a private variable

        // the if statement if gonna filter out the invalid statements
        $avengers->setRating("Dog");
        echo $avengers->getRating();
    ?>
</body>
</html>