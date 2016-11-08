<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WAF
 */

?>

<?php wp_footer(); ?>

<footer class="row">
  <p>&copy; <?php echo date('Y'); ?> Janis Wade Wellness. All rights reserved.</p>
  <div class="footer_images">
    <a href="https://www.facebook.com/janiswadewellness/"><img alt="Facebook icon" src="<?php echo get_bloginfo('template_url') ?>/images/fb.png"/></a>
    <a href="mailto:janis@janiswadewelless.com"><img alt="Email icon" src="<?php echo get_bloginfo('template_url') ?>/images/email.png"/></a>
    <a id="footer_phone_target" href="tel:781-223-7128"><img alt="Phone icon" src="<?php echo get_bloginfo('template_url') ?>/images/phone.png"/><div id="footer_phone_show">781-223-7128</div></a>

    </div>
  </div>
</footer>

</body>
</html>
