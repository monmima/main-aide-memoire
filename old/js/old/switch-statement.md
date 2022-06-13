# Switch Statement

function selectFruit(quelFruit) {
    let string = "";

    switch (quelFruit) {
        case "orange":
            string = "This is an orange."
            break;
        case "banana":
            string = "This is a banana."
            break;
        case "apple":
            string = "This is an apple."
            break;
        default:
            string = "This is something else."
    }

    return string;
}

console.log(selectFruit("apple"));