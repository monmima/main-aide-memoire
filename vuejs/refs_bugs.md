# Refs and possible bugs

## Uncaught TypeError: this.$ref is undefined

You may run into this error message because <code>$refs</code> is plural, not singular.

## Refs and undefined errors

With refs, it's easy to run into undefined errors. To avoid them, you can use <code>$nextTick()</code> if it's not possible to use the <code>mounted()</code> lifecycle hook.

    this.$nextTick(() => {
        console.log(this.$refs.abc);
    });

## `refs` and slots

References directly on a slot element doesn't seem to work:

    <div ref="abc">
      <slot ref="def" />
    </div>

The solution is to target a parent element:

    console.log(this.$refs.abc); // works
    console.log(this.$refs.def); // undefined

## Targeting a ***parent component***

You might get `undefined` instead of a node if you are not properly targeting a ***parent component***.

Instead of getting information using `this.$refs.ref4`, you would use `this.$parent.$refs.ref4` instead.