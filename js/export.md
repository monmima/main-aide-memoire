# Export

`require()` works easily will all versions of NodeJS, and `export()` might not work unless you have a very, very recent version of NodeJS or Babel installed in a project, which will convert your `export()` statements back to `require()` anyways.

So to sum it all up, it's easier to use `require()` that `export()`.