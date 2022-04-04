## v-for

This code sample writes numbers from 1 to 10 in a bullet list.

    <div id="app">
        <ul>
            <li v-for="num in 10" :key="num">{{ num }}</li>
        </ul>
    </div>