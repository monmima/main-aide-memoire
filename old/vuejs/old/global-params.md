# Using global params

The code below is inspired by explanations from a coworker of mine.

Global params are like a store (= Vuex), except the global parameters are not stored in local storage and are reset on page reload.

In this example, we'll create three file.

1. GlobalParamsHandler.js
1. Sidebar.vue, the child
1. A parent for Sidebar.vue

The data will be stored in GlobalParamsHandler.js. We will **set** the name of a parameter from Sidebar.vue and we will **get** the content of this parameter from the parent.

## Here are the steps

1. Create a folder called src/globalParams.
2. Create a file called src/globalParams/GlobalParamsHandler.js.
3. Copy and paste the code below in your new file.

        class GlobalParamsHandlerClass {
          pageTitle = '';
        }
          
        const GlobalParamsHandler = new GlobalParamsHandlerClass();

        export default GlobalParamsHandler;

1. Create a child component file called components/Sidebar.vue.
1. Copy and paste the code below in this new file.

        <template>
          <div>
            Child component
          </div>
        </template>

        <script>
        import GlobalParamsHandler from '../globalParams/GlobalParamsHandler'

        export default {
          methods: {
            setPageTitle() {
              GlobalParamsHandler.pageTitle = "test2";
            }
          },
          mounted() {
            console.log("mounted");
            this.setPageTitle();
          } 
        }
        </script>

1. Create a parent view or reuse an existing one.
1. Copy and paste the code below in this file.

        <template>
          <div>
            {{ getPageTitle }}
            <Sidebar></Sidebar>
          </div>
        </template>

        <script>
        import Sidebar from '@/components/Sidebar.vue'
        import GlobalParamsHandler from '../globalParams/GlobalParamsHandler'

        export default {
          components: {
            Sidebar
          },
          computed: {
            getPageTitle () {
              return GlobalParamsHandler.pageTitle;
            }
          }
        }
        </script>