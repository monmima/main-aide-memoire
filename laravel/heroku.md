## Heroku

My references here were a [tutorial on YouTube by Jonny Kalambay](https://www.youtube.com/watch?v=MxfxiR8TVNU) and an answer on the [Trailblazer Community](https://trailblazers.salesforce.com/answers?id=9064S000000DHq1QAG).

Also, for the details that pertain to Laravel in particular, [codigofacilito and his tutorial on YouTube](https://www.youtube.com/watch?v=GE2Kmy8WL3g) were very useful to me. By the way his tutorial is in Spanish. He also explains how to upload a PostgreSQL database to the project at the end of his video.

### Installing the CLI

1. Install snap ([documentation available on snapcraft](https://snapcraft.io/docs/installing-snap-on-linux-mint))

        sudo rm /etc/apt/preferences.d/nosnap.pref
        sudo apt update
        sudo apt install snapd

2. Install Heroku

        snap install --classic heroku

### Creating a Heroku Project

1. Go to Heroku
    - https://dashboard.heroku.com/apps
2. Create a new project such as [my-web-app-name]
3. Go to the Terminal Window and make sure the app/project is initialized as a Git repository by typing:

        git status

4. On the Heroku web site, you can find more information about the name of your project under the **deploy** tab.
5. Create a file named **Procfile** (no extension) at the root of your project. It should contain this:
        
        web: vendor/bin/heroku-php-apache2 public/

6. Go to the .env file. You'll need to copy and paste a series of lines to the Terminal window.

        heroku git:remote -a [my-web-app-name]

        heroku config:add APP_NAME=Laravel

        heroku config:add APP_ENV=production

        heroku config:add APP_KEY=...

        heroku config:add APP_DEBUG=true

        heroku config:add APP_URL=http://[my-web-app-name].test

7. Push your project to Heroku:

        git push heroku HEAD:master

8. On the Heroku's web site, click on **Open app**, which should be located somewhere in the top right corner of the page of your project
9. Now you should see your /resources/views/app.blade.php should.
11. See below if you want to use SQLite as a database in Heroku.

### Updating Your Project

Now all you have to do is to update your remote project and type:
    
    git push heroku HEAD:master

### Using SQLite in Heroku

Your app might run perfectly locally. Setting it up so it runs remotely as well is slightly more complicated.

The first thing you have to keep in mind if you use a combination of SQLite and Heroku, you will overwrite your remote database with each redeployment, thus resetting it to what you have locally.

For more information on using Heroku and SQLite, please visit [David Tang's Deploying Laravel with SQLite to Heroku article](https://davidtang.io/deploying-laravel-with-sqlite-to-heroku/). 

Here are the steps you have to follow:

1. Make sure you are on the right branch and the features you want are on the main branch too.
2. Delete .sqlite reference from the .gitignore file located within the /database folder.
3. Add **"ext-pdo_sqlite": "*"** to the **require** block in **composer.json**
4. Open a Terminal window
5. Run this:

        composer update

6. Type these lines one by one to set your environment variables:

        heroku config:add APP_NAME=Laravel
        heroku config:add APP_ENV=production
        heroku config:add APP_DEBUG=true
        heroku config:add DB_CONNECTION=sqlite

7. Type these lines one by one as well, correcting them with the correct information:

        heroku config:add APP_URL=https://app-name.com/
        heroku config:add APP_KEY=...

8. Finally, I used to type **heroku config:add DB_DATABASE=database** in the Terminal, but this created a bug. This is probably a **step to avoid**. It apparently created the bug where I would get a message about **PRAGMA**, **foreign keys**, and the online app **not connecting to the database** properly.