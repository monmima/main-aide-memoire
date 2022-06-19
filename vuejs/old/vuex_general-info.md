# Vuex

## Parts of the store

- The **state** is where you store the data of an app.
- The **mutations** are methods that change the data that is in the state. The only way you can change data in the state is with mutations. Mutations are synchronous only.
- The **actions** are methods. They cannot change data in the state. They can only access data that's in the state. You can have asynchrnous code in the mutations.
- The **getters** allow you to access data that's in the state.
- The **modules** allow you to break up the store into multiple modules. Each of them can have their own state, mutations, actions and getters.

## Installing Vuex and creating a simple store

The easiest way to add Vuex in a project is to install it from the get-go, by selecting the manual installation, just after you typed this:

    vue create [my-project]

The same goes for vue-router, SASS, etc.