# vuejs-aide-memoire

Part of this aide-mémoire is inspired by content by [Dan Vega](https://www.udemy.com/course/vue-intro) and [Gwendolyn Faraday](https://www.youtube.com/watch?v=FXpIoQ_rT_c).

## Installing VueJS CLI

Run this command to install Vue CLI:

    sudo npm -g i @vue/cli

## Creating a VueJS project

The easiest way to add Vuex in a project is to install it from the get-go:

1. Open a Terminal window.
1. Type this:

        vue create [my-name]

1. You can also type this if you're already in the project folder:

        vue create .

1. Select **Manually select features**.
1. Use the spacebar to enable features such as Vuex and Vue-router. I recommand:

    - Babel
    - Router
    - Vuex
    - CSS Pre-processors
    - **Uncheck** Linter / Formatter

1. Select 3.x for the version you use.
1. Answer **Y** to **Use history mode for router?**.
1. **At the end of the process, you'll be asked to save your options as a preset. If you didn't get to choose any of the options above, maybe that's because you have set a preset already.** 

## Running a project

Run this command to run a project:

    npm run serve