<?php
/* Template Name: Portfolio */
 
 
get_header(); 
 
?>
<div class="row">
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-12">
                            <header class="text-center largeFont"><?php echo get_the_title(); ?></header>
                        </div>
                    </div>
                    <div class="row mt-4 pl-3 pl-md-0">
                        <div class="col-12 d-flex justify-content-center">
                            <nav class="nav d-flex justify-content-lg-between">
                                <a class="nav-link active" href="#">SHOW ALL</a>
                                <!-- <a class="nav-link" href="#">DESIGNS</a>
                                <a class="nav-link" href="#">COMMERCIAL</a>
                                <a class="nav-link" href="#">RESIDENTIAL</a>
                                <a class="nav-link" href="#">HOUSES</a>
                                <a class="nav-link" href="#">BUILT</a> -->
                                <?php 
                                    $terms = get_terms( 'categories', array(
                                        'hide_empty' => false,
                                    ) );
                                    foreach($terms as $term): ?>
                                <a class="nav-link" href="#"><?php echo $term->name ?></a>
                                <?php endforeach ?>
                            </nav>
                        </div>
                    </div>
                    <div class="row row-eq-height mt-5 p-3">
                        <?php $projects = get_posts(array('post_type' => 'project'));  ?>
                        
                        <?php 
                            // $terms = get_the_terms( $projects[0]->ID, 'categories' );
                            // foreach ( $terms as $term ) {
                            // echo $term->name;
                            // }
                            foreach($projects as $project):
                                $project_terms = get_the_terms( $project->ID, 'categories' );
                        ?>
                        <?php // print_r(wp_get_attachment_url( get_post_thumbnail_id($projects[0]->ID))); ?>

                        <div class="col-md-3 mb-4 d-flex flex-column justify-content-between" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                            <div class="flex-grow-1 select-project">
                                <!--<div class="plus-hover"><img src="assets/img/bootstrap-icons/plus.svg" width="25" /> </div>-->
                                <a href="<?php echo get_permalink($project->ID); ?>"><img class="w-100 projects-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($project->ID)); ?>" /></a>
                            </div>
                            <div class="text-center mt-3 smallerFont">
                                <p><?php echo get_the_title($project->ID);
                                    $count = 0;
                                ?> </p>
                                <?php foreach($project_terms as $cats): ?>
                                <?php $count++; ?>
                                <span><?php echo $cats->name. (sizeof($project_terms) == $count ? '' : ','); ?></span>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <!-- <div class="col-md-3 mb-4 d-flex flex-column justify-content-between" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                            <div class="flex-grow-1 select-project">
                                <img class="w-100 projects-img" src="projects/img/British-Museum-2000.jpg" />
                            </div>
                            <div class="text-center mt-3 smallerFont">
                                PROJECT NAME
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 d-flex flex-column justify-content-between" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                            <div class="flex-grow-1 select-project">
                                <img class="w-100 projects-img" src="projects/img/architecture_0.jpg" />
                            </div>
                            <div class="text-center mt-3 smallerFont">
                                PROJECT NAME
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 d-flex flex-column justify-content-between" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                            <div class="flex-grow-1 select-project">
                                <img class="w-100 projects-img" src="projects/img/British-Museum-2000.jpg" />
                            </div>
                            <div class="text-center mt-3 smallerFont">
                                PROJECT NAME
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
            
             <?php
                get_footer();
            ?>



