# Varia

## Adding shortcode in PHP/WordPress

	do_shortcode()

## Swapping Paragraphs And Image When On Mobile

```
@media only screen and (max-width: 769px) {
	{
		.swap-on-mobile {
			display: flex !important;
			flex-direction: column-reverse;
		}
	}
}
```

## No FTP Access: The Next Best Thing

"Forget using FTP or cPanel! Use our [wp file manager](https://filemanagerpro.io/) plugin to take full control of your Wordpress website."

## Rescanning A Site With WPML

Thanks to YB for this tip.

To rescan a site that has WPML in it, go to your dashboard, and find Localisation du thème et des plugins under WPML. Then do this:

![Rescannign WPML content](./img/rescan.png)

## Clearing WPML Cache

- You can flush WPML cache in WPML > Support > Troubleshooting (dépannage) > "Clear the cache in WPML" [https://wpml.org/forums/topic/wpml-cache-2/]

## Clearing WordPress Cache

This is either done with an FTP access or with a plug-in. WP Super Cache is a free plug-in.

With WP Super Cache:

1. Go to Settings.
1. Go to WP Super Cache.
1. Click on Delete Cache.

## Translation function with the WPML extension in WordPress

	<?= __('Demander une soumission', 'domain-name') ?>

## Translation without WPML in WordPress

	<?php if (ICL_LANGUAGE_CODE == "fr"): ?>
	
		<input name="NOM" type="text" placeholder="Prénom et nom" required>
		<input name="EMAIL" type="email" placeholder="Courriel" required>
		<button type="submit" class="button expanded">Je m'abonne</button>

	<?php else: ?>

		<input name="NOM" type="text" placeholder="First & last name" required>
		<input name="EMAIL" type="email" placeholder="Email" required>
		<button type="submit" class="button expanded">SIGN ME UP</button>

	<?php endif; ?>

## Creating A Sticky Menu With Elementor

If you have a top bar and a navigation menu on your site, the best is to make the navigaton menu sticky, but not the top bar. Otherwise the top bar and the navigation menu are going to overlap.

If you need to change the background color for your sticky menu, use this:

	.bdt-sticky-fixed {
			background-color: black;
	}

You can do this all in Elementor, no need to create special JS here.

## A Quick and Dirty Way of Injecting JS into WordPress

Thanks to [hmwebdev](https://github.com/hmwebdev) for this tip.

1. Go to functions.php
2. Create an add_action() function with two parameters
3. The first one is where you want to inject your code, for instance wp_head
4. The second one is where the name of your JS function
5. Mettre ta function JS tout simplement function nom() { ouvre une balise php et a l'intérieure de celle-ci une balise script html avec ton code js }

## Replacing an English Hard-Coded String and Translating it to Another Language

Thanks to [hmwebdev](https://github.com/hmwebdev) for this tip.

The extension I use for JS is **Simple Custom CSS and JS**.

1. Make sure the code is injected in your , not your header
2. Write something like:

	document.body.innerHTML = document.body.innerHTML.replace(/All Projects/g, 'Tous les projects');

## Dynamically Translating a Facebook Chat Plugin Depending on the Language of a Site

The procedure belows assumes the browser language looks like fr-FR or en-US and is not just a two-letter code.

1. Create a new line under **(function(d, s, id) {** and type:

		const currLang = document.documentElement.lang;
		const currLangLowDash = currLang.replace("-", "_")

2. Change the line that starts with **js.src** to this:

        js.src = `https://connect.facebook.net/${currLangLowDash}/sdk/xfbml.customerchat.js`;

3. Remove these lines or anything that ressembles them. This way, the logged-in and logged-out messages will vary depending on the language of the site instead of always staying the same.

        logged_in_greeting=“Bonjour, comment pouvons-nous vous aider? :parasol:”

        logged_out_greeting=“Bonjour, comment pouvons-nous vous aider? :parasol:“>

## Adding a CAPTCHA to a form

Assuming you already have Contact Form 7 installed on your site, the steps are pretty straightforward:

1. Install the Really Simple CAPTCHA extension on your Web site.
2. Go to your pre-existing form where you want to add the CAPTCHA.
3. Add these shortcodes:

	[captchac captcha-1] [captchar captcha-1]

4. The team behind Contact Form 7 recommends reCAPTCHA instead of Really Simple CAPTCHA, but the latter seems to work just fine as of 2021-08-30.

## Downloading a site

To download a site or part of it and browse to the folders, use the **WP File Manager** extension.