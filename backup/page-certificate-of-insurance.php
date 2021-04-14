<?php
/**
 * Template Name: Page Certificate of Insurance
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

    <section class="container coi-section my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-heading">Certificate Of Insurance</h1>
            </div>
        </div>
        <div class="row">
            <form>
                <div class="col-md-5">
                    <h3 class="my-5">General Information</h3>
                    <div class="mb-3">
                        <label for="name-of-insured" class="form-label">Name of Insured *</label>
                        <input type="text" class="form-control" id="name-of-insured" placeholder="e.g Robert Fox">
                    </div>
                    <div class="mb-3">
                        <label for="name-of-insured" class="form-label">Name or Company of Certificate Holder</label>
                        <input type="text" class="form-control" id="name-of-insured" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="name-of-insured" class="form-label">Job Reference Number</label>
                        <input type="text" class="form-control" id="name-of-insured" placeholder="XX-X-0000-00-00-X">
                    </div>
                    <h3 class="my-5">Address of Holder</h3>
                    <div class="mb-3">
                        <label for="address-of-holder" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="address-of-holder" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="address-of-holder" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" id="address-of-holder" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="address-of-holder" class="form-label">City</label>
                        <input type="text" class="form-control" id="address-of-holder" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="address-of-holder" class="form-label">State</label>
                        <input type="text" class="form-control" id="address-of-holder" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="address-of-holder" class="form-label">ZIP Code</label>
                        <input type="text" class="form-control" id="address-of-holder" placeholder="XXXXX">
                    </div>
                    <h3 class="my-5">Contact Information</h3>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Holder Phone</label>
                        <input type="text" class="form-control" id="contact-information" placeholder="(XXX) XXX-XXXX">
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Holder Fax</label>
                        <input type="text" class="form-control" id="contact-information" placeholder="(XXX) XXX-XXXX">
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Your Name*</label>
                        <input type="text" class="form-control" id="contact-information" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Contact Email*</label>
                        <input type="text" class="form-control" id="contact-information" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Handling Method</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Fax</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Email</label>
                        </div>
                    </div>
                    <h3 class="my-5">Required Coverages</h3>
                    <div class="mb-3">
                    <label for="contact-information" class="form-label">Please Provide Copy of Insurance Requirements of Contract</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Auto</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Umbrella</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Genral Liability</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Equipment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Workers' Compensation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Builders Risk</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">General Liability Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Do you need Endorsements for Waiver of Subrogation?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Do you need Endorsements for Primary Wording?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Is the payee lost?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Mortgagee</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contact-information" class="form-label">Is anyone additional insured?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comments or Other Instructions</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Attach File(s)</label>
                        <div class="upload-btn-wrapper">Drop files here or 
                            <button class="btn btn-primary button-cta btn-upload">Select File</button>
                            <input type="file" name="myfile" />
                        </div>
                        <div id="formFileHelpBlock" class="form-text">Please attach written request(s) and/or contracts received, if any.</div>
                    </div>
                    <div class="my-5">
                        <button type="submit" class="btn btn-primary button-cta btn-lg">Submit COI Request</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();