# Git Aide-Mémoire

The content of this Git Aide-Mémoire is heavily inspired by [Mosh Hamedani's YouTube tutorial](https://www.youtube.com/watch?v=8JJ101D3knE).

______


## Setting Up Your System

Short summary of the commands:

    git config -h

Full-blown help:

    git config -help

To see if you have Git on your machine:

    git --version

When you first use Git, you have to specify a few settings:

- name
- email
- default editor
- line ending

You can specify these settings on three different levels:

- system (all users)
- global (all repositories of the current user)
- local (the current repository)

Specifying your settings:

    git config --global user.name "monmima"
    git config --global user.email "[email address]"
    git config --global core.editor "code --wait"

Handling carriage returns the right way, so you don't run into bugs later down the line:

    git config --global core.autocrlf input (on Linux)
    git config --global core.autocrlf true (on Windows)

Editing your configuration file (your settings) when it has already been created:

    git config --global -e

___

## Creating A Git Project

Starting a project:

    mkdir Moon
    cd Moon
    git init

Showing almost everything

    ls

Showing everything, including the hidden content

    ls -a

Opening a folder

    open .git


