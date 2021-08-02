Based on [CodeTime's YouTube tutorial](https://www.youtube.com/watch?v=PWK20gHXJBI&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=2).

## [First Steps](https://www.youtube.com/watch?v=CoRlBb-0X-4&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=1)

- Create local site with WP Local.
- Install Advanced Custom Field Pro.
- **Install Classic Editor if you don't like the look of the page editor. Highly recommended.**

## [Creating the fields](https://www.youtube.com/watch?v=KRdi_oNO6Zc&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=3)

- Go to Dasboard ===> ACF ===> Add New.
- In the field "Add Title", type "Events" (plural).
- Add a field.
    - Call the field "Event" (singular).
    - The Field Type should be "Repeater".
    - The free version of ACF won't have a Repeater option for you to play with. This is why you absolutely need ACF Pro.
    - **Not required or else everytime you try and edit the events page it's going to force you to add an event.**
- **Before going any further, watch out! You are going to add subfields to the Event field under "Sub Fields" from now on.**
- Add a field.
    - Field Label: Event Title.
    - Required.
    - Close field.
- Add a field.
    - Field Label: "Event Image".
    - Field Type: Image.
    - Required.
    - Minimum image size should be 360 by 360. Leave the file size blank.
    - Maximum image size should be 360 by 360. The file size should be 2 Mb at most.
    - Allowed file types: jpg, jpeg, png
    - Close field.
- Add a field.
    - Field Label: Event Date.
    - Field Type: Date Picker.
    - Required.
    - Display Format: Select what you like best.
    - Return Format: Select the same one.
    - Close field.
- Add a field.
    - Field Label: Event Start Time.
    - Field Type: Time Picker.
    - Required.
    - Close field.
- Add a field.
    - Field Label: Event End Time.
    - Field Type: Time Picker.
    - **Not required in case there is no set end time.**
    - Close field.
- Add a field.
    - Field Label: Event Description.
    - Field Type: Text Area.
    - Required.
    - Close field.
- Add a field.
    - Field Label: Event RSVP Link or Email.
    - Field Type: Radio Button.
    - Instrutions: How do people RSVP to your event? Is it through an email address or a link?
    - Required.
    - Choices: Email / Link.
    - Layout: Horizontal.
    - Close field.
- Add a field.
    - Field Label: Event RSVP Link.
    - Field Type: Url.
    - Required.
    - Conditional Logic: Yes.
    - Show this field if: Event RSVP Link or Email value is equal to Link.
    - Close field.
- Add a field.
    - Field Label: Event RSVP Email.
    - Field Type: Email.
    - Required.
    - Conditional Logic: Yes.
    - Show this field if: Event RSVP Link or Email value is equal to Email.
    - Close field.
- Go under the list of fields you have created.
- Button Label: change "Add Row" to "Add Event" since it's more relevent to the context.
- Layout: Row.
- Location: Show this field if Page Template is equal to Default Template.
- The Location is going to change later on when we replace the Default Template with the Event Template.
- Hit Publish (blue button) or Update (same button with a different label if you clicked it before this point).

##  Creating a child theme

The them CodeTime uses in his tutorial is Twenty Seventeen.

The method given in the tutorial by CodeTime doesn't work very well since a link he provides is dead and since the content of the page whose link is dead might be out of date too.

- Install Child Theme Configurator Theme.
- Go to Tools ===> Child Themes
- Select a theme from the drop-down menu.
- Tick the box next to "Copy Menus, Widgets and other Customizer Settings from the Parent Theme to the Child Theme:"
- Click Create Child Theme.
- Go to Appearance ===> Themes
- Activate the child theme.
- At the end of the process, you should have one new folder containing three files under /home/[username]]/Local Sites/[my-website-name]/app/public/wp-content/themes/. (This path assumes you are under Linux Mint).

## [Creating a page template for our fields](https://www.youtube.com/watch?v=HVPzbvRoiXk&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=5)

- Go to your parent theme folder.
- Copy the page.php file.
- Paste it into the child theme folder.
- Create a /template-parts folder in your child directory.
- Inside of /template-parts, create a page folder.
- Copy and paste content-page.php into the /template-parts folder.
- Open page.php file in VS Code.
- Select this:
```
    * The template for displaying all pages
    *
    * This is the template that displays all pages by default.
    * Please note that this is the WordPress construct of pages
    * and that other 'pages' on your WordPress site may use a
    * different template.
```
- Replace the above with this:
```
    * Template Name: Events
    * 
    * The template for displaying the events calendar
    *
    * This is the template that displays all pages by default.
    * Please note that this is the WordPress construct of pages
    * and that other 'pages' on your WordPress site may use a
    * different template.
```
- Select this:
```
get_template_part( 'template-parts/page/content', 'page' );
```
- Replace the above with this:
```
get_template_part( 'template-parts/page/content', 'events' );
```
- Rename content-page.php to content-events.php.
- **The following steps assume you have Classic Editor installed. If you're not sure what Classic Editor is go and have a look with an image search.**
- Go to Dashboard ===> Pages.
- Create a new page.
- Name the page Events.
- Assign Events as the default template for the page under Page Attributes.
- Update page. If you don't have the option, this might be for one of two reasons:
    1. Make sure you have Page Attributes selected under Screen Options (at the top of the edit page with the Classic Editor).
    2. You haven't followed the exacts steps above. So once again:
        ```
            * Template Name: Events
            * 
            * The template for displaying the events calendar
            *
            * This is the template that displays all pages by default.
            * Please note that this is the WordPress construct of pages
            * and that other 'pages' on your WordPress site may use a
            * different template.
        ```
        ```
        get_template_part( 'template-parts/page/content', 'events' );
        ```
- Go to Dashboard ===> Custom Fields ===> Events ===> Edit.
- Show this field group if: Page Template is equal to Events.
- Update page.
- Now, we'll make sure this works fine.
- Go to Pages ===> All Pages ===> Events ===> Edit.
- You should see the Events option at the bottom of the edit page. If you select the Default template, the event option should dissapear.

## [Populating our custom fields](https://www.youtube.com/watch?v=8hklJZjQu38&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=6)

- Go to Dashboard ===> Pages ===> Events.
- Click on Add Event.
- Create three new events.
- Once you're done, click "update".

## [Outputting Our Custom Fields with PHP](https://www.youtube.com/watch?v=I40YjcjjrSA&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=7)

- Go to content-event.php.
- Just below the_content() is where you want to insert your code.
- Select this:
```
    <?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                'after'  => '</div>',
            )
        );
    ?>
```
- Replace the content above with this:
```
    <?php the_content(); ?>



    <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                'after'  => '</div>',
            )
        );
    ?>
```
- Documentation is available at https://www.advancedcustomfields.com/resources.
- Search for "repeater" in the documentation and click on the link or go to https://www.advancedcustomfields.com/resources/repeater.
- Alternatively, use this instead as a starting point:
```
    <?php
        // Check rows exists.
        if( have_rows('event') ):

            // Loop through rows.
            while( have_rows('event') ) : the_row();

                the_sub_field('event_title');

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
    ?>
```
- Alternatively, use this for CodeTime's Tutorial:
```
    <?php
        // Start of CodeTime's Tutorial Code
        // Check rows exists.
        if( have_rows('event') ):

            // Loop through rows.
            while( have_rows('event') ) : the_row();
            
                if (get_sub_field("event_rsvp_link_or_email") == "Link") {
                    $rsvp_link = get_sub_field("event_rsvp_link");
                } else {
                    $rsvp_link = "mailto:".get_sub_field("event_rsvp_email");
                };
            
            ?>

            <h2 class="entry-title">
                <?php the_sub_field('event_title'); ?>
            </h2>

            <p>
                <?php the_sub_field('event_date'); ?> at
                <?php the_sub_field('event_start_time'); ?>

                <?php
                if (get_sub_field('event_end_time'))
                    {
                        echo ' until ';
                        the_sub_field('event_end_time');
                    }
                ?>
            </p>

            <p>
                <?php the_sub_field('event_descripton'); ?>
            </p>

            <p>
                <a href="<?php echo $rsvp_link; ?>" title="RSVP">RSVP</a>
            </p>

            <?php 
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
            echo "<p>There are currently no events planned.</p>";
        endif;

        // End of CodeTime's Tutorial Code
    ?>
```
- Place the code sample between the_content() and wp_link_pages().
- Make sure the new code sample ends with a closing php tag (**?>**).

## [Outputting Custom Field Images](https://www.youtube.com/watch?v=Ytkr9smEpQ0&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=8)

- Go to the documentation and find the image array code sample or go directly to this address: https://www.advancedcustomfields.com/resources/image/.
- Go to the description and find the image array example.
- Copy the code sample and adapt it to suit your needs.
- Alternatively, copy this code:
```
<?php 
    $image = get_sub_field('event_image');

    // echo "<pre>";
    // print_r($image);
    // echo "</pre>";

    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
```
- Paste your code just above the title.

## [Styling Our Custom Fields with CSS](https://www.youtube.com/watch?v=tsn3oVr9YtI&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=9)


To change the visual styling of your page, just use style.css and content-events.php.

## [Displaying Custom Fields on Your Homepage](https://www.youtube.com/watch?v=jBAwsI8H3j0&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=10)

Pete Medina (CodeTime) says  his video on this topic is very specific to the Twenty Seventeen WordPress theme. He also says that for someone not using Twenty Seventeen, this may not be applicable to you.

Indeed, I haven't been able to make this work even though I'm using Twenty Seventeen as my theme.

- Go to the parent folder for your theme to the temlate-parts folder. The path should look like this under Linux Mint: /home/[your-username]/Local Sites/acf20210727/app/public/wp-content/themes/twentyseventeen/template-parts/page/.
- Copy content-front-page-panels.php to the same folder in the child theme.
- Go to content-events.php.
- Copy this:
```
    <?php
        // Start of CodeTime's Tutorial Code
        // Check rows exists.
        if( have_rows('event') ):

            // Loop through rows.
            while( have_rows('event') ) : the_row();
            
                if (get_sub_field("event_rsvp_link_or_email") == "Link") {
                    $rsvp_link = get_sub_field("event_rsvp_link");
                } else {
                    $rsvp_link = "mailto:".get_sub_field("event_rsvp_email");
                };
            
            ?>

            <article class="event">

                <!-- start event__image --->
                <div class="event__image">
                    <?php
                        // show the image 
                        $image = get_sub_field('event_image');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <!-- end event__image --->

                <!-- start event__content --->
                <div class="event__content">
                    <h2 class="entry-title">
                        <?php the_sub_field('event_title'); ?>
                    </h2>

                    <p class="event__time">
                        <?php the_sub_field('event_date'); ?> at
                        <?php the_sub_field('event_start_time'); ?>

                        <?php
                        if (get_sub_field('event_end_time'))
                            {
                                echo ' until ';
                                the_sub_field('event_end_time');
                            }
                        ?>
                    </p>

                    <p>
                        <?php the_sub_field('event_descripton'); ?>
                    </p>

                    <p>
                        <a class="event__link" href="<?php echo $rsvp_link; ?>" title="RSVP">RSVP</a>
                    </p>
                </div>
                <!-- end event__content --->

            </article>

            <?php 
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
            echo "<p>There are currently no events planned.</p>";
        endif;

        // End of CodeTime's Tutorial Code
    ?>
```
- Copy the content into content-front-page-panels.php.

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