## Sorting an object by turning it into an array and back to an object

    const myObj = {
        "fred": 5,
        "harry": 20,
        "hermione": 16
    };

    function sortObj(obj) {
        const arr = [];
        let sortedObj = {};

        // creating arr from obj
        for (let item in obj) {
            arr.push([[`${item}`], [`${obj[item]}`]]);
        }

        // sorting arr
        arr.sort(function(a, b) {
            return b[1] - a[1];
        });

        // turning arr into obj again
        for (let i of arr) {
            // exclusing strings shorter than 4
            if (i[0][0].length >= 4) {
                sortedObj[ i[0] ] = i[1][0];
            }
        }

        return sortedObj;
    }

    console.log(sortObj(myObj)); // { harry: '20', hermione: '16', fred: '5' }