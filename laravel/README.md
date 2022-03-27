# Laravel Aide-Mémoire

---

## A Word of Thanks

I am indebted to many people for being able to create this aide-mémoire. I had to figure out a way to do many different things, including:

- Installing Laravel on Linux Mint
- Using SQLite
- Deploying a Laravel project to Heroku

On top of that, I had to wrap my head around the ways of Laravel, and this was made possible thanks to [Jeffrey Way from Laracast](https://laracasts.com/series/laravel-8-from-scratch). His tutorial is crisp, comes with all the code in a Github repository and is explained is plain terms. And on top of that, it's free.

---

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

        export PATH="$PATH:$HOME/.config/composer/vendor/bin"

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

17. Go to the project folder and downloaad the lastest dependencies

        composer update

18. Use CTRL + H in the project folder
19. Rename **.env.example** to **.env** (there might already be a file with this name and therefore this step might be useless)

---

### The Net Ninja Way

The Net Ninja installs Laravel globally in [one of his tutorials](https://www.youtube.com/watch?v=E74_WZpjeKA) with **composer global require laravel/installer**. This means that you can create Laravel projects wherever you want.

---

### Creating a Project and Running it

Make sure you have the correct dependencies installed:

1. Make sure Composer is installed.

        composer -V

1. Make sure NPM is installed.

        npm -v

1. Make sure PHP is installed.

        php -v

1. To set up a new project using VueJS instead of Blade, go see the VueJS part of this aide-mémoire.
1. Now to install Laravel, run these commands:

        laravel new [my-web-app-name]
        php artisan key:generate
        php artisan serve

1. Now go to your browser and type http://localhost:8000/ in the address bar.

---

## Deleting Your Dependencies To Move A Project Around

All dependencies are stored in your **vendor/** and **node_module/** subfolders. To reinstall your dependencies, for instance after downloading your project from a git repository, use **composer update** and **npm install**.

---

## Using An Existing Laravel Project On Another Machine

If you have formatted your computer or are using another computer and want to use a pre-existing project, you'll have to go through the following steps:

1. Install NPM:

        sudo apt install npm

2. Install Composer:

        sudo apt install Composer

3. Install the SQLite module for PHP:

        sudo apt-get install php-sqlite3

4. Install whatever this is:

        sudo apt-get install php-xml

5. Install the composer dependencies:

        composer install

6. Install the NPM dependencies:

        npm install

---

## Downloading A Laravel Project From Github And Setting It Up

This information was found on [stackoverflow](http://stackoverflow.com/questions/48116952/ddg#48117041).

- Do this:

        composer install

- Rename .env.example as .env and update it with your database credentials (**DB_CONNECTION=sqlite**
and **DB_HOST=127.0.0.1** for this project).

- Then do this:


        php artisan key:generate

        php artisan serve 

---

