# Classes: the basics

See **classes_constructors** to learn more about the efficient way of passing data to a class. The way of doing it in the example below does work, but is not the most efficient since you have to create a new instance of a class with four lines instead of just one.

    <?php
        // creating a class
        class Book {
            var $title;
            var $author;
            var $pages;
        }

        // creating an instance of the class
        $book1 = new Book;
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;

        // creating another instance of the same class
        $book2 = new Book;
        $book2 -> title = "The Hobbit";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 700;

        // echoing out data from the instances
        echo $book1 -> title . "<br>";
        echo $book2 -> title . "<br>";
    ?>