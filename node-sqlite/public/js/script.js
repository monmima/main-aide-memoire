/**
 * Message proving the script is loaded
 */
 console.log("Fichier script chargé...");

 /**
  * turning <strong> tags to actual <strong> tags
  * if you try to inject the <strong> tags in the back-end,
  * you actually get something like &lt;strong&gt;
  * in the front-end (escaped characters)
  */
 function turnPlaceholdersToStrongTags() {
     let text = document.querySelector("body").innerHTML;
 
     text = text.replace(/&lt;strong&gt;/g, "<strong>");
     text = text.replace(/&lt;\/strong&gt;/g, "</strong>");
     
     // console.log(text);
     
     return document.querySelector("body").innerHTML = text;
 }
 
 /**
  * dynamic event listeners on all buttons
  */
 function addEvents() {
     const BOUTONS = document.querySelectorAll("div.language-column button");
 
     for (item of BOUTONS) {
         const parentDivLanguageColumn = item.parentElement.parentElement.classList[1];
         const textToRead = item.parentElement.parentElement.firstElementChild.innerText;
     
         // adding events for reading the content in German or French
         item.addEventListener("click", function() {
     
             console.log(textToRead);
     
             if (parentDivLanguageColumn === "passage_autre") {
                 responsiveVoice.speak(textToRead, 'Deutsch Male')
                 // console.log("de");
             }
             
             if (parentDivLanguageColumn === "passage_fr") {
                 responsiveVoice.speak(textToRead, 'French Male')
                 // console.log("fr");
             }
         });
     }
 }
 
 /**
  * stuff to run from the get-go
  */
 function main() {
     turnPlaceholdersToStrongTags();
     addEvents();
 }
 
 main();
 