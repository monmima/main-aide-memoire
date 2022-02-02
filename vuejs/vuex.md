# Vuex

## Installing Vuex and creating a simple store

Based on [The Net Ninja's Vuex Tutorial #3 - Setting up a Central Store](https://www.youtube.com/watch?v=kiSEmYio_k8).

1. Use this command:

    npm install vuex --save

1. Create a folder called **src/store**.
1. Create a file called **src/store/store.js**.
1. Paste this in it:

        import Vue from 'vue';
        import Vuex from 'vuex';

        Vue.use(Vuex);

        export const store = new Vuex.Store({
            state: {
                products: [
                    { name: 'Banana skin', price: 20 },
                    { name: 'Shiny star', price: 40 },
                    { name: 'Shiny star', price: 60 },
                    { name: 'red shells', price: 50 }
                ]
            }
        });

## Actually using the store that was just created

Based on [The Net Ninja's Vuex Tutorial #4 - Using Computed Properties](https://www.youtube.com/watch?v=CRu1ZJPJDvc).

1. Go to src/main.js.
1. Import the store by adding this line in the import statements:

    import { store } from './store/store.js'

1. Add this line to the Vue instance:

    store: store,

1. You main.js file should look like this:

