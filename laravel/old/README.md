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

1. Update your system.

        sudo apt-get update

1. Install curl.

        sudo apt install curl

1. Install PHP.

        sudo apt install php

1. Install Composer.

        curl -s https://getcomposer.org/installer | php

1. Move the file.

        sudo mv composer.phar /usr/local/bin/composer

1. Confirm Composer is installed.

        composer

1. Install Laravel.

        composer global require laravel/installer

1. Open the /etc/ folder in administrator mode, at root of your system.

1. Edit bash.bashrc.

1. Under "esac", copy and paste this:

        export PATH="$PATH:$HOME/.config/composer/vendor/bin"

1. Go back to a Terminal window.

1. Install php-mbstring.

        sudo apt-get install php-mbstring

1. Install php-xml.

        sudo apt-get install php-xml

1. Create a Laravel project. You might have to close the Terminal window you have used so far because you might receive you an error message, as if Laravel had not been installed yet.

        laravel new [project-name]

1. Go to the project folder and download the lastest dependencies.

        composer update

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

