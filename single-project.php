<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../wp-content/themes/prosek/assets/img/logo.png">
    <!-- <title>Prosek</title> -->
    <?php
        wp_head();
    ?>
</head>
<body>

<div id="wrapper">
    <div id="sidebar-wrapper" class="collapse d-flex flex-column justify-content-between">
        <div class="flex-md-grow-1 d-flex flex-column justify-content-between">

            <div class="d-none d-md-block w-100"><img src="../../wp-content/themes/prosek/assets/img/logo.svg" class="" width="70" /></div>
            <!-- Side Bar Menu Implementation -->
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        // 'walker' => new Custom_Walker_Nav_Menu_Top,
                        'items_wrap' => '<nav class="nav flex-column flex-md-grow-1 justify-content-center smallerFont text-center text-md-left mt-5 pt-5 pb-5 pb-md-auto mt-md-auto main-menu">%3$s</nav>'
                    )        
                );
            ?>
            </nav> 
            <div class="d-none d-md-block pb-md-5">
                <div class="side-search x-smallerFont font-weight-normal" data-toggle="collapse" data-target="#side-search" aria-expanded="false" aria-controls="side-search">
                    <span class="mr-2"><img src="../../wp-content/themes/prosek/assets/img/bootstrap-icons/search.svg" width="10" /></span>SEARCH
                </div>
                <div class="collapse mt-4" id="side-search">
                    <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                        <div class="form-row">
                            <input type="text" name="s" value="" class="form-control side-search-input" placeholder="Search..." required />
                        </div>
                    </form> 
                </div>
            </div>

        </div>
        <div class="d-none d-md-block row p-3 smallerFont">&copy; 2020 Prosek Architects</div>
    </div>

    <!-- Page Content Wrapper  -->
    <div id="page-content-wrapper" class="p-0 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">

                    <nav class="navbar bg-transparent w-100" style="z-index: 10000;">
                        <div class="container-fluid d-flex justify-content-between align-items-center flex-md-row-reverse mt-4">
                            
                            <a class="collapsed border-0" href="index.html" style="z-index: 100;"><img src="../../wp-content/themes/prosek/assets/img/logo.svg" class="logo-img-main" width="70" /></a>
                            
                            <button class="other-burger hamburger hamburger--squeeze collapsed" id="menu-toggle" data-toggle="collapse" data-target="#sidebar-wrapper">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                            </button>
                        </div>

                    </nav>
                </div>
            </div>

            <div class="row mt-5 p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <?php $imageIds = $dynamic_featured_image->get_post_attachment_ids( get_the_ID() ); ?>
                            <p class="x-largeFont"><?php echo the_title(); ?></p>
                            <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                            <?php 
                            //  $terms = get_terms( 'categories', array('hide_empty' => false, get_the_ID()) ); ?>
                                <p><?php echo get_field( "project_type"); ?></p>
                                <article class="text-justify">
                                    <?php echo the_content(); ?>
                                </article>
                            </div>

                            <div class="mt-4 border-top border-bottom pt-4 pb-4">
                                <div class="row smallerFont">
                                    <div class="col-4 font-weight-bold">Client</div>
                                    <div class="col-8" style="color: #818182;"><?php echo get_field( "client_information"); ?></div>
                                </div>
                                <div class="row smallerFont mt-2">
                                    <div class="col-4 font-weight-bold">Services</div>
                                    <div class="col-8" style="color: #818182;"><?php echo get_field( "services"); ?></div>
                                </div>
                                <div class="row smallerFont mt-2">
                                    <div class="col-4 font-weight-bold">Year</div>
                                    <div class="col-8" style="color: #818182;"><?php echo get_field( "year"); ?></div>
                                </div>
                            </div>

                            <div class="smallerFont font-weight-bold mt-4 mb-4">Share Info</div>

                        </div>
                        <div class="col-md-8 pl-md-5">
                            <?php // echo $dynamic_featured_image->get_image_url(8, "full"); ?>
                            <?php foreach($imageIds as $ids): ?>
                            <div class="row row-eq-height mb-4">
                                <div class="col-12">
                                    <?php echo $image[0]->full; ?>
                                    <img src="<?php echo $dynamic_featured_image->get_image_url($ids, "full"); ?>" class="w-100 project-detail-img" />
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4 p-4 border-top" style="background-color: #f7f7f7 !important;">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php $projects = get_posts(array('post_type' => 'project')); 
                        
                        $index = array_search(get_the_ID(), $projects);
                                
                            $found_key = array_search(get_the_ID(), array_column($projects, 'ID'));
                            $prev = $found_key - 1;
                            $next = $found_key + 1;
                            $link = dirname(get_permalink($projects[$prev]->ID));
                            $url = preg_replace('#/[^/]+?$#', '', $link);
                        ?>
                            <div class="col-2 col-md-4">
                                <span class="<?php echo ($prev < 0) ? 'isDisabled' : '' ?>">
                                <a class="prev" href="<?php echo ($prev < 0) ? '' : get_permalink($projects[$prev]->ID); ?>">
                                    <span class="d-inline-block">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                </span>
                                    <span class="d-none d-md-inline-block ml-1 font-weight-normal x-normalFont">PREV</span>
                            </a>
                            </span>
                            </div>

                            <div class="col-8 col-md-4 d-flex justify-content-center">
                                <a class="main" href="<?php echo $url.'/projects/'; ?>">
                                    <span class="mx-auto x-normalFont"> MAIN PORTFOLIO </span>
                                </a>
                            </div>

                            <div class="col-2 col-md-4 d-flex justify-content-end align-items-center">
                                <span class="<?php echo ($next == sizeof($projects)) ? 'isDisabled' : '' ?>">
                                    <a class="next" href="<?php echo ($next > sizeof($projects)) ? '' : get_permalink($projects[$next]->ID); ?>">
                                        <span class="d-none d-md-inline-block mr-1 font-weight-normal x-normalFont">NEXT</span>
                                        <span class="d-inline-block">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                            </a>
                            </span>
                            </div>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
?>

<script>
//  function submitOnEnter(inputElement, event) {
//          console.log(event);
//          inputElement.form.submit();
//     }
// $('.side-search-input').on('keyup',function(event){
//     if(event.keyCode === 13){
//     $('form').submit();
//     }
// });
</script>