# Using And Running MySQL On Linux Mint

Obviously, you can use Microsoft, Linux or the Macintosh operating system to run this project, but I'm keeping these steps below just in case I get stuck again, and I use Linux Mint as my main OS.

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

9. If everything went fine, your database should now have a few tables that were automatically created such as failed_jobs, etc.

Notes:

- Apparently, the path can be a bit different from one Linux distro to the other.
- If your Apache server won't start (red dot next to it in XAMPP), run this command:

        sudo systemctl stop apache2

- If the above really won't work, I suggest restarting your computer, and then running the same command.