Based on [CodeTime's YouTube tutorial](https://www.youtube.com/watch?v=PWK20gHXJBI&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=2).

# Using ACF with a repeater

## [Planning a Nested Repeater](https://www.youtube.com/watch?v=0hAC3aQkWA0&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=12)

"We're going to plan out a menu that makes use of nested repeater fields using the Advanced Custum Field Pro plug-in for WordPress. Like the last one, let's start by outlining what our custom field will look like." - Pete Medina

- Menu
    - Menu Section (Repeater)
        - Menu Section Title (Text)*
        - Menu Section Description (Text Area)
        - Menu Item (Repeater)*
            - Meal Title (Text)*
            - Meal Description (Text Area)*
            - Meal Price (Number)*

## [Creating Nested Repeater Fields](https://www.youtube.com/watch?v=kh9pgYdg7qg&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=12)

- Go to Dashboard ===> Custom Fields ===> Add New.
- Enter title here: Menu.
- Click on Add Field.
- Field Label: Menu Section.
- Field Type: Repeater.
- Not required.
    - Sub Fields ===> Add field.
        - Field Name: Menu Section Title.
        - Required.
        - Close Field.
    - Sub Fields ===> Add field.
        - Field Name: Menu Description.
        - Field Type: Text Area.
        - Not required.
        - Close Field.
    - Sub Fields ===> Add field.
        - Field Name: Menu Item.
        - Field Type: Repeater.
        - Required.
        - Layout: Row.
        - Button Label: Add Menu Item.
        - Sub Fields: ===> Add field.
            - Field Name: Menu Title.
            - Required.
            - Close Field.
        - Sub Fields: ===> Add field.
            - Field Name: Meal Description.
            - Field Type: Text Area.
            - Required.
            - Close Field.
        - Sub Fields: ===> Add field.
            - Field Name: Meal Price.
            - Field Type: Number.
            - Required.
            - Close Field.
        - Close Field.
- Layout: Row.
- Button Label: Add Menu Section.
- Close Field.
- Publish.

## [Creating a Page Template for Nested Repeater Fields](https://www.youtube.com/watch?v=V81eifHy0sM&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=13)

- Go to your child theme folder. It should look like this: /home/[your-username]/Local Sites/acf20210727/app/public/wp-content/themes/twentyseventeen-child/template-parts.
- Copy the page.php file.
- Paste it in the same folder.
- Rename the new file page-menu.php.
- Find this line:

        Template Name: Events
- Change the line like so:

        Template Name: Menu

- Find this line:

        get_template_part( 'template-parts/page/content', 'events' );

- Change the line like so:

        get_template_part( 'template-parts/page/content', 'menu' );

- Go to /home/[your-username]/Local Sites/acf20210727/app/public/wp-content/themes/twentyseventeen-child/template-parts/.
- Copy and rename content-events.php to content-menu.php.
- Delete everything between those lines:

        <?php the_content(); ?>

        <!-- delete everything here -->
        
        <?php
            wp_link_pages(.
- Go to Dashboard ===> Pages ===> Add New.
- Create a "Menu" page.
- Select the Menu template.
- Hit the blue Publish button.
- At this point, it's normal that the custom fields don't show up yet.
- Go to Dashboard ===> Custom Fields ===> Field Groups.
- Click Edit under Menu.
- Rules: Page Template is equal to Menu.
- Hit the blue Update button.
- Now your Menu custom field will appear only when your page template is set to Menu.

## [Populating Nested Repeater Fields](https://www.youtube.com/watch?v=NvowpqON2AU&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=14)

- Go to Dashboard ===> Pages ===> All Pages.
- Menu ===> Edit Page.
- The Menu template should be the one selected.
- Scroll down and click Add Menu.
    - Menu Section Title: Breakfast
    - Menu Section Description: We serve a really awesome breakfast. Try our French toast.
    - Click on Add Menu Item.
        - Meal Title: French Toast.
        - Meal Description: Our world-famous French toast is created using our own home-baked bread.
        - Meal Price: 8.
    - Click on Add Menu Item.
        - Meal Title: Fried Eggs.
        - Meal Description: Like eggs? Try our fried eggs over easy.
        - Meal Price: 6.
    - Click on Add Menu Item.
        - Meal Title: Cereals.
        - Meal Description: We serve a variety of cereals including hot ones like oatmeal and cold ones like Corn Chex.
        - Meal Price: 4.
    - You can drag-and-drop items to reorder them.
- Scroll down and click Add Menu Section.
    - Menu Section Title: Lunch.
    - Menu Section Description: [Left blank].
    - Click on Add Menu Item.
        - Menu Title: Hot Dogs.
        - Meal Description: We cook our hot dogs over an open flame.
        - Menu Price: 4.
    - Click on Add Menu Item.
        - Menu Title: Hamburgers.
        - Meal Description: We cook our burgers over an open flame as well.
        - Menu Price: 8.
    - Click on Add Menu Item.
        - Menu Title: Salad.
        - Meal Description: Enjoy a nice, refreshing, spring green salad.
        - Menu Price: 2.
    - Menu Section Title: Dinner.
    - Menu Section Description: [Left blank].
    - Click on Add Menu Item.
        - Menu Title: Tortilla Soup.
        - Meal Description: Try out our famous tortilla soup. Perfect for cold weather.
        - Menu Price: 6.
    - Click on Add Menu Item.
        - Menu Title: Steak.
        - Meal Description: Try our grass-fed steak.
        - Menu Price: 14.
    - Click on Add Menu Item.
        - Menu Title: Salmon.
        - Meal Description: Enjoy some fresh salmon caught this morning.
        - Menu Price: 20.
- Hit Update.

## [Outputting Nested Repeater Fields](https://www.youtube.com/watch?v=W03efCo9_Lo&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=15)

- Go to https://www.advancedcustomfields.com/resources/repeater/.
- Copy the code for the basic loop.
- Open content-menu.php.
- Copy and paste the code just below the_content().
- Add a closing PHP tag like so:

        while( have_rows('repeater_field_name') ) : the_row(); ?>

- The final result of your content-menu.php file should look something like this:

        <?php
        /**
        * Template part for displaying page content in page.php
        *
        * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
        *
        * @package WordPress
        * @subpackage Twenty_Seventeen
        * @since Twenty Seventeen 1.0
        * @version 1.0
        */

        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <?php twentyseventeen_edit_link( get_the_ID() ); ?>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php the_content(); ?>

                <?php

                    <section class="menu__section">

                        // Check rows exists.
                        if( have_rows('menu_section') ):

                            // Loop through rows.
                            while( have_rows('menu_section') ) : the_row(); ?>

                                <h2 class="entry-title">
                                    <?php the_sub_field('menu_section_title'); ?>
                                </h2>

                                <?php if (get_sub_field("menu_section_description")): ?>
                                    <p>
                                        <?php the_sub_field("menu_section_description"); ?>
                                    </p>
                                <?php endif; ?>

                                <?php

                                    // Check rows exists.
                                    if( have_rows('menu_item') ):

                                        // Loop through rows.
                                        while( have_rows('menu_item') ) : the_row(); ?>

                                            <h3>
                                                <?php the_sub_field("menu_title"); ?>
                                            </h3>

                                            <p>
                                                <?php the_sub_field("meal_description"); ?>
                                            </p>

                                            <p>
                                                $<?php the_sub_field("meal_price"); ?>
                                            </p>

                                <?php
                                        // End loop.
                                        endwhile;

                                    // No value.
                                    else :
                                        // Do something...
                                    endif;

                                ?>

                    </section>

                <?php
                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;

                ?>

                <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                            'after'  => '</div>',
                        )
                    );
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->


## [Styling Nested Repeater Fields](https://www.youtube.com/watch?v=9q5US4kZqTA&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=16)

- Go to the style.css file which is associated the project child theme (your path should look like this: /home/[your-username]/Local Sites/[your-site-name]/app/public/wp-content/themes/twentyseventeen-child/template-parts).
- Give your menu the style that you want it to have.

## [Adding Nested Repeater Fields to the Homepage](https://www.youtube.com/watch?v=9x2sG2lBJrc&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=17)

Only applicable to the Twenty Seventeen theme. Skipping this part...

## [Adding Nested Repeater Fields to the Homepage](https://www.youtube.com/watch?v=9x2sG2lBJrc&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=17)

Only applicable to the Twenty Seventeen theme. Skipping this part...