# Vue-router and data binding

Another advantage of the `<router-link>` tag is data binding. So instead of having this:

    <router-link to="/about">About</router-link>

You could have this instead:

    <router-link :to="{ name: 'About' }">about</router-link>

The advange of doing this is you could then change all of your links in one place, the **index.js** file.