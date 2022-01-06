# Terminal Aide-Mémoire

## Linux version

To find out what version of Linux you are running, use this command:

    cat /etc/os-release

## Invisible files in folder

If you have invisible files in a folder, it's probably because you don't have the reading rights you need.

Use this command to get the proper rights:

    sudo chmod -R 777 [TAB]

The tabulation above is used to select the subfolder whose rights you want to change.

## Removing Slack

There is an installer file, but for the removal of Slack, the only option seems to be the Terminal window.

        sudo snap remove slack

___

## Fichier listant les caractéristiques d'un ordi

https://vitux.com/get-linux-system-and-hardware-details-on-the-command-line/

    sudo lshw -html > [filename.html]

___


## WINE

https://www.linuxbabe.com/linux-mint/install-wine-linux-mint-19-1

    sudo dpkg --add-architecture i386
    wget -nc https://dl.winehq.org/wine-builds/winehq.key
    sudo apt-key add winehq.key
    sudo apt-add-repository 'deb https://dl.winehq.org/wine-builds/ubuntu/ bionic main'
    sudo apt update
    sudo apt install --install-recommends winehq-stable
    winecfg

___

## Deleting leftover configuration files

https://askubuntu.com/questions/20127/how-to-remove-configuration-files-completely

Applications usually store configuration data in one of the following hidden folders, which you can delete if you're sure you have no use for the data:

    ~/.application
    ~/.config/application
    ~/.cache/application
    ~/.local/share/application

___

## Chrome

https://itsfoss.com/install-chrome-ubuntu/#install-chrome-terminal

    wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
    sudo dpkg -i google-chrome-stable_current_amd64.deb

___

## PHP without Xampp

    sudo apt install php
    php -S localhost:8000

___


## Brightness Controller

https://learnubuntumate.weebly.com/brightness-controller.html

    sudo add-apt-repository ppa:apandada1/brightness-controller
    sudo apt-get install brightness-controller

___

## Debugging PulseAudio so it connects properly

### Temporary Solution

https://askubuntu.com/questions/879037/pavucontrol-stuck-at-establishing-connection-to-pulseaudio-please-wait

    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get remove --purge alsa-base pulseaudio
    sudo apt-get install alsa-base pulseaudio pavucontrol
    sudo alsa force-reload
    reboot

### Another solution that might persist

https://livingthelinuxlifestyle.wordpress.com/2019/06/09/solve-problems-with-no-sound-in-linux-mint/

___


## SQLite browser
https://sqlitebrowser.org/dl/

    sudo add-apt-repository -y ppa:linuxgndu/sqlitebrowser-testing
    sudo apt-get update
    sudo apt-get install sqlitebrowser

___

## Varia (one-line installs)

By the way, installing NPM also installs Node.js on your system.

Also, the VS Code shortcut might not show in the start menu until you reboot your computer.

    sudo apt update
    sudo apt-get install npm
    sudo apt-get install git
    sudo apt install smplayer
    sudo apt install anki
    sudo apt install kazam
    sudo apt install gimp
    sudo snap install --classic code
    sudo snap install slack --classic

## Installing Snap

On Ubuntu, this is slightly more complicated. In Ubuntu, installing Snap is a one-liner.

    sudo rm /etc/apt/preferences.d/nosnap.pref
    sudo apt install snapd

## Installing Lingtrain Alignment Studio

https://github.com/averkij/a-studio

1. Open a Terminal window.
2. Install docker with this command:

        sudo apt install docker.io

3. Install Lingtrain Alignment Studio using the following command. I had to add **sudo** since I was running into permission issues.

        sudo docker pull lingtrain/aligner:v6

4. Go to the **tmp/** folder at the very root on the system and create a **test/** folder inside to basically create this path **tmp/test/**.
5. Run the app with this other command:

        sudo docker run -v /tmp/test -v /tmp/test -p 80:80 lingtrain/aligner:v6

6. Open a browser and type this in the address bar.

        localhost

## Using Commands

| Description of the command       | Command     |
|--------------|-----------|
| Listing the files from a folder | dir or ls |
| Erasing a folder with the name "test" |  rm -r test/
| Creating a file with the name "test.txt"? |  touch test.txt |
| Erasing a file with the name "test.txt"? | rm test.txt |
| Moving a folder with the name "test" to the folder "test2"? | mv test/ test2/ |
| [Creating a file with the system specifications](https://vitux.com/get-linux-system-and-hardware-details-on-the-command-line/) | sudo lshw -html > [filename.html] |
    
