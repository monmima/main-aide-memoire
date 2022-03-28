# Nodemon

Nodemon helps you reload a Node.js file everytime a it is updated. With it, there's no need to kill and restart the server everytime you change something.

1. Make sure you have NPM and Node.js installed on your computer.
1. Make sure you have already created a file called **package.json**. For more information on this, refer to the file on this topic.
1. Open a Terminal window and type one of these commands.

    - Project install:

            npm i nodemon --save-dev

    - Global install. You might have to run this command as an administrator.

            npm i --global nodemon

1. Add this line in the code in your **script** object. **Of course, the name of your root file should reflect the reference you use in package.json.**

        "nodemon": "nodemon index.js"

1. Your script object should now look like this:

        "scripts": {
            "test": "echo \"Error: no test specified\" && exit 1",
            "nodemon": "nodemon index.js"
        },

1. Now you can run your root file with this command:

    npm run nodemon