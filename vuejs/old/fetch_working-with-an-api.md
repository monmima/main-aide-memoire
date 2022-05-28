## Working with an API

**GET** (not **POST**) request below.

    <div id="app">
        <li v-for="item in response" v-bind:key="item.title">
            {{ item.title }}
        </li>
    </div>

    [...]
    
    <script>
      export default ({
          data() {
              return {
                  response: null
              }
          },
          mounted: function() {

              fetch('https://pokeapi.co/api/v2/pokemon?limit=20&offset=0')
                  .then(res => res.json())
                  .then(data => this.response = data) // pass the data to the response variable
                  .then(console.log("test"))
                  .then(console.log("other test"))
                  .then(data => console.log(data)) // print to the console
              .catch(function (err) {
                  console.log('ERROR CATCHED - ' + err);
              });
          }
      });
    </script>