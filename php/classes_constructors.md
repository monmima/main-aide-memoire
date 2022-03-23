# Classes and constructors

It's better to use constructors like in the example below because it leads to cleaner code. You can create instances in just one line of code instead of many lines like in the basic example (**classes_the-basics.md**).

Usually you use "public" (can be accessed anywhere outside of the class), "protected" (only in class or class that extends the one you created) and "private" (only this class) instead of "var" in a class.

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

        echo "<hr>";

        echo "$book2->title<br>";
        echo "$book2->author<br>";
        echo "$book2->pages<br>";
    ?>

You can change still change a value this way:

    <?php
        $book1->title = "The Three Musketeers";
        echo "$book1->title";
    ?>