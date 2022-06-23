# Query params

The query params look like this:

> http://localhost:8080/?name=djfkl

They should not be confused with route params, who look like this:

> http://localhost:8080/jobs/1

You HomeView.vue component:

    <template>
      <h1>Home page</h1>

      <router-link :to="{ path:'/', query: { name: 'John Connor', age: '30' } }">
        Query param link. Click on this see the URL change.
      </router-link>

      <h4>User name... {{$route.query.name}}</h4>
      <h4>User age... {{$route.query.age}}</h4>
    </template>
