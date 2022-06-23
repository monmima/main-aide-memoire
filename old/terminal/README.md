# Terminal Aide-Mémoire

## Invisible files in folder

If you have invisible files in a folder, it's probably because you don't have the reading rights you need.

Use this command to get the proper rights:

    sudo chmod -R 777 [TAB]

The tabulation above is used to select the subfolder whose rights you want to change.

## Removing Slack

There is an installer file, but for the removal of Slack, the only option seems to be the Terminal window.

	sudo snap remove slack

---

## Deleting leftover configuration files

https://askubuntu.com/questions/20127/how-to-remove-configuration-files-completely

Applications usually store configuration data in one of the following hidden folders, which you can delete if you're sure you have no use for the data:

    ~/.application
    ~/.config/application
    ~/.cache/application
    ~/.local/share/application

---

## PHP without Xampp

    sudo apt install php
    php -S localhost:8000

---

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

## Using Commands

| Description of the command       | Command     |
|--------------|-----------|
| Listing the files from a folder | dir or ls |
| Erasing a folder with the name "test" |  rm -r test/
| Creating a file with the name "test.txt"? |  touch test.txt |
| Erasing a file with the name "test.txt"? | rm test.txt |
| Moving a folder with the name "test" to the folder "test2"? | mv test/ test2/ |
| [Creating a file with the system specifications](https://vitux.com/get-linux-system-and-hardware-details-on-the-command-line/) | sudo lshw -html > [filename.html] |

