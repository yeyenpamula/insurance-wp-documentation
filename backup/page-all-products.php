<?php
/**
 * Template Name: Page All Products
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
        <div class="hero-background"></div>
        <!-- Hero Section Start -->
        <section class="container hero-section mt-md-5 mb-md-5">
        <div class="row">
            <div class="col-md-6 hero-content mt-md-5 pt-md-5">
            <div>
                <h1 class="page-heading">Business Insurance</h1>
                <p class="subheading">Insurance created to meet your business needs.</p>
                <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="d-grid">
                    <button class="btn btn-primary button-cta mt-4" type="button">Get a Quote</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-5 offset-md-1 d-none d-sm-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Picture-Hero-Product.png" class="img-fluid">
            </div>
        </div>
        </section>

        <!-- advantages section -->
        <section class="container py-5 advantages-section">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="text-center">What is Business Insurance from <span style="color: #6E71FF;">Master</span>?</h2>
                    <p class="text-center">Easy, Fast, Affordable Insurance for everyone</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 vertical-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Maze-icon.png" alt="" class="mb-3">
                    <p class="vertical-block-title text-center">Easy</p>
                    <p class="vertical-block-sub-title text-center">Buy your policy 100% online in minutes, whenever and wherever you choose</p>
                </div>
                <div class="col-md-4 vertical-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Fast.png" alt="" class="mb-3">
                    <p class="vertical-block-title text-center">Fast</p>
                    <p class="vertical-block-sub-title text-center">Your business insurance coverage is designed to meet your needs</p>
                </div>
                <div class="col-md-4 vertical-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/income-1.png" alt="" class="mb-3">
                    <p class="vertical-block-title text-center">Affordable</p>
                    <p class="vertical-block-sub-title text-center">Pay monthly, with amazing prices and absolutely no extra fees</p>
                </div>
            </div>
        </section>

        <!-- Two Column Section Start -->
        <section class="container two-column-section my-5">
        <div class="row">
            <div class="col-md-5 mb-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Picture-A.png" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1">
            <div>
                <h2>What is Small Business Insurance?</h2>
                <p>The idea of insurance for businesses is simple: you pay a set amount in the form of an insurance premium, generally either monthly or once a year.  In return, you may be able to avoid paying a much larger amount if something unexpected happens. Of course, business insurance limits that concept to your business. If an accident happens while you’re working or someone blames your business for damage, your local business insurance could take care of the problem so that the cost doesn’t come out of your company’s budget.</p>
                <a href="">Get an instant quote</a>
            </div>
            </div>
        </div>
        </section>

        <!-- One Column Section -->
        <section class="container-fluid my-5 one-column-section text-center ">
        <div class="row">
            <div class="col-md-12">
            <h2 class="one-column-title text-md-center text-start">Need a fast certificate of insurance?</h2>
            <p class="one-column-sub-title text-md-center text-start">Get covered in minutes and have your COI in hand</p>
            <div class="row justify-content-center">
                <div class="col-md-2 col-sm-12 col-12 text-center">
                    <div class="d-grid">
                    <button class="btn btn-primary button-cta" type="submit">Get a Quote</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </section>

        <!-- FAQ Section -->
        <section class="container faq-section my-5">
            <h2>Business Insurance FAQ</h2>
            <p>Check out our most frequently asked questions, and get the answers you're seeking.</p>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">What is General Liability Insurance?</button>
                    </h3>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Contractor’s Errors & Omissions coverage is intended to protect against faulty work or accidental damage to your product. This coverage is important if you work on a property that belongs to a third party but is in your care during the job, or if you construct products for your clients and want coverage in case mistakes are later discovered.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    What is Contractors’ Errors and Omissions coverage?
                    </button>
                    </h3>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Contractor’s Errors & Omissions coverage is intended to protect against faulty work or accidental damage to your product. This coverage is important if you work on a property that belongs to a third party but is in your care during the job, or if you construct products for your clients and want coverage in case mistakes are later discovered.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    What do the policy limits mean?
                    </button>
                    </h3>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Contractor’s Errors & Omissions coverage is intended to protect against faulty work or accidental damage to your product. This coverage is important if you work on a property that belongs to a third party but is in your care during the job, or if you construct products for your clients and want coverage in case mistakes are later discovered.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    What’s not covered under this policy?
                    </button>
                    </h3>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Contractor’s Errors & Omissions coverage is intended to protect against faulty work or accidental damage to your product. This coverage is important if you work on a property that belongs to a third party but is in your care during the job, or if you construct products for your clients and want coverage in case mistakes are later discovered.</div>
                    </div>
                </div>
            </div>

            <div class="row call-me-back mt-5">
                <div class="col-md-6">
                    <h3>Didn’t find an Answer?</h3>
                    <p>Don’t worry, just left you phone number and we will call you back in a few minutes</p>
                    <form class="row g-3">
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="call-number" placeholder="(000) 000-0000">
                        </div>
                        <div class="col-md-4 col-12 col-sm-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary mb-3">Call me back</button>
</div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-end  d-none d-sm-none d-md-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame-Call-me-block.png" alt="">
                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
