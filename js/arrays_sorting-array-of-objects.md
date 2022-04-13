# Arrays: sorting an array of objects

Code inspired by content from [Love2Dev](https://love2dev.com/blog/javascript-remove-from-array/).

    // creating the data
    let data = [
      {
        firstName: 'John',
        municipalite: "Chicago"
      },

      {
        firstName: 'Anna',
        municipalite: "Paris"
      },

      {
        lastName: 'Albert',
        municipalite: "Montreal"
      }
    ];

    // sorting data
    data.sort((a, b) => {
      const fa = a.municipalite.toLowerCase();
      const fb = b.municipalite.toLowerCase();

      if (fa < fb) {
        return -1;
      }
      if (fa > fb) {
        return 1;
      }
      return 0;
    });

    // priting data
    data.forEach((e) => {
      console.log(`${e.municipalite} ${e.lastName}`);
    });