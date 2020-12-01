<?php /* Template Name: contact */ ?>

<?php
    get_header();
?>


            <div class="row mt-4 p-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="largeFont pb-2"><?php echo get_the_title(); ?></div>

                            <!--<div class="d-flex justify-content-start flex-wrap">-->
                            <!--<div class="mr-3 studio-menu"><a class="active" href="#">WHO</a></div>-->
                            <!--<div class="mr-3 studio-menu"><a href="#">WHAT</a></div>-->
                            <!--<div class="mr-3 studio-menu"><a href="#">THE TEAM</a></div>-->
                            <!--<div class="mr-3 studio-menu"><a href="#">SOCIAL IMPACT</a></div>-->
                            <!--</div>-->
                            <ul class="nav nav-pills mb-3 x-smallerFont" id="pills-tab" role="tablist">
                                <li class="nav-item font-bold">
                                    <a class="nav-link active" id="map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="true">MAP</a>
                                </li>
                                <li class="nav-item font-bold">
                                    <a class="nav-link" id="careers-tab" data-toggle="pill" href="#pills-careers" role="tab" aria-controls="pills-careers" aria-selected="false">CAREERS</a>
                                </li>
                                <li class="nav-item font-bold">
                                    <a class="nav-link" id="programs-tab" data-toggle="pill" href="#pills-programs" role="tab" aria-controls="pills-programs" aria-selected="false">PROGRAMS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row tab-content" id="pills-tabContent">
                        <div class="col-12 tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="map-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="mt-3 smallerFont">
                                        <div style="color: #6c757d;">
                                            <span class="d-block mt-3">18B Oladipo Bateye Street</span>
                                            <span class="d-block mt-3">Ikeja GRA</span>
                                            <span class="d-block mt-3">Lagos, Nigeria</span>
                                        </div>
                                        <div class="mt-3"><img src="../wp-content/themes/prosek/assets/img/bootstrap-icons/phone.svg" /> <a class="text-dark" href="tel:+234 816 650 3005">+234 816 650 3005</a>  </div>
                                        <div class="mt-3"><img src="../wp-content/themes/prosek/assets/img/bootstrap-icons/envelope.svg"  /> <a class="text-dark" href="mailto:info@prosekarchitects.com">info@prosekarchitects.com</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <div id="map"></div>
                                            <div class="w-100 p-2 text-center text-white" style=" bottom: 0; font-size: .8rem; background-color: #000;">18B Oladipo Bateye Street, Ikeja GRA, Lagos, Nigeria.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 tab-pane fade" id="pills-careers" role="tabpanel" aria-labelledby="careers-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                                        <article class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p class="text-dark largeFont">SUB HEADER</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p class="text-dark largeFont">SUB HEADER</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <div class="text-dark font-bold">Send your c.v to <a href="mailto:hr@prosekarchitects.com">hr@prosekarchitects.com</a></div>
                                        </article>
                                    </div>

                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row row-eq-height mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <img src="../wp-content/themes/prosek/assets/img/contact/careers.png" class="w-100 studio-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 tab-pane fade" id="pills-programs" role="tabpanel" aria-labelledby="programs-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                                        <article class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <div class="mt-5">For more information please contact support@prosekarchitects.com</div>
                                        </article>
                                    </div>

                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <div class="row row-eq-height no-gutters">
                                                <img src="../wp-content/themes/prosek/assets/img/contact/programs.png" class="w-100 studio-img" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
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
