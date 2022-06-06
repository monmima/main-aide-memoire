# LibreTranslate

Official documentation available on Github [here](https://github.com/argosopentech/LibreTranslate-init) and [here](https://github.com/LibreTranslate/LibreTranslate).

The following assumes your OS is Linux Mint.

## Installing LibreTranslate

1. Create a user:

		sudo useradd libretranslate
		sudo mkdir /home/libretranslate
		sudo chown libretranslate:libretranslate /home/libretranslate
		sudo usermod -aG sudo libretranslate
		sudo passwd -d libretranslate
		sudo su libretranslate

1. Open a Terminal window using this shortcut. The point here is to be at the root of your OS in the Terminal window:

		CTRL + SHIFT + DELETE

1. Download LibreTranslate-init:

		git clone https://github.com/argosopentech/LibreTranslate-init.git ~/LibreTranslate-init

1. Download dependencies and run LibreTranslate on port 5000. **This is going to take a lot of time.**

		~/LibreTranslate-init/setup.sh

1. Open a browser window and paste this in it:

		http://localhost:5000

## Running LibreTranslate once it is installed

1. Run this command:

		~/LibreTranslate/env/bin/libretranslate

1. Open a browser window and paste this in it:

		http://localhost:5000