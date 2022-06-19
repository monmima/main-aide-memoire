# Refs and possible bugs

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
