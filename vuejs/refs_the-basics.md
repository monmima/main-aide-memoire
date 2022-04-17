# Working with $refs

Your template:

    <div ref="testSideNav" id="mySidenav" class="sidenav">

A method in the methods() object of your view component:

    openSideNavButton () {
        const testa = this.$refs.testSideNav;
        console.log(testa);
        testa.style.width = '278px';
    },