# Using an array of regular expressions on a string

    const myStr = "1111 2222"

    myRegexps = [
        [new RegExp(/(1111)/gi), "aaa"],
        [new RegExp(/(2222)/gi), "zzz"]
    ];

    function replaceWithRegExp(strToReplace, arrOfRegexps) {
        let newStr = strToReplace;

        for (let item of arrOfRegexps) {
            newStr = newStr.replace(item[0], item[1]);
        }

        return newStr;
    }

    console.log(replaceWithRegExp(myStr, myRegexps)); // "aaa zzz"