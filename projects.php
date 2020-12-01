<?php /* Template Name: projects */ ?>

<?php
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
                            <nav class="nav d-flex justify-content-lg-between project-menu">
                                <a class="nav-link active" data-category="ALL" href="#">SHOW ALL</a>
                                <?php 
                                    $terms = get_terms( 'categories', array(
                                        'hide_empty' => false,
                                    ) );
                                    foreach($terms as $term): ?>
                                <a class="nav-link" data-category="<?php echo $term->name ?>" href="#"><?php echo $term->name ?></a>
                                <?php endforeach ?>
                            </nav>
                        </div>
                    </div>
                    <div class="row row-eq-height mt-5 p-3 ">
                        <?php 
                        $projects = get_posts(array('post_type' => 'project'));
                        $categories = array();
                        $project_sort = array();

                        ?>

                        <?php 
                            $terms = get_terms( 'categories' );
                            // print_r($terms);
                            // foreach ( $terms as $term ) {
                            // echo $term->name;
                            // }
                            foreach($projects as $project):
                                $project_terms = get_the_terms( $project->ID, 'categories' );
                                // array_push($project, $project_terms);
                        ?>
                        <?php // print_r(wp_get_attachment_url( get_post_thumbnail_id($projects[0]->ID))); ?>

                        <div class="col-md-3 mb-4 all-projects animate__animated animate__fadeInUp" id="<?php echo $project->ID; ?>" >
                            <div class="flex-grow-1 select-project">
                                <!--<div class="plus-hover"><img src="assets/img/bootstrap-icons/plus.svg" width="25" /> </div>-->
                                <a href="<?php echo get_permalink($project->ID); ?>"><img class="w-100 projects-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($project->ID)); ?>" /></a>
                            </div>
                            <div class="text-center mt-3 smallerFont">
                                <p><?php echo get_the_title($project->ID);
                                    $count = 0;
                                ?> </p>
                                <?php foreach($project_terms as $cats): ?>
                                <?php $count++;
                                $temp_array = array("category" => $cats->name, "id" => $project->ID);
                                array_push($categories, $temp_array);
                                ?>
                                <span><?php echo $cats->name. (sizeof($project_terms) == $count ? '' : ','); ?></span>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
                                </div>
            
             <?php
                get_footer();
            ?>

            <script>
                // AOS.init();

                const products = <?php echo json_encode($projects); ?>;
                const categories = <?php echo json_encode($categories); ?>;

                $('.nav-link').click(function(){
                    const cat = $(this).data('category');
                    const clickedItem = $(this);
                    // console.log(cat);

                    const allProjects = document.getElementsByClassName('all-projects');
                    for(let i=0; i<allProjects.length; i++){
                        // console.log(allProjects[i]);
                        allProjects[i].style.display = 'none';
                        allProjects[i].style.opacity = '0';
                    }

                    $('.nav-link').each(function(){
                        $(this).removeClass("active");
                    });
                    clickedItem.addClass("active");

                    let search_categories = [];
                            for(let k=0; k<products.length; k++){
                                    for(let i=0; i<categories.length; i++){
                        // console.log(categories[i]);
                        if(categories[i].category == cat && categories[i].id == products[k].ID){

                                    search_categories.push(products[k]);
                                }
                            }
                    }

                    for(let j=0; j<search_categories.length; j++){
                        document.getElementById(search_categories[j].ID).style.display = 'none';
                    }
                   
                    
                    if(cat == 'ALL'){
                        for(let i=0; i<allProjects.length; i++){
                        // console.log(allProjects[i]);
                            allProjects[i].style.display = 'flex';
                            allProjects[i].style.opacity = '0';
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