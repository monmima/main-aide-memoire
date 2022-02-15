# TTS - ResponsiveVoice API

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Text to speech Converter</title>
    </head>
    <body>
        <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
        <h1>Text to speech Converter</h1>

        <textarea name="textarea" id="txt" cols="30" rows="10"></textarea>
        <input type="button" name="myButton" id="myButton" value="Submit">

        <script>
            // Text to speech function || ES6 arrow function
            const textSpeak = () => {
                const text = document.querySelector("#txt").value;

                // responsiveVoice.speak(text, "French Female");
                // responsiveVoice.speak(text, "Italian Female");
                responsiveVoice.speak(text, "US English Female");
            }

            // Event handler
            document.querySelector("#myButton").addEventListener("click", textSpeak);

        </script>
    </body>
    </html>