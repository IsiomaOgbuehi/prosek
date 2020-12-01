<?php
    get_header();
?>
<!-- Page Content Wrapper  -->
    <div id="page-content-wrapper" class="p-0 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">

                    <nav class="navbar bg-transparent w-100" style="z-index: 10000;">
                        <div class="container-fluid d-flex justify-content-between align-items-center flex-md-row-reverse mt-4">
                            <?php
                                // if(function_exists('the_custom_logo')){
                                //     the_custom_logo();
                                // }
                            ?>
                            <a class="collapsed border-0" href="index.html" style="z-index: 100;"><img src="../wp-content/themes/prosek/assets/img/logo.svg" class="logo-img-main" width="70" /></a>
                            <!--<button class="btn navbar-toggler collapsed border-0" id="menu-toggle" data-toggle="collapse" data-target="#sidebar-wrapper" aria-controls="sidebar_wrapper" aria-expanded="false" aria-label="Toggle navigation">-->
                                    <!--<span></span>-->
                                    <!--<span></span>-->
                                    <!--<span></span>-->
                            <!--</button>-->
                            <button class="other-burger hamburger hamburger--squeeze collapsed" id="menu-toggle" data-toggle="collapse" data-target="#sidebar-wrapper">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                            </button>
                        </div>

                    </nav>
                </div>
            </div>


            

<article class="content px-3 py-5 p-md-5">
    <?php
    //     if(have_posts()){
    //     while(have_posts()){
    //         the_post();
    //         get_template_part('template-parts/content', 'page');
    //     }
    // }
    ?>
</article>

<?php
    get_footer();
?>