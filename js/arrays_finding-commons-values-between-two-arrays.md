## Finding common values between two arrays

    const arrA = ["harry", "potter", "hagrid"];
    const arrB = ["hermione", "potter", "ron"];

    function storeCommonValues(arrA, arrB) {
        const commonArr =  [];

        for (let i of arrA) {
            console.log(i);

            // -1 if value is not in arrB
            if (arrB.indexOf(i) > -1) {
                commonArr.push(i);
            }
        }

        return commonArr;
    }

    console.log(storeCommonValues(arrA, arrB)); // [ "potter" ]