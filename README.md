# Aide-Mémoire on ACF and Elementor in WordPress

This is an aide-mémoire which is meant to help me remember how to use ACF (Advanced Custom Fields) and CPT UI with Elementor Pro in WordPress

## A Word of Thanks

I'd like to thank WPTuts for his YouTube tutorials named [Advanced Custom Fields Pro & Elementor Pro - Real Estate Website](https://www.youtube.com/watch?v=HGs6MvHXh3w) and [WordPress Portfolio Page Tutorial with ACF & Anywhere Elementor Pro
](https://www.youtube.com/watch?v=bZKnHQ_2Zos) and for the great content he provides. This aide-mémoire/cheat sheet is based on his tutorials.

I encourage you to check out [WPTuts's on Youtube](https://www.youtube.com/user/ipixeltutorials).

___

## Your Plugins and Theme

This aide-mémoire assumes you have the following plugins installed on your WordPress web site:

- Advanced Custom Fields PRO
    - You need the pro version for the ability to use the gallery option.
- Custom Post Type UI
    - Free plugin that works brilliantly with Advanced Custom Fields. Allows you to create your own post types, which you can then create inside of.
- Elementor Pro
- Hello theme

## Step 1: Creating a Custom Post Type

Posts are just like a blog post. In this tutorial, you create your own post type called Properties and select the fields that come with it.

1. Go to CPT UI in the left-hand menu
2. Click Add/Edit Post Types
3. Type **property** in the Post Type Slug field
4. Fill out the Plural and Singular Label fields
5. Select **Hierarchical** and set it to true so you can group things by flats and houses and so on. It makes it easier to organize things.
6. Set Has **Archive** to true
7. Leave the rest of the options as they are
8. You can come later if you want to change something.
9. Choose a dash icon so your post type has an icon in the dashboard
10. Save the post type
11. The post type should now show up in the dashboard

## Step 2: Creating a Taxonomy

A taxonomy is what makes it possibly to group posts by category, etc.

1. In the Dashboard, go to CPT UI, and then Add/Edit Taxonomies
2. Type **property_type** in the Taxonomy Slug
3. Type **Property Types** in the Plural Label field
4. Type **Property Type** in the Singular Label field
5. Select **Property** in the Attach to Post Type box
6. Scroll down to the Settings and set Hierarchical to **True**
7. Set **Show in quick/bulk edit panel** to True
8. Scroll back up and click on Add Taxonomy
9. Now if you hover the Property option in the dashboard, you'll see a new option called Property Type

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
3. Click on the Add Field button
4. Type **Location** in the Field Label box
5. Select **Text** in the Field type menu
6. Set the **Required?** option to Yes
7. Add as many fields as you want. For instance:
    - Price (the prepend or append fields should be used for the dollar sign)
    - Features (in the Instructions, you could type "Please select all that applies" so people know what a checkbox is for)
    - Property Gallery (with an image gallery, you can choose if you upload your images to the post [Uploaded to post] or to the Media Library [All])
    - Bedrooms
    - Garage
8. Under Location (near the end of the page), change **Post Type is equal to Post** to **Post Type is equal to Property**.

Remarks:
- If you choose the **Checkbox** option under Field Type, you'll have the option to add the choices associated with the checkboxes.

## Step 5

1. Populate your database with content. (Fill in the form a few times.)
2. Don't forget to use a Featured Image

## Step 6

Creating a Portfolio.

1. Create a new page called **Properties for Sale**
2. Create a line and add a **Portfolio** element to it
3. If the portfolio doesn't take up most of the width, edit the page, but not with Elementor. Choose an option such as Elementor Full Width.
4. Change the current **Query** to **Properties**
5. Enable the Filter Bar with Property Types
6. Under Layout, choose a resolution of Medium Large - 768 * 0
7. Go to the Style tab
8. Set the column gap to 10
9. Set the row gap to 10
10. Still under the Style tab, set the Item overlay to black
11. Set the background to an opacity of 0.41
12. Set the typography weight to 300
13. Set the typography of the Filter Bar to 400
14. Transform the Filter Bar typography to uppercase

## Step 7

Creating a Template for each individual page.

1. Go to the **Templates** tab, in the left-hand WP dashboard
2. Click on **Theme Builder**
3. Go to the Loop tab
4. Click on Add New
5. In the **Choose Template** modal window, type/select:
    - Single
    - Default Single Property
6. Click Create Template
7. Now you can close the modal window. You should now be in the Elementor editor.
8. Using the left-hand panel, add a Featured Image to the page
9. Click Publish (green button)
10. Create a condition for the template where you associate Property with the Default Single Property
11. Now you should see what you just created on your Web site!

## Step 8

Adding more content to the template.

1. Select a Text Editor element and drag and drop to the template
2. Click on the Dynamic Tags tab (looks like a database icon)
3. Choose ACF Field option
4. Click on the wrench icon
5. Select field
6. In Advanced, you might want to write something before or after your element such as "Location: "
7. Voilà!

