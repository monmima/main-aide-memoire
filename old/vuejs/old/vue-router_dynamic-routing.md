# Vue router and dynamic routing

**Important!** Refer to **vue-router_data-binding.md** to see what these associated files would look like:

- router/index.js
- JobDetails.vue 

The information in this part of the aide-mémoire is inspired by content from [The Net Ninja's tutorial on vue-router](https://www.youtube.com/watch?v=juocv4AtrHo).

Your **JobList.vue** file:

    <template>
      <h1>Jobs</h1>

      <div v-for="job in jobs" :key="job.id">
        <router-link :to="{ name: 'JobDetails', params: { id: job.id } }">
          <h2>{{ job.title }}</h2>
        </router-link>
        
      </div>
    </template>

    <script>
    export default {
      data() {
        return {
          jobs: [
            { title: "Ninja UX Designer", id: 1, details: "lorem" },
            { title: "Ninja Web Developer", id: 2, details: "lorem" },
            { title: "Ninja Vue Designer", id: 3, details: "lorem" }
          ]
        }
      }
    }
    </script>

