## Rerendering content with each click on links

Sometimes, you want to re-render a page, but with content which is different. By default, this will create a strange behaviour when you click on the Backward and Forward buttons in your browser.

All you have to do is add a parameter to your view-router component.

1. Go to src/App.vue.
1. Find this line:

        <router-view />

1. Change it for this:

        <router-view :key="$route.fullPath" />