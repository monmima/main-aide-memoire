<?php
    class Book {
        public $title;
        public $author;
        public $pages;

        function __construct($bookName, $bookAuthor, $bookPages) {
            echo "New book <strong>" . $bookName . "</strong> created.<br>";

            $this->title = $bookName; 
            $this->author = $bookAuthor;
            $this->pages = $bookPages;
        }
    }

    // creating an instance of the class
    $book1 = new Book("Harry Potter", "JK Rowling", 400);

    // creating another instance of the same class
    $book2 = new Book("The Hobbit", "Tolkien", 700);

    // echoing out data from the instances
    echo "$book1->title<br>";
    echo "$book1->author<br>";
    echo "$book1->pages<br>";

    echo "$book2->title<br>";
    echo "$book2->author<br>";
    echo "$book2->pages<br>";
?>