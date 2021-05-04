# php-tutorial-by-brad-traversy

Tutorial by Brad Traversy teaching you the basics of PHP.

- [Part 1](https://www.youtube.com/watch?v=oJbfyzaA2QA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn)
- [Part 2](https://www.youtube.com/watch?v=6tCWiexc05U&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=2)
- [Part 3](https://www.youtube.com/watch?v=0Dp7Lt7iT3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=3)
- [Part 4](https://www.youtube.com/watch?v=9p9siksrSoU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=4)
- [Part 5](https://www.youtube.com/watch?v=5ggUfM6mvSk&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=5)
- [Part 6](https://www.youtube.com/watch?v=ApP1rgZ9OlY&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=6)
- [Part 7](https://www.youtube.com/watch?v=x6UDhaHVaeY&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=7)
- [Part 8](https://www.youtube.com/watch?v=EHfr-edosmA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=8)
- [Part 9](https://www.youtube.com/watch?v=faknU12cs7Y&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=9)
- [Part 10](https://www.youtube.com/watch?v=oVJ0anq8yLA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=10)
- [Part 11](https://www.youtube.com/watch?v=cIFUH3Qnd6s&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=11)
- [Part 12](https://www.youtube.com/watch?v=z32BOHVWplU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=12)
- [Part 13](https://www.youtube.com/watch?v=z32BOHVWplU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=13)
- [Part 14](https://www.youtube.com/watch?v=pfY9LwcsH3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=14&pbjreload=101)
- [Part 15]()
- [Part 16](https://www.youtube.com/watch?v=W4rSS4-LdIE)
- [Part 17](https://www.youtube.com/watch?v=RzMjwICWKr4)
- [Part 18](https://www.youtube.com/watch?v=nU0KDn-vLT4)
- [Part 19](https://www.youtube.com/watch?v=sLLZU38Okgo)
- [Part 20](https://www.youtube.com/watch?v=FhbP6bF21Cs)
- [Part 21](https://www.youtube.com/watch?v=IYlDJ2K3MGk&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=21)
- [Part 22](https://www.youtube.com/watch?v=9t7AH7lOlL0&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=22)

## Running this project

<p>To run the main index.php page, start Xampp and then type "localhost/php-tutorial-by-brad-traversy" in the adress bar of your browser.</p>

To start XAMPP in Linux Mint from the console, type "sudo /opt/lampp/manager-linux-x64.run".

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
