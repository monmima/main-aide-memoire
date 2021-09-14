# vuejs-aide-memoire

An aide-mémoire (aid to the memory) for people learning the VueJS framework. This is a CDN-based project, because CDN is more user friendly if you just want to test out stuff with VueJS without doing the full-blown NPM installation.

## Installing VueJS CLI

Run this command to install Vue CLI:

    sudo npm -g i @vue/cli

## Creating a VueJS project with the CLI

Run this command to create the project folder:

    vue create project-name

Or run this command to create the project in the current directory:

    vue create .

Select **Default (Vue 3)** and press Enter.

Run this command to run the project:

    npm run serve

## Installing SASS in your project (optional)

    npm install -D sass-loader@^10 sass

## Using SASS in your project

Add this to a VueJS component:

    <style lang="scss">
        :root {
            --primary: #D81E5B;
            --secondary: #8a4fff;
            --tertiary: #32cbff;
            --dark: #131a26;
            --grey: #848484;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Fire Sans", sans-serif;
        }
    </style>