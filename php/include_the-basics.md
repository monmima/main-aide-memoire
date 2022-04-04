# Include

<code>include</code> is used to load parts of pages. For instance, this could be a header or a footer. Here is an example of how this works. You can use a **.html** or **.php** extension on your files.

Your header.html page:

    <h1>Header</h1>
    <hr>

Your main index.php page:

    <body>
        <?php include "./header.html" ?>
        
        <p>Paragraph</p>    
        
        <?php include "footer.html" ?>
    </body>

Your footer.html page:

    <hr>
    <h3>Footer</h3>