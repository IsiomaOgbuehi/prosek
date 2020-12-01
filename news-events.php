<?php /* Template Name: News Events */ ?>

<?php
    get_header();
?>

<div class="row mt-3">
                <div class="col-12">
                    <header class="text-center largeFont"><?php echo get_the_title(); ?></header>
                </div>
            </div>
            <?php 
            $args = array(
                'numberposts'      => 5,
                'category'         => 0,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'include'          => array(),
                'exclude'          => array(),
                'meta_key'         => '',
                'meta_value'       => '',
                'post_type'        => 'post',
                'suppress_filters' => true,
            );
            $posts = get_posts();
             ?>
            <div class="row mt-4 pl-4 pl-md-0">
                <?php 
                $categories = get_categories();
                $allCategories = array();
                 ?>
                <div class="col-12 d-flex justify-content-center">
                    <nav class="nav d-flex justify-content-lg-between project-menu">
                        <a class="nav-link active" data-category="ALL" href="#">SHOW ALL</a>
                        <?php foreach($categories as $cats): ?>
                            <a class="nav-link" data-category="<?php echo $cats->name; ?>" href="#"><?php echo $cats->name; ?></a>
                            <?php endforeach ?>
                    </nav>
                </div>
            </div>
            <div class="row row-eq-height mt-5 no-gutters">
                <?php 
                foreach($posts as $post):
                $postCategories = get_the_category($post->ID);
                ?>
                <div class="col-md-3 mb-4 all-posts m-0 p-0 animate__animated animate__fadeInUp" id="<?php echo $post->ID; ?>">
                    <div class="col-12 p-0">
                    <div class="flex-grow-1 event-news-hover w-100">
                        <a href="<?php echo get_permalink($post->ID); ?>"><img class="w-100 events-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>" /></a>
                    </div>
                    <div class="text-center mt-3 smallerFont">
                        <?php 
                        echo get_the_title($post->ID);
                        $count = 0;
                         ?>
                        <p>
                            <?php foreach($postCategories as $cats): ?>
                                <?php $count++;
                                $temp_array = array("category" => $cats->name, "id" => $post->ID);
                                array_push($allCategories, $temp_array);
                                ?>
                                <span><?php echo $cats->name. (sizeof($postCategories) == $count ? '' : ','); ?></span>
                                <?php endforeach ?>
                        </p>
                    </div>
                </div>
                    
                </div>
                <?php endforeach ?>
                <!-- <div class="col-md-3 mb-4 d-flex flex-column justify-content-between" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                    <div class="flex-grow-1 event-news-hover">
                        <img class="w-100 events-img" src="projects/img/British-Museum-2000.jpg" />
                    </div>
                    <div class="text-center mt-3 smallerFont">
                        PROJECT NAME
                        <p>Lorem Ipsum Text</p>
                    </div>
                </div> -->

            </div>
        </div>

<?php
    get_footer();
?>

<script>
    const posts = <?php echo json_encode($posts); ?>;
    const categories = <?php echo json_encode($allCategories); ?>;

    $('.nav-link').click(function(){
                    const cat = $(this).data('category');
                    const clickedItem = $(this);
                    // console.log(cat);

                    const allPosts = document.getElementsByClassName('all-posts');
                    // console.log(allPosts);
                    for(let i=0; i<allPosts.length; i++){
                        // console.log(allPosts[i]);
                        allPosts[i].style.display = 'none';
                        allPosts[i].style.opacity = '0';
                    }

                    $('.nav-link').each(function(){
                        $(this).removeClass("active");
                    });
                    clickedItem.addClass("active");

                    let search_categories = [];
                            for(let k=0; k<posts.length; k++){
                                    for(let i=0; i<categories.length; i++){
                        // console.log(categories[i]);
                        if(categories[i].category == cat && categories[i].id == posts[k].ID){

                                    search_categories.push(posts[k]);
                                }
                            }
                    }

                    for(let j=0; j<search_categories.length; j++){
                        document.getElementById(search_categories[j].ID).style.display = 'none';
                    }
                   
                    
                    if(cat == 'ALL'){
                        for(let i=0; i<allPosts.length; i++){
                        // console.log(allPosts[i]);
                            allPosts[i].style.display = 'flex';
                            allPosts[i].style.opacity = '0';
                        }
                    }
                    else{
                        for(let i=0; i<search_categories.length; i++){
                            // document.getElementById(search_categories[i].ID).style.display = 'none';
                           
                            document.getElementById(search_categories[i].ID).style.display = 'flex';
                            //  document.getElementById(search_categories[i].ID).classList.add('animate__animated animate__fadeInUp');
                        }
                    }
                });
</script>