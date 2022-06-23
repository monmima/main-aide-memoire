# VueJS: importing and exporting

Here is what a very basic component with import and export statements look like:

    <template>
        <div class="home">
            <img alt="Vue logo" src="../assets/logo.png">

            <HelloWorld />
            <Slot />
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
