# Regexp (regulars expressions) Aide-Mémoire

| Regexp         | Definition     |
|--------------|-----------|
| \d{2} | two-digit number |
| [^\d] | non-digit character | 
| \W | punctuation | 
| \s | space | 
| $1 | matched regexp in JavaScript |
| \1 | matched regexp in Python |

## Important

If you use regular expressions in JS, you need to escape your own backslashes or you'll end up with strange results.

The two lines below would create undesirable results:

    const re = new RegExp(`(coblentz.*?\.) `, 'gi');
    text = text.replace(re, "$1\n");

To solve this, you need to add one more backslash, like this:

    const re = new RegExp(`(coblentz.*?\\.) `, 'gi');
    text = text.replace(re, "$1\n");