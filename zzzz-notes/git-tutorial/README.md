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
To display the log of changes to the branch | git log --oneline
To create a new branch | git branch my-new-branch-name
To show all the branches, to see what branch you're on | git branch -a
To move to a new branch | git checkout my-new-branch-name
To delete a branch which has not been merged | git branch -D my-branch-to-delete
To delete a branch which has been merged | git branch -d my-branch-to-delete
To create a branch and then check out | git checkout -b my-new-branch

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



