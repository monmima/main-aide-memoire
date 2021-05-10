function handleClick(id, language) {
    // console.log(id);

    const HTML = document.querySelector(`#${id} .${language}`).innerHTML;

    console.log(HTML);

    const languageWithCapital = language[0].toUpperCase() + language.substr(1);

    // console.log("zzzz " + languageWithCapital);

    return responsiveVoice.speak(HTML, `${languageWithCapital} Female`);
}