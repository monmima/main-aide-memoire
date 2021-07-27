Based on [CodeTime's YouTube tutorial](https://www.youtube.com/watch?v=PWK20gHXJBI&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=2).

## [First Steps](https://www.youtube.com/watch?v=CoRlBb-0X-4&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=1)

- Create local site with WP Local.
- Install Advanced Custom Field Pro.

## [Creating the fields](https://www.youtube.com/watch?v=KRdi_oNO6Zc&list=PLylMDDjFIp1C1s6PKwzmd-sm2G__ZhGWf&index=3)

- Go to Dasboard ===> ACF ===> Add New.
- In the field "Add Title", type "Events" (plural).
- Add a field.
    - Call the field "Event" (singular).
    - The Field Type should be "Repeater".
    - The free version of ACF won't have a Repeater option for you to play with. This is why you absolutely need ACF Pro.
    - Required.
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

## Creating a page template for our fields

- 