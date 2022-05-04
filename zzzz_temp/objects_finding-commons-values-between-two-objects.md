## Finding commons values between two objects

    const obj1 = {
        "harry": 20,
        "hermione": 15,
        "ron": 10,
        "fred": 5
    };

    const obj2 = {
        "harry": 20,
        "hermione": 16,
        "fred": 5
    };

    function storeCommonValues(obj1, obj2) {
        const commonObj = {};

        for (const item in obj1) {
            console.log(`${item}: ${obj1[item]}`);

            console.log(obj2[item]);

            if (obj2[item] !== undefined && (obj1[item] === obj2[item])) {
                console.log(true);
                commonObj[item] = obj1[item];
            }
        }

        return commonObj;
    }

    console.log(storeCommonValues(obj1, obj2)); // { harry: 20, fred: 5 }