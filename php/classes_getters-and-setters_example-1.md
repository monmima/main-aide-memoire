# Classes, getters and setters

Heavily inspired by a [tutorial by Mike Dane](https://www.youtube.com/watch?v=OK_JCtrrv-c&t=13557s).

Getters and setters are special functions that allow you to get and set attributes. They are needed to interact with a **private** variable from outside of a class. Otherwise, if you try to access them the way you would with a **public** variable, PHP will return an error.

In the code sample below, the idea is that a movie rating has only a limited number of possible values (G, PG, PG-13, R or NR, which stands non-rated). Therefore, the <code>setRating()</code> function limits the rating to values that make sense.

    <?php
        class Movie {
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
                if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        // creating a movie
        $avengers = new Movie("Avengers", "PG-13");

        // attempting to set the movie rating to "dog", which won't work
        $avengers->setRating("Dog");

        // since the movie rating cannot be "Dog", the fallback choice ("NR", which stands for "non-rated") is used
        echo $avengers->getRating();
    ?>
