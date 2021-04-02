# Other Useful Stuff

## A Quick and Dirty Way of Injecting JS into WordPress

Thanks to [hmwebdev](https://github.com/hmwebdev) for this tip.

1. Go to functions.php
2. Create an add_action() function with two parameters
3. The first one is where you want to inject your code, for instance wp_head
4. The second one is where the name of your JS function
5. Mettre ta function JS tout simplement function nom() { ouvre une balise php et a l'intérieure de celle-ci une balise script html avec ton code js }

## Replacing an English Hard-Coded String and Translating it to Another Language

Thanks to [hmwebdev](https://github.com/hmwebdev) for this tip.

1. Make sure the code is injected in your , not your header
2. Write something like **document.body.innerHTML = document.body.innerHTML.replace(/All Projects/g, 'Tous les projects');**

## Dynamically Translating a Facebook Chat Plugin Depending on the Language of a Site

1. Create a new line under **(function(d, s, id) {** and type:

        const currLang = document.documentElement.lang;
        const currLangLowDash = currLang.replace("-", "_")

2. Change the line that starts with **js.src** to this:

        js.src = `https://connect.facebook.net/${currLangLowDash}/sdk/xfbml.customerchat.js`;

3. Remove these lines or anything that ressembles them. This way, the logged-in and logged-out messages will vary depending on the language of the site instead of always staying the same.

         logged_in_greeting=“Bonjour, comment pouvons-nous vous aider? :parasol:”
         logged_out_greeting=“Bonjour, comment pouvons-nous vous aider? :parasol:“>