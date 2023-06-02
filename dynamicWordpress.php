<!-- Get dynamic text - Widgest: Top Full , Hero Canvas-->
	<!-- Output: IT offshore development company based in Cebu, Philippines
	HRIS System, Payroll System and Accounting System Provider in the Philippines. -->
    <?php if ( is_front_page() && is_home() ) : ?> 
	 <?php get_template_part( 'global-templates/hero' ); ?> 
<?php endif; ?>


<!-- Import the slider Plugin -->
<?php
  $slider_shortcode = '[awl-slider id=117]'; // Replace with the actual shortcode for your slider
  echo do_shortcode($slider_shortcode);
?>
<!-- Import the slider Plugin -->


<!-- Get the Right Sidebar -->
<!-- Output: This is a right Sidebar -->
<?php
// Display the pagination component.
understrap_pagination();

// Do the right sidebar check and close div#primary.
get_template_part( 'global-templates/right-sidebar-check' );
?>
<!-- Get the Right Sidebar -->


<!-- Get the Left Sidebar -->
<?php
// Do the left sidebar check and open div#primary.
get_template_part( 'global-templates/left-sidebar-check' );
?>
<!-- Get the Left Sidebar -->


<!-- To Import the Post from Wordpress -->
<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

<div class="row">

    <?php
    // Do the left sidebar check and open div#primary.
    get_template_part( 'global-templates/left-sidebar-check' );
    ?>

    <main class="site-main" id="main">

        <?php
        if ( have_posts() ) {
            // Start the Loop.
            while ( have_posts() ) {
                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'loop-templates/content', get_post_format() );
            }
        } else {
            get_template_part( 'loop-templates/content', 'none' );
        }
        ?>

    </main>

</div><!-- .row -->

</div><!-- #content -->
<!-- To Import the Post from Wordpress -->