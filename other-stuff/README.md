# Other Useful Stuff

## Quick and Dirty Way of Injecting JS in WordPress

Thanks to [hmwebdev](https://github.com/hmwebdev) for this tip.

1. Go to functions.php
2. Create an add_action() function with two parameters
3. The first one is where you want to inject your code, for instance wp_head
4. The second one is where the name of your JS function
5. Mettre ta function JS tout simplement function nom() { ouvre une balise php et a l'intérieure de celle-ci une balise script html avec ton code js }

## Replacing an English Hard-Coded String and Translating it to Another Language

Thanks to [hmwebdev](https://github.com/hmwebdev) for this tip.

1. Make sure the code is injected in your header, not your footer
2. Write something like **document.body.innerHTML = document.body.innerHTML.replace(/All Projects/g, 'Tous les projects');**