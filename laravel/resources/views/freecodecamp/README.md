# php-tutorial-by-mike-for-freecodecamp

A tutorial about PHP created by Mike Dane for freeCodeCamp

Thanks to Mike Dane and freeCodeCamp for releasing this video and [uploading it to YouTube](https://www.youtube.com/watch?v=OK_JCtrrv-c).

Now at 2:12:14 in the tutorial.

## Index

1. (0:00) Introduction
2. (1:56) Windows Installation
3. (7:32) Choosing a Text Editor
4. (11:06) Hello World & Setup
5. (20:29) Writing HTML
6. (27:30) Variables
7. (38:09) Data Types
8. (44:27) Working With Strings
9. (54:50) Working With Numbers
10. (1:05:14) Getting User Input
11. (1:15:37) Building a Basic Calculator
12. (1:22:13) Building a Mad Libs Game
13. (1:28:59) URL Parameters
14. (1:35:52) POST vs GET
15. (1:41:44) Arrays
16. (1:50:26) Using Checkboxes
17. (1:57:22) Associative Arrays
18. (2:04:55) Functions
19. (2:12:10) Return Statements
20. (2:19:10) If Statements
21. (2:37:16) If Statements (con't)
22. (2:47:13) Building a Better Calculator
23. (2:56:53) Switch Statements
24. (3:05:09) While Loops
25. (3:15:18) For Loops
26. (3:26:24) Comments
27. (3:31:08) Including HTML
28. (3:36:51) Include: PHP
29. (3:45:57) Classes & Objects
30. (3:56:23) Constructors
31. (4:06:18) Object Functions - PHP - Tutorial
32. (4:13:52) Getters & Setters
33. (4:29:17) Inheritance

## Running this project

To start XAMPP in Linux Mint from the console, type "sudo /opt/lampp/manager-linux-x64.run".

<p>To run the main index.php page, start Xampp and then type "localhost/php-tutorial-by-mike-for-freecodecamp" in the adress bar of your browser.</p>

## Linux Mint and VS Code

If you're using VS Code on Linux Mint, you might get this message:

- Cannot validate since no PHP executable is set. Use the setting 'php.validate.executablePath' to configure the PHP executable.

This means you won't get the squiggly red lines when something is typed wrong in your code. To solve this:

1. Open the terminal
2. Type "whereis php"
3. Copy the path. In my case, it's "/opt/lampp/bin/php"
4. Click on the cogwheel icon at the bottom left of you VS Code window
5. In the contextual menu that popped up, click on "settings" (which is the content of the settings.json file)
6. Under "PHP › Validate: Executable Path", paste you path.
7. For more information, [stackoverflow](https://stackoverflow.com/questions/43768614/how-to-set-php-executable-path-php-validate-executablepath-in-vscode-when-php-is) might come in handy.

You can make sure everything is working fine by writing random characters in your code **and then saving**. If you get the red squilly lines, this is working.
