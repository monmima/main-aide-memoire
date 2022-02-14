# Installing SASS in your project (optional)

The easiest way to proceed is probably to install SASS from the get-go instead of installing SASS the project is created.

Below are the steps to install SASS once a project is created.

## Option 1

    npm install -D sass-loader@^10 sass

## Option 2

Just select the manual installation after using this command:

    vue create [my-project]

# Using SASS in your project

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