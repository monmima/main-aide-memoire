# Using props

    <div id="app">
        <example-props name="test 1"></example-props>
        <example-props name="test 2"></example-props>
    </div>

    [...]

    app.component("example-props", {
        template: `<h3 class="center">{{ message }} {{this.name}}</h3>`,
        data() {
            return {
                message: "Example"
            }
        },
        props: ["name"],
        mounted() {
            console.log(`Example ${this.name} instance was mounted!`);
        }
    });