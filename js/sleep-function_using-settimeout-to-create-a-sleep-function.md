# Sleep Function with setTimeout()

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <button>Open the console and click this button</button>

        <script>
            // sleep function
            const sleep = (milliseconds) => {
                console.log("sleep");
                return new Promise(resolve => setTimeout(resolve, milliseconds))
            }

            // function using the sleep function
            async function handleClicks() {

                console.log("before sleep");

                await sleep(3000);

                console.log("after sleep");

                return;
            }

            // event listeners
            document.querySelector("button").addEventListener("click", handleClicks);

        </script>
    </body>
    </html>