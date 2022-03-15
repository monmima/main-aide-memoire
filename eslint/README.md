# Bugs

To disable alert messages in Typescript and ESLint, use a comment like this at the start of the script (after the <code>script</code> tag) to ignore alerts for the whole file:

    /* eslint-disable */
    // @ts-nocheck

You can also be more specific like this:

    /* eslint-disable */
    // @ts-ignore
    /* eslint-enable */

<code>@ts-ignore</code> helps you ignore the next line.