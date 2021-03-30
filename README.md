# Aide-Mémoire on ACF and Elementor in WordPress

This is an aide-mémoire which is meant to help me remember how to use ACF (Advanced Custom Fields) and CPT UI with Elementor Pro in WordPress

## A Word of Thanks

I'd like to thank WPTuts for his YouTube tutorial named [Advanced Custom Fields Pro & Elementor Pro - Real Estate Website](https://www.youtube.com/watch?v=HGs6MvHXh3w) and for the great content he provides. This aide-mémoire/cheat sheet is based on his tutorial.

I encourage you to check out [WPTuts's on Youtube](https://www.youtube.com/user/ipixeltutorials).

___

## Your Plugins and Theme

This aide-mémoire assumes you have the following plugins installed on your WordPress web site:

- Advanced Custom Fields PRO
    - You need the pro version for the ability to use the gallery option.
- Custom Post Type UI
    - Free plugin that works brilliantly with Advanced Custom Fields. Allows you to create your own post types, which you can then create inside of.
- Ele Custom Skin
    - This is for Elementor and it allows you to create custom loops. Gives you more flexibility than with the Elementor way of listing out the different post types. 
- Elementor Pro
- Hello theme

## Step 1: Creating a Custom Post Type

Posts are just like a blog post. In this tutorial, you create your own post type called Properties and select the fields that come with it.

1. Go to CPT UI in the left-hand menu
2. Click Add/Edit Post Types
3. Type **property** in the Post Type Slug field
4. Fill out the Plural and Singular Label fields
5. Select Hierarchical and set it to true so you can group things by flats and houses and so on. It makes it easier to organize things.
6. Set Has Archive to true
7. Leave the rest of the options as they are
8. You can come later if you want to change something.
9. Choose a dash icon so your post type has an icon in the dashboard
10. Save the post type
11. The post type should now show up in the dashboard

## Step 2: Creating a Taxonomy

A taxonomy is what makes it possibly to group posts by category, etc.

1. Type **property_type** in the Taxonomy Slug
2. Type **Property Types** in the Plural Label field
3. Type **Property Type** in the Singular Label field
4. Select **Property** in the Attach to Post Type box
5. Scroll down to the Settings and set Hierarchical to **True**
6. Scroll back up and click on Add Taxonomy
7. Now if you hover the Property option in the dashboard, you'll see a new option called Property Type

## Step 3: Creating a Property Type

1. In the dashboard, under Properties, click on Property Types
2. Fill out the Name field with the string **House**
3. Click Add New Property Type
4. Take note that the slug was added automatically
5. Repeat again with **Apartment**

## Step 4: Creating a Custom Field

Without custom fields, you have a pretty basic set-up if you go to **Properties** and click **Add New**. This is where the custom fields come in.

1. In the dashboard, under Custom Fields, select Add New
2. Give the title **Property** to the field group
3. Add New button
4. Type **Location** in the Field Label box
5. Select **Text** in the Field type menu
6. Set the Required? option to Yes
7. Add as many fields as you want. For instance:
    - Price
    - Features
    - Property Gallery
    - Bedrooms
    - Garage
    - Number of cars
8. Under Location, change **Post Type is equal to Post** to **Post Type is equal to Property**.

Remarks:
- The prepend or append fields should be used for the dollar sign.
- If you choose the **Checkbox** option under Field Type, you'll have the option to add the choices associated with the checkboxes.
- In the Instructions, you could type "Please select all that applies" so people know what a checkbox is for.
- To do basic stuff with a Image Gallery
- With an image gallery, you can choose if you upload your images to the post (Uploaded to post) or to the Media Library (All)


