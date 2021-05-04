# Git Aide-Mémoire

The content of this Git Aide-Mémoire is heavily inspired by [Mosh Hamedani's YouTube tutorial](https://www.youtube.com/watch?v=8JJ101D3knE).

______


## Setting Up Your System

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

## Commiting Best Practices
- Each commit should represent a milestone (= small step forward) in your application.
- Don't mix things up. Each commit should be something different. For instance, you find a typo while fixing a bug (= 2 commits).
- Create meaningful commit messages.
- Use the imperative mood in your messages such as "Fix the bug." instead of "Fixed the bug.".

## Ignoring Files

Only works if you haven't already included a file or a directory in your repository.

## Command Table (plus a few Unix commands)
___

Action | Command
------------ | -------------
Adding many files at once | git add file1.txt file2.txt
Adding files with a pattern  | git add *.txt
Adding all files recursively | git add .
Opening a folder  | open .git
Listing changes to be committed | git status
Creating a file and write to it | echo hello > file1.txt
Append to a file | echo world >> file1.txt
Creating a folder | mkdir Moon
Editing a configuration file that is created | git config --global -e
Getting the full-blown help | git config -help
Getting a short summary of the commands | git config -h
Getting your version of Git | git --version
Handling carriage returns the right way, so you don't run into bugs later down the line (Linux) | git config --global core.autocrlf input
Handling carriage returns the right way, so you don't run into bugs later down the line (Windows) | git config --global core.autocrlf true
Moving to a folder | cd Moon
Showing almost everything | ls
Showing everything, including the hidden content | ls -a
Starting a Git project | git init
Committing changes | git commit -m "initial commit"
Skipping the staging area (git add...) - do this only if you know what you're doing | git commit -am "commit message"
Deleting a file | rm file.txt
List files in the staging area (= git add...) - a recently deleted file won't show up with just "git status" | git ls-files
Removing file from both working directory and staging area | git rm file.txt
Renaming a file | mv file1.txt main.js
Renaming a file in both the working directory and the staging area | git mv file1.txt main.js
Removing a file/folder only in the staging area (git add...) | git rm --cached -r dir/

