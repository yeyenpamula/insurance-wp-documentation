<?php
/**
 * Template Name: Page Long Form
 * 
 * The template for displaying about us pages
 *
 * This is the template that displays about us by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Insurance_WP
 */

get_header();
?>

	<main id="primary" class="site-main">

    <section class="container long-form-section my-5">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-md-start close-button col-12 mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.png" alt="" width="32px" height="32px">
            </div>
            <div class="col-md-6 d-flex justify-content-md-end contact-info col-12">
                <p><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Marker.png" alt="" width="24px" height="24px"></span> San Diego, California  <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Call.png" alt="" width="24px" height="24px"></span> 410-580-2800</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h1>Please choose the type of insurance you'd like a quote for:</h1>
            </div>
            <div class="col-md-6 offset-md-1 insurance-type">
                <button class="insurance-type-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Business.png" alt="">
                    <p class="align-middle">Business</p>
                </button>
                <button class="insurance-type-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Comercial-property.png" alt="">
                    <p class="align-middle">Commercial Property</p>
                </button>
                <button class="insurance-type-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motorcycle_1.png" alt="">
                    <p class="align-middle">Motorcycle</p>
                </button>
                <button class="insurance-type-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Auto.png" alt="">
                    <p class="align-middle">Auto</p>
                </button>
                <button class="insurance-type-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sailor-1.png" alt="">
                    <p class="align-middle">Boat</p>
                </button>
            </div>
        </div>
    </section>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
