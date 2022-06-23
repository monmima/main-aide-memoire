# Using the <code>slot</code> tag for default content

Please keep in mind that the `slot` tag is now deprecated. Ideally, you should use the v-slot directive instead.

## Your **Home.vue** view

    <template>
      <div class="home">
        <img alt="Vue logo" src="../assets/logo.png">

        <Slot>Custom content</Slot>
      </div>
    </template>

    <script>
    // @ is an alias to /src
    import HelloWorld from '@/components/HelloWorld.vue';
    import Slot from '@/components/Slot.vue';

    export default {
      name: 'Home',
      components: {
        HelloWorld,
        Slot
      }
    }
    </script>

## Your slot.vue component

    <template>
      <button>
        <slot>This is the default content if nothing gets specified to go here</slot>
      </button>
    </template>