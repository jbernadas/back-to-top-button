This Drupal 8 module creates a back-to-top button on the bottom-right corner of your website. 

To use this module, download or clone it to your modules folder. 

<pre>git clone git@github.com:jbernadas/back-to-top.git</pre>

Activate it by going to Admin>Modules page of your Drupal site. Once activated the 'Back-to-Top' block will now be available in Admin>Structure>Block. Simply find the the lowest region of your template, which is usually the Footer region. Click the Place block button and find the 'Back-to-top' block among the listed selection.

This module adds a new div to your website with an i.d. of 'toTop'. You can add custom styling to the button by accessing the #toTop i.d. in your CSS stylesheet. To customize it you may need to add an '!important' rule next to your CSS attribute to override the modules default theme. For example, to change the button's color all you need to do is create a new color rule for the #toTop i.d. in your templates css stylesheet, then add '!important' (without quoutes).

