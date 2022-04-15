# Working with $refs

Your template:

    <div ref="testSideNav" id="mySidenav" class="sidenav">

A method in the methods() object of your view component:

    openSideNavButton () {
        const testa = this.$refs.testSideNav;
        console.log(testa);
        testa.style.width = '278px';
    },

## Possible bugs

### Uncaught TypeError: this.$ref is undefined

You may run into this error message because <code>$refs</code> is plural, not singular.

### Refs and undefined errors

With refs, it's easy to run into undefined errors. To avoid them, you can use <code>$nextTick()</code> if it's not possible to use the <code>mounted()</code> lifecycle hook.

### `refs` and slots

References directly on a slot element doesn't seem to work:

    <div ref="abc">
      <slot ref="def" />
    </div>

The solution is to target a parent element:

    console.log(this.$refs.abc); // works
    console.log(this.$refs.def); // doesn't work

