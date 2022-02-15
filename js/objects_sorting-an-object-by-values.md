## Sorting an object by values

This algorithm was created with the help of information found on [stackoverflow](https://stackoverflow.com/questions/1069666/sorting-object-property-by-values).

    function sortObj(obj) {
        let sortable = [];

        for (let item in obj) {
            sortable.push([item, obj[item]]);
        }

        sortable.sort(function(a, b) {
            return a[1] - b[1];
        });

        return sortable;
    }

    console.log(sortObj(
        {
            "word": 100,
            "other": 10,
            "and": 3,
            "likely": 2
        }
    ));
