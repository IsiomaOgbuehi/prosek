<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="wp-content/themes/prosek/assets/img/logo.png">
    <!-- <title>Prosek</title> -->
    <?php
        wp_head();
    ?>
</head>
<body>

<div id="wrapper">
    <div id="sidebar-wrapper" class="collapse d-flex flex-column justify-content-between">
        <div class="flex-md-grow-1 d-flex flex-column justify-content-between">

            <div class="d-none d-md-block w-100"><img src="wp-content/themes/prosek/assets/img/logo.svg" class="" width="70" /></div>
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
            <!-- <nav class="nav flex-column flex-md-grow-1 justify-content-center smallerFont text-center text-md-left mt-5 pt-5 pb-5 pb-md-auto mt-md-auto main-menu">
                <a class="nav-link active" href="#">HOME</a>
                <a class="nav-link" href="projects.html">PROJECTS</a>
                <a class="nav-link" href="news_events.html">EVENTS + NEWS</a>
                <a class="nav-link" href="studio.html">STUDIO</a>
                <a class="nav-link" href="contact.html">CONTACT</a>
            </nav> -->
            <div class="d-none d-md-block pb-md-5">
                <div class="side-search x-smallerFont font-weight-normal" data-toggle="collapse" data-target="#side-search" aria-expanded="false" aria-controls="side-search">
                    <span class="mr-2"><img src="wp-content/themes/prosek/assets/img/bootstrap-icons/search.svg" width="10" /></span>SEARCH
                </div>
                <div class="collapse mt-4" id="side-search">
                <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                        <div class="form-row">
                            <input type="text" name="s" value="" class="form-control side-search-input" placeholder="Search..."  />
                        </div>
                    </form> 
                </div>
            </div>

        </div>
        <div class="d-none d-md-block row p-3 smallerFont">&copy; 2020 Prosek Architects</div>
    </div>

    <!-- Page Content Wrapper  -->
    <div id="page-content-wrapper" class="p-0 w-100">

        <?php 
            global $post;
            $post_slug = $post->post_name;
        ?>
        <div class="container-fluid <?php echo ($post_slug == 'news-events') ? 'p-0' : '' ?>">
            <div class="row">
                <div class="col-12 p-0">

                    <nav class="navbar bg-transparent w-100" style="z-index: 10000;">
                        <div class="container-fluid d-flex justify-content-between align-items-center flex-md-row-reverse mt-4">
                            <?php
                                // if(function_exists('the_custom_logo')){
                                //     the_custom_logo();
                                // }
                            ?>
                            <a class="collapsed border-0" href="index.html" style="z-index: 100;"><img src="wp-content/themes/prosek/assets/img/logo.svg" class="logo-img-main" width="70" /></a>
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
<?php

// CONTENT

$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h4 class='mb-3' style='color:#000'>Search Results for: ".get_query_var('s')."</h4>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <!-- <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li> -->
                    
                 
                 <div class="card mb-3" style="max-width: 540px; box-shadow: 2px 2px 2px -2px grey;">
                 <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img class="card-img h-100 new-detail-header-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" style="border-radius: 0 !important;" width="150" />
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title ellipsis"><?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?></h5>
                            <p class="card-text ellipsis"><?php echo mb_strimwidth(get_the_content(), 0, 130, '...'); ?></p>
                            <p class="card-text"><small class="text-muted"> Last Updated  <?php echo get_the_date(); ?></small></p>
                        </div>
                        </div>
                    </div>
                    </a>
                </div>
        
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php }
// CONTENT ENDS
?>

<?php
    get_footer();
?>
