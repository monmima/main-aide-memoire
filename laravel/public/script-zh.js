const sleep = (milliseconds) => {
    console.log("sleep");
    return new Promise(resolve => setTimeout(resolve, milliseconds))
}

function handleClick(id, language) {
    // console.log(id);

    const HTML = document.querySelector(`#${id} .${language}`).innerHTML;

    console.log(HTML);

    const languageWithCapital = language[0].toUpperCase() + language.substr(1);

    // console.log("zzzz " + languageWithCapital);

    return responsiveVoice.speak(HTML, `${languageWithCapital} Female`);
}

async function handleClickMainButton() {

    // pour inclure tous les boutons dans le sélecteur, sauf le tout premier
    const BUTTONS = document.querySelectorAll(".crud-zh-grid button");

    // console.log(BUTTONS);

    for (item of BUTTONS) {
        const TEXT = item.innerHTML;

        console.log(item.className.split(" ")[0]);

        // if the first class in the class list is the string "chinese"
        if (item.className.split(" ")[0] === "chinese") {
            voice = "Chinese Female";
        } else {
            voice = "French Female";
        }

        responsiveVoice.speak(TEXT, voice);

        await sleep(3000);
    }

    return;
}
