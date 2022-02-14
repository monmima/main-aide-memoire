## Looping through an object and rendering the data in it

    <div id="app">
        <ul>
            <li v-for="friend in friends" v-bind:key="friend.username">
                {{ friend.name }} | {{ friend.username }}
            </li>
        </ul>
    </div>
    
    <script>
        let app = Vue.createApp({
            data() {
                return {
                    friends: [
                        {name: 'Evan You', username: 'youyuxi'},
                        {name: 'Guillaume Chau', username: 'Akryum'},
                        {name: 'Sarah Drasner', username: 'sarah_edo'},
                        {name: 'Greg Pollack', username: 'greggpollack'},
                    ]
                }
            }
        });

        app.mount("#app");
    </script>
