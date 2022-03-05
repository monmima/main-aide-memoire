<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>


    <?php 
        // mike explains that PHP recognizeds that there are only a limited amount of data types in PHP; to solve this problem, you can use classes; for instance, a phone could be a class, a bottle could be a class, a keyboard could be a class
        // a class is a custom data type

        // a constructor is a function that's gonna get called whenever you create an object of the classe

        class Book {
            var $title;
            var $author;
            var $pages;

            // constructor with a parameter
            function __construct($name) {
                echo "Constructor $name says: New book created <br>";
            }

            // constructor without a parameter
            // function __construct() {
            //     echo "Constructor says: New book created <br>";
            // }
        }

        // with a parameter
        $book1 = new Book("Harry Potter");
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;

        $book2 = new Book("The hobbit");
        $book2 -> title = "The Hobbit";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 700;

        // // without a parameter
        // $book1 = new Book();
        // $book1 -> title = "Harry Potter";
        // $book1 -> author = "JK Rowling";
        // $book1 -> pages = 400;

        // $book2 = new Book();
        // $book2 -> title = "The Hobbit";
        // $book2 -> author = "Tolkien";
        // $book2 -> pages = 700;

        echo $book1 -> title . "<br>";
        echo $book2 -> title . "<br>";

        // CDs
        // easier way to create objects

        class CD {
            var $title;
            var $author;

            // constructor with a parameter
            function __construct($aTitle, $anAuthor) {
                $this->title = $aTitle;
                $this->author = $anAuthor;
            }
        }

        $cd1 = new CD("Christmas Songs", "Santa Claus");

        echo $cd1 -> title . "<br>";
    ?>
    
</body>
</html>