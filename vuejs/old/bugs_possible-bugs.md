# Possibles bugs in VueJS

## PrimeVue and styles

PrimeVue doesn't like when you try to customize its default style. To force a new one, use <code>/deep/</code> like so:

    /deep/ .p-checkbox .p-checkbox-box {
        border-color: #00a0b4;
    }

## Refs and undefined errors

With refs, it's easy to run into undefined errors. To avoid them, you can use <code>$nextTick()</code> if it's not possible to use the <code>mounted()</code> lifecycle hook. You can event nest many instances <code>$nextTick()</code>.
