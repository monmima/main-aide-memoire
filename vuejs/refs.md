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