# Router links

Both of the links below work fine in VueJS.

    <router-link to="/about">About</router-link>

    <a href="/about">test</a>

The advantage of the `<router-link>` tag over the `<a>` tag is that it intercepts requests. The `<a>` tag just sends fresh requests, which take longer to load. The `<router-link>` tag just refreshes components that need to be refreshed.

The `<router-link>` also give the proper classes automatically such as `router-link-active` and `router-link-exact-active`.

Another advantage of `<router-link>` is data binding. See **vue-router_data-binding.md** for more information on this.