<?php
    $path = "dir0/dir1/myfile.php";
    $file = "file1.txt";

    echo "<ul>";

    // Return filename
    echo "<li>" . basename($path) . "</li>";

    // Return filename without extension
    echo "<li>" . basename($path, ".php") . "</li>";

    // Return the directory name from the path
    echo "<li>" . dirname($path) . "</li>";

    // Return the directory name from the path
    echo "<li>" . dirname($path) . "</li>";

    // Check if the file exists
    # can be used for a folder as well, as opposed to is_file
    echo "<li>" . file_exists($file) . "</li>";

    // Get absolute path
    echo "<li>" . realpath($file) . "</li>";

    // Checks to see if file
    # cannot be used for a folder, as opposed to file_exists
    echo "<li>" . is_file($file) . "</li>";

    // Check if writable
    echo "<li>" . is_writable($file) . "</li>";

    // Check if readable
    echo "<li>" . is_readable($file) . "</li>";

    // Get the file size
    echo "<li>" . filesize($file) . "</li>";

    // Create a directory
    # mkdir("testing");

    // Remove a directory if empty
    # rmdir("testing");

    // Copy file
    // echo copy("file1.txt", "file2.txt");

    // Rename file
    // echo rename("file2.txt", "myfile.txt");

    // Delete file
    // unlink("myfile.txt");

    // Write from file to screen
    echo "<li>" . file_get_contents("file1.txt") . "</li>";

    // Write string to the file
    // file_put_contents($file, "Goodbye!");

    // Append to the file
    // $current = file_get_contents("file1.txt");
    // $current .= "Appended content.";
    // file_put_contents($file, $current);

    // Open file for reading
    // Second parameter is what you want to do to the file
    $handle = fopen($file, "r");
    $data = fread($handle, filesize($file));
    fclose($handle);

    echo "<li>" . $data . "</li>";

    // Open file for writing
    // Create file if non-existent
    // Second parameter is what you want to do to the file
    // $handle = fopen($file, "w");
    // $data = fwrite($handle, "my text");
    // fclose($handle);


    echo "</ul>";
?>