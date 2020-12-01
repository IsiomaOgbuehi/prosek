<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../wp-content/themes/prosek/assets/img/logo.png">

    <?php
        wp_head();
    ?>
    <link rel="stylesheet" href="../wp-content/themes/prosek/assets/css/font-awesome/css/font-awesome.min.css">

    <!-- <title>Prosek</title> -->
    <style>
        /*.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {*/
            /*width: 25px !important;*/
            /*height: 0.9px !important;*/
            /*background-color: #000 !important;*/
            /*border-radius: 4px;*/
            /*position: absolute;*/
            /*transition-property: transform;*/
            /*transition-duration: 0.2s !important;*/
            /*transition-timing-function: ease;*/
        /*}*/
    </style>
</head>
<body>

<div id="wrapper">
    <div id="sidebar-wrapper" class="collapse d-flex flex-column justify-content-between">
        <div class="flex-md-grow-1 d-flex flex-column justify-content-between">

            <div class="d-none d-md-block w-100"><img src="../wp-content/themes/prosek/assets/img/logo.svg" class="" width="70" /></div>
            
            <!-- Side Bar Menu Implementation -->
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<nav class="nav flex-column flex-md-grow-1 justify-content-center smallerFont text-center text-md-left mt-5 pt-5 pb-5 pb-md-auto mt-md-auto main-menu">%3$s</nav>'
                    )        
                );
            ?>
            <div class="d-none d-md-block pb-md-5">
                <div class="side-search x-smallerFont font-weight-normal" data-toggle="collapse" data-target="#side-search" aria-expanded="false" aria-controls="side-search">
                    <span class="mr-2"><img src="../wp-content/themes/prosek/assets/img/bootstrap-icons/search.svg" width="10" /></span>SEARCH
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
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 h-50 d-flex justify-content-center">

                    <nav class="navbar bg-transparent w-100" style="z-index: 10000; position: absolute">
                        <div class="container-fluid d-flex justify-content-between flex-md-row-reverse mt-4">
                            <a class="collapsed border-0" href="#" style="z-index: 100;"><img src="../wp-content/themes/prosek/assets/img/logo.svg" class="logo-img" width="70" /></a>
                            <!--<button class="btn navbar-toggler collapsed border-0" id="menu-toggle" data-toggle="collapse" data-target="#sidebar-wrapper" aria-controls="sidebar_wrapper" aria-expanded="false" aria-label="Toggle navigation">-->
                            <!--<span></span>-->
                            <!--<span></span>-->
                            <!--<span></span>-->
                            <!--</button>-->
                            <button class="hamburger hamburger--squeeze collapsed burger-white" id="menu-toggle" data-toggle="collapse" data-target="#sidebar-wrapper">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                            </button>
                        </div>

                    </nav>
                    <img class="w-100 new-detail-header-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" />
                    <div class="mx-auto text-center" style="position: absolute; top: 50%;"  data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000" data-aos-once="false">
                        <div class="mx-auto text-white font-weight-bold news-detail-header-txt"><?php echo the_title(); ?></div>
                        <div class="smallerFont text-white">
                            <span class="pr-3 font-weight-bold"><?php echo strtoupper(get_the_date( 'F d, Y' )); ?></span> |
                            
                            <span class="pr-3 pl-3 font-weight-bold">IN 
                            <?php $categories = get_the_category($post->ID);
                                $count = 0;
                                foreach($categories as $cat):
                                    $count++;
                            ?>
                            <?php echo strtoupper($cat->name); echo ($count < sizeof($categories) ? ', ' : ''); ?>
                            <?php 
                            endforeach; ?>
                            </span> | 
                            <span class="pl-3 font-weight-bold"><?php echo (get_the_author() != null) ? strtoupper(get_the_author()) : 'AUTHOR'; ?></span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
            <div class="row mt-5 mb-2 pb-5 border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pt-3">
                            <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                            <?php // echo $post->post_author; get_the_author_meta( 'display_name' , $post->post_author ) ?>
                                <article class="text-justify">
                                    <?php echo the_content(); ?>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row border-bottom pt-4 pb-4 form-comment mx-auto">
                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-twitter" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-pinterest" aria-hidden="true"></i></button>
                                <button class="btn"><i class="fa fa-linkedin" aria-hidden="true"></i></button>
                                <!--<button class="btn"><i class="fa fa-xing" aria-hidden="true"></i></button>-->
                                <button class="btn"><i class="fa fa-send" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <form class="form-comment mx-auto pt-5 pb-4 label-row">
                        <?php
                           
                            // comment_form();
                            // comments_template();
                        ?>
                        <div class="form-row mb-4">
                            <label for="comment" class="font-weight-bold mb-3">ADD COMMENT</label>
                            <textarea class="form-control comment-input" id="comment" rows="5"></textarea>
                        </div>
                        <div class="form-row mb-4">
                            <label for="name" class="font-weight-bold mb-2">Name *</label>
                            <input type="text" class="form-control comment-input" id="name">
                        </div>
                        <div class="form-row mb-4">
                            <label for="email" class="font-weight-bold mb-2">Email *</label>
                            <input type="email" class="form-control comment-input" id="email">
                        </div>
                        <div class="form-row mb-4">
                            <label for="website" class="font-weight-bold mb-2">Website *</label>
                            <input type="text" class="form-control comment-input" id="website">
                        </div>
                        <div class="form-row mb-4">
                            <button class="btn comment-input-btn">POST COMMENT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4 p-4 border-top" style="background-color: #f7f7f7 !important;">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php $posts = get_posts(); 
                        
                        // $index = array_search(get_the_ID(), $posts);
                                
                            $found_key = array_search(get_the_ID(), array_column($posts, 'ID'));
                            $prev = $found_key - 1;
                            $next = $found_key + 1;
                            $link = dirname(get_permalink($posts[$prev]->ID));
                            // $url = preg_replace('#/[^/]+?$#', '', $link);
                        ?>
                            <div class="col-2 col-md-4">
                                <span class="<?php echo ($prev < 0) ? 'isDisabled' : '' ?>">
                                <a class="prev" href="<?php echo ($prev < 0) ? '' : get_permalink($posts[$prev]->ID); ?>">
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
                                <a class="main" href="<?php echo $link.'/news-events/' ?>">
                                    <span class="mx-auto x-normalFont"> MAIN PORTFOLIO </span>
                                </a>
                            </div>

                            <div class="col-2 col-md-4 d-flex justify-content-end align-items-center">
                                <span class="<?php echo ($next == sizeof($posts)) ? 'isDisabled' : '' ?>">
                                    <a class="next" href="<?php echo ($next > sizeof($posts)) ? '' : get_permalink($posts[$next]->ID); ?>">
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

<footer>
    <div class="container-fluid d-md-none" style="background-color: black;">
            <div class="row pt-2 pb-2">
                <div class="col-12 text-center text-white pt-5 pb-5 x-normalFont">
                    &copy; <?php echo date('Y'); ?> Prosek Architects
                </div>
            </div>
    </div>
</footer>

<?php
    get_footer();
?>