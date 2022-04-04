# File system functions

Returning a file name:

    $path = "dir0/dir1/myfile.php";
    echo basename($path);

Returning a file name without the extension:

    $path = "dir0/dir1/myfile.php";
    echo basename($path, ".php");

Returning the directory name from the path:

    $path = "dir0/dir1/myfile.php";
    echo dirname($path);

Checking if the file exists (can be used for a folder as well):

    echo file_exists(file1.txt);

Getting the absolute path:

    echo realpath($file);

Checking if the file exists (cannot be used for a folder):

    echo is_file(file1.txt);

Checking if a file is writable:

    echo is_writable($file);

Checking if a file is readable:

    echo is_readable($file);

Getting the size of a file:

    echo filesize($file);

Creating a directory:

    mkdir("testing");

Removing a directory if it's empty:

    rmdir("testing");

Copying a file:

    echo copy("file1.txt", "file2.txt");

Renaming a file:

    echo rename("file2.txt", "myfile.txt");

Deleting a file:

    unlink("myfile.txt");

Getting the content of a file:

    echo file_get_contents("file1.txt");

Writing a string to a file:

    file_put_contents($file, "Goodbye!");

Appending text to a file:

    // $current = file_get_contents("file1.txt");
    // $current .= "Appended content.";
    // file_put_contents($file, $current);

Opening a file to read its content. You use the second parameter to say what you want to do with the file.

    $handle = fopen($file, "r");
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data;

Opening a file to write in it. You use the second parameter to say what you want to do with the file. With this, you create a file if it doesn't exist already:

    $handle = fopen($file, "w");
    $data = fwrite($handle, "my text");
    fclose($handle);