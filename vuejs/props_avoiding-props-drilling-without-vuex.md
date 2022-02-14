## Avoiding props drilling in VueJS WITHOUT using Vuex

Source: https://www.youtube.com/watch?v=1oy8dn9xAQE

You can nest a whole bunch of components without having to drill the props. Instead you provide and inject your variables like so.

        let app = Vue.createApp({

        });

        app.component("component-x", {
            template: `
                <div>component x: {{ name }}</div> 
                <component-y></component-y>
            `,
            data() {
                return {
                    name: "J. Armitage"
                }
            },
            provide() {
                return {
                    username: this.name
                }

            }
        });

        app.component("component-y", {
            template: `
                <component-z></component-z>
            `
        });

        app.component("component-z", {
            template: `
                <div>component z: {{ username }}</div>
            `,
            inject: ["username"]
        });

        app.mount("#app");

    </script>