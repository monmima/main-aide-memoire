# How to force the re-rendering of a component

The ideal solution involves updating the key of a component, but this works as well:

    this.$forceUpdate();