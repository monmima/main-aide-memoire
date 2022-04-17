# Component

This is an example of the things you usually have inside of a component.

    <template>
      <h1>abcd</h1>

      <HelloWorld />
    </template>

    <script>
    import HelloWorld from '@/components/HelloWorld.vue';

    export default {
      name: 'HelloWorld',
      data () {
        return {
          favNumber: "24"
        }
      },
      components: {
        HelloWorld
      },
      props: {
        msg: String
      },
      computed: {

      },
      mounted () {
        console.log(this.favNumber);
      }
    }
    </script>
