<template>
  <ul>
    <li v-for="friend in friends" :key="friend">
      {{ friend.name }}
    </li>
  </ul>
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    return {
      friends: [
        { name: 'Evan You' },
        { name: 'Guillaume Chau' },
        { name: 'Sarah Drasner' },
        { name: 'Greg Pollack' },
      ]
    }
  }
}
</script>

