# Bugs

To disable alert messages in ESLint, use a comment like this:

    /* eslint-disable */
    let test;
    test = 5;
    console.log(test);

    // début fetch
    fetch('https://pokeapi.co/api/v2/pokemon?limit=20&offset=0')
      .then(res => res.json())
      // @ts-ignore
      .then(console.log(test))
      .catch(function (err) {
        console.log('ERROR CATCHED - ' + err);
      });
    /* eslint-enable */