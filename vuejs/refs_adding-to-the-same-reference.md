# Refs: adding to the same reference

If you want to get a series to nodes and repeat an action, you can by just repeating the same reference in your code.

**But this has to happen inside a loop for the references to be turned into an array.**

1. Create a parent view or reuse one:

        <template>

          <div>
            <HelloWorld ref="myNum" v-for="num in 10" :key="num">{{ num }}</HelloWorld>

            <button @click="getHelloWorld">Click here and watch the console</button>

          </div>

        </template>

        <script>
        import HelloWorld from "../components/HelloWorld.vue";

        export default {
          name: "Refs2",
          components: {
            HelloWorld
          },
          methods: {
            getHelloWorld () {
              (this.$refs.myNum).forEach((element) => {
                if (element.validate) {
                  element.validate();
                }
              });
            }

          },
          mounted () {
            console.log(this.$refs.myNum);
          }
        }
        </script>

1. Create a child component or reuse one. In this example, we're re-using the **HelloWorld** component.

        <template>
          <div class="test">
            test
          </div>
        </template>

        <script>
        export default {
          name: "HelloWorld",
          methods: {
            validate () {
              console.log('je me valide');
            }
          }
        }
        </script>

By loading the parent view, you end up with the "je me valide" printed 10 times in the console.