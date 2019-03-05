# Backdrop-Custom-Login-Pages
Create custom login pages for Backdrop CMS alá Joomla and Wordpress

## Setup
1. Upload the Login layout.
2. Import the four displays via the Configuration Management import (/admin/config/development/configuration/single). You'll need to import each one separately. Just open the text file and copy/paste the text as is.
3. Upload the form placeholder module and enable.
4. Clear the site cache

## Configuration
The four displays should pick up the login layout. Two blocks are provided by default. The Header block in the Header region is set to use your theme's logo. You can remove this block and add your own custom block with your own content should you wish.

The Main Content region has the Main Page Content block enabled by default. Do not remove this otherwise the forms will not appear.

The system Tabs navigation does not appear in this layout and has been replaced with links, which have been hard-coded into the footer of the Login layout.

The Login layout contains CSS which should give you some basic styling. Remember, the login pages use your theme's CSS so some of the supplied styles may not be required. You can edit the CSS as required, or even delete the file. This stylesheet uses Fontawesome for the icons on the input fields, but you can change this if required.

The CSS is set to hide labels within the forms, in preference of using HTML5 placeholders in the form inputs. These placeholders are not part of core, so to set them you need to use the Form Placeholder module. 

### Form Placeholder Module
To configure, visit the Form Placeholder settings page (/admin/config/user-interface/form-placeholder). In the Visibility settings field paste the following:

`#user-login #edit-name`\
`#user-login #edit-pass`\
`#user-register-form #edit-name`\
`#user-register-form #edit-mail`\
`#user-pass #edit-name`\
`#user-pass-reset-form #edit-pass-pass1`\
`#user-pass-reset-form #edit-pass-pass2`

Set the Required Field Marker to whatever suits you best, the recommended setting is "Instead of star append text "(required)" to placeholder".

### Summary
That's it, you're done! Please feel free to play around with any of the layout, display or CSS to achieve the look you need.
