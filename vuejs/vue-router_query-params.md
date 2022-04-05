# Query params

The query params look like this:

> http://localhost:8080/?name=djfkl

They should not be confused with route params, who look like this:

> http://localhost:8080/jobs/1

    <template>
      <h1>Home page</h1>

      <router-link :to="{ path:'/', query: { name: 'test' } }">
        Query param link. Click on this see the URL change.
      </router-link>

      <h4>This is User... {{$route.query.name}}</h4>
    </template>
