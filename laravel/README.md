# Laravel Aide-Mémoire

This is an aide-mémoire (or cheat sheet) to help me remember the basics of Laravel.

You can go to [on Heroku](https://laravel-aide-memoire.herokuapp.com/) to see it running.
___

## A Word of Thanks

I am indebted to many people for being able to create this aide-mémoire. I had to figure out a way to do many different things, including:

- Installing Laravel on Linux Mint
- Using SQLite
- Deploying a Laravel project to Heroku

On top of that, I had to wrap my head around the ways of Laravel, and this was made possible thanks to [Jeffrey Way from Laracast](https://laracasts.com/series/laravel-8-from-scratch). His tutorial is crisp, comes with all the code in a Github repository and is explained is plain terms. And on top of that, it's free.

___

## Installing Laravel on Linux Mint

Thanks to Ceed Media for his [YouTube tutorial](https://www.youtube.com/watch?v=cVecpIbonnU) on how to install Laravel on Linx Mint. The steps he follows are below.

1. Update your system

        sudo apt-get update

2. Install curl

        sudo apt install curl

3. Install PHP

        sudo apt install php

4. Install Composer

        curl -s https://getcomposer.org/installer | php

5. Move the file

        sudo mv composer.phar /usr/local/bin/composer

6. Confirm Composer is installed

        composer

7. Install Laravel

        composer global require laravel/installer

8. Edit .bashrc

        nano .bashrc

9. Under "esac", type:

        export PATH="$PATH:$HOME/.config/composer/vendor/bin

10. Use CTRL + X to save
11. Press Enter to confirm the name of the file

12. Refresh the file:

        source ~/.bashrc

13. Install Laravel

        laravel (to install laravel)

14. Go to the Desktop folder

        cd Desktop

15. Install php-mbstring

        sudo apt-get install php-mbstring

16. Install php-xml

        sudo apt-get install php-xml

17. Download the lastest dependencies

        composer update

18. Use CTRL + H in the project folder
19. Rename **.env.example** to **.env** (there might already be a file with this name and therefore this step might be useless)

### The Net Ninja Way

The Net Ninja installs Laravel globally in [one of his tutorials](https://www.youtube.com/watch?v=E74_WZpjeKA) with **composer global require laravel/installer**. This means that you can create Laravel projects wherever you want.

### Creating a Project and Running it

    laravel new [my-web-app-name]
    php artisan key:generate
    php artisan serve

Now go to your browser and type http://localhost:8000/ in the address bar.

### The Vendor Folder

All dependencies are stored in your **vendor** subfolder. To reinstall your dependencies, for instance after downloading your project from a git repository, use **composer update**.

___


## Using and running MySQL on Linux Mint

Obviously, you can use Microsoft, Linux or the Macintosh operating system to run this project, but I'm keeping these steps below just in case I get stuck again.

1. Download XAMPP for Linux from https://www.apachefriends.org/download.html
2. Run the .run file as a root user
3. To run XAMPP, go to /opt/lampp/ as a root user
4. Go to localhost/dashboard/ or go to localhost/phpmyadmin
5. Double-click on manager-linux-x64.run
6. Create a database and then import the content into it if needs be (you cannot create a database directly from a file you want to import)
7. Go to the .env file and make sure your environment variables look like this:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=name_of_my_database
        DB_USERNAME=root
        DB_PASSWORD=

8. Go to root folder, open a Terminal window and type:

        php artisan migrate

9. If everything went fine, your database should nonw have a few tables that were automatically created such as failed_jobs, etc.

Notes:

- Apparently, the path can be a bit different from one Linux distro to the other.
- If your Apache server won't start (red dot next to it in XAMPP), run this command:

        sudo systemctl stop apache2

- If the above really won't work, I suggest restarting your computer, and then running the same command.

___

## Using SQLite locally on Linux Mint

https://www.codementor.io/@goodnesskay/developing-locally-using-sqlite-with-laravel-on-ubuntu-8s8358503

Thanks to [Coder's Tape
](https://www.youtube.com/watch?v=kWmnQvznkUI) for creating his tutorial on YouTube on how to change the default SQL database settings to SQLite.

1. Go to the .env file
2. Replace **DB_CONNECTION=mysql** with **DB_CONNECTION=sqlite**
3. Erase all the other database-related lines such as DB_HOST=127.0.0.1, DB_PASSWORD=, etc.
4. Create a database through the Terminal or manually

        touch database/database.sqlite

5. Migrate your data and create new tables

        php artisan migrate

6. Update Composer

        composer update

7. Install possibly missing dependencies

        composer require doctrine/dbal

8. Go to the .env file and make sure your environment variables look like this:

        DB_CONNECTION=sqlite
        DB_DATABASE=database

9. Go to the root folder, open a Terminal window and type:

        php artisan migrate

10. If everything went fine, your database should nonw have a few tables that were automatically created such as failed_jobs, etc.

Note:

At some point I typed this in the console:

        sudo apt install sqlite

I can't tell at this point if this helps or not.

___

## Heroku

My references here were a [tutorial on YouTube by Jonny Kalambay](https://www.youtube.com/watch?v=MxfxiR8TVNU) and an answer on the [Trailblazer Community](https://trailblazers.salesforce.com/answers?id=9064S000000DHq1QAG).

Also, for the details that pertain to Laravel in particular, [codigofacilito and his tutorial on YouTube](https://www.youtube.com/watch?v=GE2Kmy8WL3g) were very useful to me. By the way his tutorial is in Spanish. He also explains how to upload a PostgreSQL database to the project at the end of his video.

### Installing the CLI

    sudo snap install --classic heroku

### Creating a Heroku Project

1. Go to Heroku
    - https://dashboard.heroku.com/apps
2. Create a new project such as [my-web-app-name]
3. Go to the Terminal Window and make sure the app/project is initialized as a Git repository by typing:

        git status

4. On the Heroku web site, you can find more information about the name of your project under the **deploy** tab.
5. Create a file named **Procfile** (no extension) containing this:
    - web: vendor/bin/heroku-php-apache2 public/
6. Go to the .env file. You'll need to copy and paste a series of lines to the Terminal window.

        heroku config:add APP_NAME=Laravel

        heroku config:add APP_ENV=production

        heroku config:add APP_KEY=base64:So/7B3DU3EGKk7qTHiHXm0hIBxAwjWyB64ZZd1D1R5s=

        heroku config:add APP_DEBUG=true

        heroku config:add APP_URL=http://[my-web-app-name].test

7. Create a Heroku remote:
    
        heroku git:remote -a [my-web-app-name]

8. Push your project to Heroku:

        git push heroku HEAD:master

9. On the Heroku's web site, click on **Open app**, which should be located somewhere in the top right corner of the page of your project
10. Now you should see your app.
11. Go to the browser
12. Your development server should be located at http://127.0.0.1:8000
.

### Updating Your Project

Now all you have to do is to update your remote project and type:
    
    git push heroku HEAD:master

### Using SQLite on Heroku

Your app might run perfectly locally. Setting it up so it runs remotely as well is slightly more complicated.

The first thing you have to keep in mind if you use a combination of SQLite and Heroku, you will overwrite your database with each redeployment, thus resetting it to what you have locally.

For more information on using Heroku and SQLite, please visit [David Tang's Deploying Laravel with SQLite to Heroku article](https://davidtang.io/deploying-laravel-with-sqlite-to-heroku/)'s. 

Here are the steps you have to follow:

1. Add **"ext-pdo_sqlite": "*"** to the **require** block in **composer.json**
2. Open a Terminal window
3. Run this:

        composer update

4. Type these lines one by one to set your environment variables:

        heroku config:add APP_NAME=Laravel
        heroku config:add APP_ENV=production
        heroku config:add APP_DEBUG=true
        heroku config:add DB_CONNECTION=sqlite
        heroku config:add DB_DATABASE=database

5. Type these lines one by one as well, correcting them with the correct information:

        heroku config:add APP_URL=https://app-name.com/
        heroku config:add APP_KEY=...

___

## Downloading A Laravel Project From Github And Setting It Up

This information was found on [stackoverflow](http://stackoverflow.com/questions/48116952/ddg#48117041).

- Do this:

        composer install

- Rename .env.example as .env and update it with your database credentials (**DB_CONNECTION=sqlite**
and **DB_HOST=127.0.0.1** for this project).

- Then do this:


        php artisan key:generate

        php artisan serve 

___

## Creating A New Table, Migration, Model And So Forth

To generate multiples files in a single command, use:

        php artisan make:model ModelName -mc

Note: In **-mc**, **m** stands for migration and **c** stands for controller.

This will create the:

- Migration
- Project model
- Controller

## Creating A Controller By Itself

As a rule of thumb, you should have one controller per table in your database.

        php artisan make:controller ControllerName