


### Removing Slack

There is an installer file, but for the removal of Slack, the only option seems to be the Terminal window.

        sudo snap remove slack

___

## Fichier listant les caractéristiques d'un ordi

https://vitux.com/get-linux-system-and-hardware-details-on-the-command-line/

    sudo lshw -html > [filename.html]

___


### WINE

https://www.linuxbabe.com/linux-mint/install-wine-linux-mint-19-1

        sudo dpkg --add-architecture i386
        wget -nc https://dl.winehq.org/wine-builds/winehq.key
        sudo apt-key add winehq.key
        sudo apt-add-repository 'deb https://dl.winehq.org/wine-builds/ubuntu/ bionic main'
        sudo apt update
        sudo apt install --install-recommends winehq-stable
        winecfg

___

### Deleting leftover configuration files

https://askubuntu.com/questions/20127/how-to-remove-configuration-files-completely

Applications usually store configuration data in one of the following hidden folders, which you can delete if you're sure you have no use for the data:

    ~/.application
    ~/.config/application
    ~/.cache/application
    ~/.local/share/application

___

### Chrome

https://itsfoss.com/install-chrome-ubuntu/#install-chrome-terminal

    wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
    sudo dpkg -i google-chrome-stable_current_amd64.deb

___

### PHP without Xampp

    sudo apt install php
    php -S localhost:8000

___

## smplayer

    sudo apt install smplayer

___

## Anki

    sudo apt install anki

___


### Brightness Controller

https://learnubuntumate.weebly.com/brightness-controller.html

    sudo add-apt-repository ppa:apandada1/brightness-controller
    sudo apt-get update
    sudo apt-get install brightness-controller-simple
    sudo apt-get install brightness-controller

___

### Debugging PulseAudio so it connects properly

#### Temporary Solution

https://askubuntu.com/questions/879037/pavucontrol-stuck-at-establishing-connection-to-pulseaudio-please-wait

    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get remove --purge alsa-base pulseaudio
    sudo apt-get install alsa-base pulseaudio pavucontrol
    sudo alsa force-reload
    reboot

#### Another solution that might persist

https://livingthelinuxlifestyle.wordpress.com/2019/06/09/solve-problems-with-no-sound-in-linux-mint/

___

### Gimp

    sudo apt install gimp

___

### SQLite browser
https://sqlitebrowser.org/dl/

    sudo add-apt-repository -y ppa:linuxgndu/sqlitebrowser-testing
    sudo apt-get update
    sudo apt-get install sqlitebrowser

___

### Varia (one-line installs)

    sudo apt-get install npm
    sudo apt-get install git
    sudo apt-get install kate
    sudo apt install smplayer
    sudo apt install anki
    sudo apt install kazam

## Using Commands

| Description of the command       | Command     |
|--------------|-----------|
| Listing the files from a folder | dir or ls |
| Erasing a folder with the name "test" |  rm -r test/
| Creating a file with the name "test.txt"? |  touch test.txt |
| Erasing a file with the name "test.txt"? | rm test.txt |
| Moving a folder with the name "test" to the folder "test2"? | mv test/ test2/ |
| [Creating a file with the system specifications](https://vitux.com/get-linux-system-and-hardware-details-on-the-command-line/) | sudo lshw -html > [filename.html] |
    
