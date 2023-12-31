=== Contact Form 7 Image Captcha ===
Contributors: KTC_88
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6ZBN6VSE6UM4A
Tags: contact form 7, spam, captcha
Requires at least: 4.7
Requires PHP: 7.0
Tested up to: 5.7
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a clean image captcha to Contact Form 7

== Description ==

Add an SVG image captcha and honeypot to your contact form 7 form. This CAPTCHA is GDPR compliant and becuase the images are inline SVG's, this plugin will not slow down your site with additional header requests like Google's ReCAPTCHA.

= Directions [PLEASE READ] =
Add the shortcode [cf7ic] to the form editor where you want the captcha to appear.

As of version 3.2.0, **Contact Form 7 Conditional Fields** is now fully supported! You no longer need to add `[hidden kc_captcha "kc_human"]` to your forms that do not include the [cf7ic] shortcode.

All versions in 3.1.#, require that you add `[hidden kc_captcha "kc_human"]` to the form if that form does not include the [cf7ic] shortcode, otherwise those forms **will not submit**.

You can hide the CAPTCHA until a user interacts with the form, by adding "toggle" to the shortcode.
`[cf7ic "toggle"]`

= IMPORTANT 3.0 NOTICE =
Version 3.0.0 uses SVG's instead of font icons, I have tested the changes to make sure the update would not cause any noticeable changes, however if you notice any issues, please let me know. That said, for those who have added their own custom CSS styling, you may need to update your css to account for the icon change.

Looking for a version for Gravity forms?
We also have a **<a href="http://kccomputing.net/downloads/gravity-forms-image-captcha/" target="_blank">Gravity Forms Image Captcha</a>** which is only available at our <a href="http://kccomputing.net/store/" target="_blank">online store</a>.

= Supported Languages =
* Bulgarian    (Thanks Plamen Petkov)
* Croatian     (Thanks @peraburek)
* French       (Thanks deuns26)
* German       (Thanks  Te-Punkt & bkmh)
* Italian      (Thanks Mauro Giuliani)
* Persian      (Thanks Ava Darabi)
* Spanish (ES) (Thanks Erick Carbo)
* Spanish (MX)
* Russian
* Dutch
* Portuguese (Portugal)

= Like what you see? =
Please take the time to leave a review.

= PRO Demo =
Check out our <a href="http://kccomputing.net/contact-me/" target="_blank">live demo</a>.

= Go Pro! =
Please note that the free version of this plugin will NOT stop all spam from getting though, there is still a small chance that a bot will randomly guess the correct icon between the three icon options. The Pro version of this plugin includes additioal options to improve spam protection to stop 99.9% of all spam and also gives you more control over the look and style of the CAPTCHA. 

Check out our <a href="http://kccomputing.net/downloads/contact-form-7-image-captcha-pro/">pro version</a> for more details.

**PRO Features:**

* GDPR compliant
* ADA/a11y compliant
* Gravity Forms support
* WooCommerce support for login, registration and checkout forms (optional)
* WordPress login/registration form support (optional)
* Customize the look of the WordPress login/registration screen and form
* CAPTCHA refreshes on submit to make it harder for automated spammers
* Reverse honeypot which checks if you are human through form engagement
* Stronger security with hashed answers to make it harder for automated spammers to read the answers
* Add additional icons to increase the chances of a random guess getting through. You can increase it from a 1 and 3 chance all the way up to a 1 in 10 chance! 
* Select which icons you wish to use
* Add additional icons from Font Awesome 4.7
* Customize the icon titles
* Change the captcha message
* Change the captcha errors
* Change the box color and border
* Change font and icon color and size independently
* Change the selected icon appearance
* Change where the icons appear
* Change the box from full width to content width

<a href="http://kccomputing.net/downloads/contact-form-7-image-captcha-pro/">Go Pro!</a>

== Installation ==

1. Upload contents to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `[cf7ic]` to your contact form 7 forms

== Frequently Asked Questions ==

= How do you add the image captcha to the forms? =

Simply add this shortcode `[cf7ic]` to your contact form

= How do you use the toggle feature? =

To make it so the CAPTCHA only shows when the form is being filled out, add "toggle" to the shortcode `[cf7ic "toggle"]` in your contact form.

= Toggle is not working =

The most likely reason the toggle is not working is because the double quotes around the word toggle has been changed to "smart quotes", meaning that they are opening and closing quotation marks and not the verticle lines. 

To fix, simply delete the quotes and re-add them with your keyboard - do not copy and paste.

== Screenshots ==

1. screenshot-1.png
2. screenshot-2.png
3. Pro version settings page

== Changelog ==
= 3.2.2 [04/15/2021] =
* Fixed double tap and partial border iPhone bug

= 3.2.1 [08/11/2020] =
* Added Croatian translation

= 3.2.0 [08/11/2020] =
* NEW: Full compatability for “Contact Form 7 Conditional Fields” by Jules Colle. Conditional Fields had been an ongoing issue for this plugin for a while now due to how the Conditional Fields plugin performed form validations, however I was finally able to come up with a solution that will allow this plugin to function normally with Conditional Fields installed. You no longer need to include [hidden kc_captcha "kc_human"] to your forms if the [cf7ic] shortcode is not included.

= 3.1.4 =
* Updated German (de) translation

= 3.1.3 =
* Updated Spanish (es) MO file

= 3.1.2 =
* Updated toggle so only the CAPTCHA on the form focused on will show. Previously if multiple forms with toggle were on a page, all of the CAPTCHA's would show.
* Updated toggle to hide CAPTCHA again once form has been successfully submitted.
* Added Dutch translation
* Added Portuguese (Portugal) translation

= 3.1.1 =
* Added additional css to prevent themes from changing the layout of the icons in the CAPTCHA

= 3.1.0 =
* Fixed issue where you needed to add `[hidden kc_captcha "kc_human"]` to forms you Did NOT want the CAPTCHA to be on. You now ONLY need to add the hidden field to your forms with no CAPTCHA, IF you have Contact Form 7 Conditional Fields installed.

= 3.0.3 =
* Fixed use of depricated WPCF7_Shortcode in favor or WPCF7_FormTag function
* Updated readme file to bring more attention to adding the hidden field to forms you DO NOT want the CAPTCHA on.

= 3.0.2 =
* Added width and height to inline SVG to account for sizing issues some users have experienced

= 3.0.1 =
* Updated stylesheet version number to help clear old stylesheet from cache

= 3.0.0 =
* Icons have been changed to SVG's to help fix font loading issues on some sites
* Italian language file has been updated to fix "heart" entry - thanks valesilve
* Improved inclusion of JavaScript when toggle is active using wp_footer
* Made CAPTCHA keyboard accessible

= 2.4.7 =
* Added Russian translation

= 2.4.6 =
* Now compatible with "Smart Grid-Layout Design for Contact Form 7" by Aurovrata V.

= 2.4.5 =
* Added fallback styling in the event a theme or plugin changes the icons from a webfont to SVG's

= 2.4.4 =
* Now compatible with "Contact Form 7 Conditional Fields" by Jules Colle

= 2.4.3 =
* Made additional fix to spacing issue with German language

= 2.4.2 =
* Fixed spacing issue with German language

= 2.4.1 =
* Fixed PHP notice "Undefined offset: 0"
* Fixed PHP notice for another deprecated tag

= 2.4 =
* Added the ability to hide the CAPTCHA until the user interacts with the form, simply add "toggle" to the shortcode: [cf7ic "toggle"]
* Fixed deprecation notice “wpcf7_add_shortcode is deprecated since Contact Form 7 version 4.6! Use wpcf7_add_form_tag instead.”

= 2.3 =
* Updated FontAwesome library to version 4.7
* Fixed use of depricated wpcf7_add_shortcode in favor or wpcf7_add_form_tag function
* Added new toggle attribute (optional) [cf7ic "toggle"] which hides CAPTCHA until user interacts with the form

= 2.3 =
* Added code that allows me to add custom update messages in preparation for a future release that will make this plugin require Contact Form 7 version 4.6 to run due to CF7 making WPCF7_Shortcode and wpcf7_add_shortcode() deprecated, the replacement function and class are not supported by older versions of CF7.
* Updated text domain to meet new requirements for internationalization

= 2.2 =
* Removed unnecessary code that checked if image captcha existed in the Form
* Added Italian translation (Thanks Mauro Giuliani)
* Added Persian translation (Thanks Ava Darabi)
* Added Spanish (ES) translation (Thanks Erick Carbo)

= 2.1 =
* Added a tag generator button to the contact form 7 form controls so you do not have to manually type in the shortcode into the form. The pro version will eventually include the image captcha styling options.

= 2.0 =
* Refactored code
* Improved method to include style sheet so its only included when plugin is in use.
* Fixed validation message, you will now see "Please select an icon." when icon is not selected on submit and "Please select the correct icon." when the wrong icon was selected on submit.

= 1.5 =
* Added Spanish (MX) translation

= 1.4 =
* Updated German translation (Thanks bkmh)
* Added pro plugin details and link

= 1.3 =
* Added Bulgarian translation (Thanks Plamen Petkov)

= 1.2 =
* Improved German translation (Thanks Te-Punkt)

= 1.1 =
* Updated files and folder name
* Added German translation
* Added French translation (Thanks deuns26)

= 1.0 =
* Initial Release
