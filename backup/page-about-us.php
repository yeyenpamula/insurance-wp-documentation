<?php
/**
 * Template Name: Page About Us
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
    
    <div class="hero-image mb-5">
        <div class="overlay"></div>
        
        <div class="container">                          
            <div class="col-md-12">
                <div class="hero-text">
                    <h1 class="page-heading">We translate insurance <br>to a smooth process</h1>
                    <p class="subheading">Our team and values</p>
                </div>
            </div>
        </div>
    </div>

    <section class="container py-5 advantages-section">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="text-center">Master Insurance Values</h2>
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
            <h2>It’s time for a change.</h2>
            <p>The needs of business owners have significantly changed over the past decade, the insurance industry hasn’t. When you’re running your own business, you’re placing a huge bet on yourself. Your ideas, your passion, your blood, sweat and tears define your success. Next Insurance was created to give your business the coverage it deserves. Simple, affordable and tailored. So no matter what you do, no matter how you define success, we’re right there, next to you.</p>
        </div>
        </div>
    </div>
    </section>

    <div class="my-2 py-2"></div>

    <!-- Two Column Section Start -->
    <section class="container two-column-section my-5">
    <div class="row">
        <div class="col-md-5 mb-3 offset-md-1 order-md-last mb-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Picture-C.png" class="img-fluid">
        </div>   
        <div class="col-md-6">
            <div>
                <h2>There for you, <br>when it counts</h2>
                <p>Life happens and sometimes things can go wrong. At the moment of truth, when you need us the most, we want to be there. To guide, to help, to solve. That’s why we have raised the bar on service, bringing most of our claims adjudication in house. At Next Insurance, we make sure claims are investigated as soon as possible, with many being decisioned within 48 hours. so you can get back to what matters to you the most.</p>
            </div>
        </div> 
    </div>
    </section>

    <div class="my-2 py-2"></div>

    <!-- Two Column Section Start -->
    <section class="container two-column-section my-5">
    <div class="row">
        <div class="col-md-5 mb-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Picture-D.png" class="img-fluid">
        </div>
        <div class="col-md-6 offset-md-1">
        <div>
            <h2>Led by people, <br>powered by technology</h2>
            <p>Behind our groundbreaking AI-based technology there are hundreds of us. Data scientists, insurance advisors, product managers, designers & more. We are passionate about helping businesses achieve their goals & are committed to serve the needs of business owners.</p>
        </div>
        </div>
    </div>
    </section>

    <div class="py-2 my-2"></div>

    <!-- Partner Section -->
    <section class="container my-5 partner-section">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center">Our Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 mb-5 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png" alt="">
            </div>
            <div class="col-md-3 col-6 mb-5 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png" alt="">
            </div>
            <div class="col-md-3 col-6 mb-5 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png" alt="">
            </div>
            <div class="col-md-3 col-6 mb-5 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png" alt="">
            </div>
        </div>
    </section>

    <div class="my-2 py-2"></div>
    
    <div class="container my-5">
        <div class="row">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Full-Width-Grid-Media-2.png" alt="" class="img-fluid">
        </div>
    </div>

    <!-- Hero Section Start -->
<section class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <div>
        <h2>We are here to help you on the way to Insurance</h2>
        <p>Behind our groundbreaking AI-based technology there are hundreds of us. Data scientists, insurance advisors, product managers, designers & more.</p>
        <div class="row">
          <div class="col-md-4 col-sm-12 col-12">
            <div class="d-grid">
              <button class="btn btn-primary button-cta mt-4" type="button">Get a Quote</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col"></div>
    <div class="col-md-5">
    </div>
  </div>
</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
