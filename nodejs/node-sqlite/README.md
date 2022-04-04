# node-and-sqlite-aide-memoire-by-monmima

## Node.js + SQLite

This is an aide-mémoire (i. e., reference) for myself, but maybe you'll find it useful too!

In this project I use both Node.js and SQLite. You'll find that I use EJS too, but I make it very clear where I use it, so a newbee to some of these technologies won't et overwhelmed.

I was influenced by my own [Node and MongoDB CRUD Aide-Mémoire](https://github.com/monmima/node-and-mongodb-crud-aide-memoire-by-monmima) and my own [Node and SQL Aide-Mémoire](https://github.com/monmima/node-and-sql-aide-memoire-by-monmima), which are two very similar projects of mine. This is basically the same project, but with SQLite instead.

This has been deployed on [Heroku](https://node-and-sqlite.herokuapp.com/) if you want to see what is looks like without downloading it and running it on your machine.

---

## A Word of Thanks

### Node.js

This project was influenced by Brad Traversy's tutorial on MySQL and Node.js. He named his tutorial [Using MySQL With Node.js](https://www.youtube.com/watch?v=EN6Dx22cPRI).

Also, [Mosh Hamedani's Node.js tutorial on YouTube](https://www.youtube.com/watch?v=TlB_eWDSMt4) made it possible for me to create the .ejs-1 page, which documents Node.js.

### SQLite

Many thanks to [Dev Theory](https://www.youtube.com/watch?v=ueCT4HlQDwQ) for his two SQLite tutorials on YouTube. One is about the installation of SQLite and the other is about some of the CRUD operations. All in all, they have a running time of about 15 minutes.

By the way, Dev Theory's tutorials are in French.

---

## Technical Stuff

### SQLite Database location

**As you can see by looking at the project structure, the database is included at the root level and yup, the project will run just like that, without creating a server specifically for the database.**

### Possible Issues

## SQL

When I created this aide-mémoire for MySQL in a similar project I mentionned earlier, I ran into different issues:

- I needed to use full text indexes to return only complete words and not just strings.
- I needed to import CSV data into phpMyAdmin and had a problem with a size limit for my database.
- I ran into an "Invalid column count in CSV input on line 1." error message while importing CSV.

I don't know how likely these are to happen in SQLite too, so I advise you to read the [documentation for my Node.js and MySQL](https://github.com/monmima/node-and-sql-aide-memoire-by-monmima) project if you do.

## Fixing NPM Errors

At some point, I ran into issues with a directory not being accessible in reading mode in another NodeJS project. A [YouTube tutorial by HACK ANONS](https://www.youtube.com/results?search_query=robotjs+fix) helped me with this.

### EJS: You don't want to learn it for now? No problem!

There are a few pages of the project/app using EJS.

If you don't want to learn EJS from the get-go or if you don't want to be overwhelmed as a newcomer to SQLite and Node.js, just don't take into account the EJS part of the code. It is **NOT** used all over the place in the project, just where I mention it.

Once you feel comfortable with Node.js and SQLite, then you'll be ready for EJS. EJS is a templating tool that enables you to insert data from your database into .ejs files, which are then rendered into HTML. The simplest form of EJS would be a regular old HTML page, but with an .ejs extension (and of course, that would be pointless).

If you do want to learn EJS, it's pretty straightforward. A good place to start is this aide-mémoire and another is [WalkthroughCode's EJS tutorial](https://github.com/monmima/node-ejs-tutorial-by-walkthroughcode).

---

## Running this project under Linux Mint

### Installing SQLite on Linux Mint

**Obviously, you can use Microsoft, Linux or the Macintosh operating system** to run this project, but since Linux Mint is my operating system, I can only explain what I did on this specific system.

If you wish to edit the database, you'll need **DB Browser for SQLite**. Open a Terminal window and Just follow these steps:

1. sudo add-apt-repository -y ppa:linuxgndu/sqlitebrowser-testing
2. sudo apt-get update
3. sudo apt-get install sqlitebrowser

### Running the project as a whole

Open a Terminal window and follow these steps:

1. Type npm install
2. Type **npm run serve** or **npm run start**

---

## Deploying the project on Heroku from Linux Mint

This project can be [found online on Heroku](https://node-and-sqlite.herokuapp.com/).

My references here were a [tutorial on YouTube by Jonny Kalambay](https://www.youtube.com/watch?v=MxfxiR8TVNU) and an answer on the [Trailblazer Community](https://trailblazers.salesforce.com/answers?id=9064S000000DHq1QAG). The second reference was needed because I had this error message in the Terminal window when I was trying to push the project to Heroku. I basically needed to add "HEAD" somewhere to have things work properly, as explained below.

1. In the Terminal, type **touch Procfile** to create the Procfile, which tells Heroku how to run your app
2. In the Procfile, type **web: node index.js**, assuming **index.js** is the root file of you project
3. In the root file (still assuming it's **index.js**), the port variable should look like this: **const PORT = process.env.PORT || 5000**
4. In the Terminal window, type **git status** to make sure the app is initialized as a Git repository
5. Type **heroku git:remote -a node-and-sqlite**, assuming the name of the repository is **node-and-sqlite**
6. On the Heroku web site, you can find more information about the name of your project under the **deploy** tab.
7. In the Terminal window, type **git push heroku HEAD:master**. Yup, the capitals in this command are not a coincidence so make sure they are there when you type this.
8. On the Heroku's web site, click on **Open app**, which should be located somewhere in the top right corner of the page
9. Now you should see your app.
10. I ran into a bug near the end of the process. If you do, maybe  you need to push something to Github first (any random file you created should do), and then push the project again to Heroku. Not so sure about that, though. Maybe it was just me not looking at the right tab in my browser and getting confused between the local and online projects.
