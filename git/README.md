# Git Aide-Mémoire

The content of this Git Aide-Mémoire is heavily inspired by [The Net Ninja's YouTube tutorials on Git](https://www.youtube.com/watch?v=fQLK8Ib_SKk).

______

## Configuring Git

    $ git config --global user.name "monmima"
    $ git config --global user.email monmima@example.com

## Creating Branches

Branching is used to test out new features without messing up the main branch.

Action | Command
------------ | -------------
Displaying the log of changes to the branch | git log --oneline
Creating a new branch | git branch my-new-branch-name
Showing all the branches, to see what branch you're on | git branch -a
Moving to a new branch | git checkout my-new-branch-name
Moving to the main/master branch | git checkout master
Deleting a branch which has not been merged | git branch -D my-branch-to-delete
Deleting a branch which has been merged | git branch -d my-branch-to-delete
Deleting a branch and then check out | git checkout -b my-new-branch 

## Merging Branches

Action | Command
------------ | -------------
To merge a branch (you need to be in the branch where your other branch is going to get merged, which is typically the master branch) | git merge my-secondary-main-branch | git merge my-new-feature-branch

## Solving Merging Conflicts

1. Go to VS Code.
2. Find the location of the conflict.
3. Save the file.
4. git add .
5. git commit (without a message)
6. In the scary merge screen, type **SHIFT + :**
7. wq

## Unadding and uncommiting a change to the master branch

Action | Command
------------ | -------------
To unadd and uncommit a change | git reset HEAD~

## Creating an SSH key on Linux Mint

This is probably very much like what you'd have to do on any other machine (Windows or MacIntosh). The only difference that I can think of are steps 4 and 5, where the path is going to be slightly different.

1. Open a Terminal window.
2. Type this:

        ssh-keygen

3. Choose a passphrase or press Enter (leaving the field empty) not to use one.
4. Copy the path just given to you (e.g., /home/[your-username]/.ssh/id_rsa.pub)
5. Type the following to display the content of the file in Terminal or manually open the file. **Watch out!** .ssh is a hidden folder so you might have to do something for it to show up:

        cat /home/[your-username]/.ssh/id_rsa.pub

6. Copy the content of the file.
7. Log into your Github account.
8. Click on the profile icon (circle at the top right corner of the screen).
9. Go to your settings.
10. Go to the tab called **SSH and GPG keys**.
11. Click the green button called **New SSH key**.
12. Paste the line that was copied step 6.
13. Give the new SSH key a name.
14. Voilà! Now you have to clone existing projects using the SSH option for this to work.
15. Bear in mind that if you keep using an old project folder that was cloned using HTTPS and not SSH, you'll still be using HTTPS. Being asked to manually type your Github credentials (password, etc.) would be a hint that you are still using HTTPS.
16. Now, if you format your computer, you can reuse your SSH keys by dropping a copy of the .ssh folder where it belongs, which would be here on Linux Mint: **/home/[your-username]/**. Ideally, you would use different SSH keys for different computers.

## Setting a Git remote

1. Create a Git repository
2. Go to the local project folder
3. Type this:

        git init

4.  Type this:

        git remote add origin git@github.com:monmima/[project-name].git
        git push --set-upstream origin master
