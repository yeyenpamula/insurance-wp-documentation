<?php
/**
 * Template Name: Page Contact Us
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

    <section class="container contact-us-section my-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-heading">Get in touch</h1>
                <p>Drop us a line and we will reach you out as soon as possible.</p>
                <button class="btn btn-primary btn-contact mail mb-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_24px.png" alt="" class="me-2"> contact@master.com</button>
                <button class="btn btn-primary btn-contact mb-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/local_phone_24px.png" alt="" width="32" height="32" class="me-2"> (505) 555-5555</button>
                <button class="btn btn-primary btn-contact helpdesk mb-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact_support_24px.png" alt="" class="me-2"> Visit Customer Support</button>
                <button class="btn btn-primary btn-contact location mb-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/location_on_24px.png" alt="" class="me-2"> 8502 Preston Rd.</button>
            </div>
            <div class="col-md-6 mt-md-5 pt-md-5 mt-3 pt-3">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63282.313707641784!2d110.78379234869551!3d-7.55920760435233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Surakarta%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1615303540947!5m2!1sen!2sid" width="600" height="330" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="row btn-direction">
                        <div class="col-12">
                            <div class="d-grid">
                            <a class="btn btn-primary button-cta get-direction" href="https://maps.google.com/maps?ll=-7.559209,110.818812&z=12&t=m&hl=en&gl=ID&mapclient=embed&daddr=Surakarta%20Surakarta%20City%20Central%20Java@-7.575488699999999,110.8243272">Get Direction</button>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
