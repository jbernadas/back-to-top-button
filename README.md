# back2top</h1>

This Drupal 8 module creates a back-to-top button on the bottom-right corner of your website. The button will initially be invisible, but once the viewer scrolls down the button will appear. The webpage will scroll back up slowly once the button is clicked. This comes in handy especially when you have a very long webpage, to keep users from doing the tedious task of having to scroll all the way back up using their mouse scroll button.

To use this module, download or clone it to your modules folder. 

<pre>git clone git@github.com:jbernadas/back-to-top.git</pre>

Activate it by going to Admin>Modules page of your Drupal site. Once activated the 'Back-to-Top' block will now be available in Admin>Structure>Block. Simply find the the lowest region of your template, which is usually the Footer region. Click the 'Place block' button and find the 'Back-to-top' block among the listed selection.

What this module does is it adds a new div to your website with an i.d. of 'toTop'. You can add custom styling to the button by accessing #toTop in your CSS stylesheet. To customize it you may need to add an '!important' rule  (without quoutes) next to your CSS attribute to override the modules default theme. For example, to change the button's color you need to create a new color rule for the #toTop i.d. in your templates css stylesheet, then add '!important' at the end to make sure it overrides all other CSS rules.

Thanks for reading this!
