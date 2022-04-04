# Upgrading NodeJS/NPM

Based on a [tutorial by Steve Griffith](https://www.youtube.com/watch?v=C9gehlXhS6U).

1. Clear out the cache

        npm cache clean -f

1. Install N

        sudo npm install -g n

1. Run N

        sudo n stable

1. Before checking for the version of NPM, close you Terminal window and reopen it. This way, you will be sure the version number was updated.
        
You could also replace **stable** with **latest** or with a specific version number such a **7.1.2**.