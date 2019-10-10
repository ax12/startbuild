<?php /* Template Name: Template for main page */ ?>
<?php
get_header('main');
?>

    <div class="container-fluid">
        <div id="content">
            <div class="row row-about-us pt-md-5">
                <div class="col-md-1"></div>
            <div class="col-md-6 text-center">
                <h2 class="pt-md-5">- <?php echo carbon_get_the_post_meta ('crb_header_about') ?> -</h2>
                <?php echo carbon_get_the_post_meta ('crb_about_description') ?>
                <a href="<?php echo carbon_get_the_post_meta ('crb_button_link') ?>"><button type="button" class="btn btn-success mx-btn-color"><?php echo carbon_get_the_post_meta ('crb_button_name') ?></button></a>
            </div>

            <div class="col-md-5">
                    <div class="mx-square-line mt-md-5 justify-content-center">
                       <span class="text-center"><?php echo carbon_get_the_post_meta ('crb_header_about') ?></span>

                    </div>


            </div>

        </div> <!--end row-->
    </div>


<?php
get_footer();
