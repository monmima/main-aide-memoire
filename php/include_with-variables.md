# Include with variables

Your **index.php** file:

    <?php 
        $title = "My first post";
        $author = "Mike";
        $wordCount = 400;

        include "display-file.php"
    ?>

Your **display-file.php** file:

    <h2><?php echo $title; ?></h2>
    <h4><?php echo $author; ?></h4>
    word count: <?php echo $wordCount; ?>