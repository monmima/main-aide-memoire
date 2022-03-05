## Deploying your project on Heroku

https://devcenter.heroku.com/articles/getting-started-with-php#set-up

1. Make sure PHP, composer, git and Heroku are installed by running these commands:

        php -v

        composer -V

        git --version

        heroku --version

1. Update information on packages:

        sudo apt update

1. If the Heroku CLI is not installed, use this command:

        sudo snap install heroku --classic

1. If Composer is not installed, use this command:

        composer install

1. Create a file called composer.json and paste the following in it:

        {
            "require" : {
                "silex/silex": "^2.0.4",
                "monolog/monolog": "^1.22",
                "twig/twig": "^2.0",
                "symfony/twig-bridge": "^3",
                "ext-pdo_sqlite": "*"
            },
            "require-dev": {
                "heroku/heroku-buildpack-php": "*"
            }
        }

1. Run this command in your project root to create /vendor and composer.lock:

        composer install

1. Create a .gitignore file and add vendor/ to it.
1. Log into your Heroku account and create a project.
1. Create a git remote by using a command like this one:

        heroku git:remote -a php-sqlite-crud

1. Push your local files to Heroku using this command:

        git push heroku HEAD:master