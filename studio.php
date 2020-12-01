<?php /* Template Name: studio */ ?>

<?php
    get_header();
?>

            <div class="row mt-4 p-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="largeFont pb-2"><?php echo get_the_title(); ?></div>

                            <ul class="nav nav-pills mb-3 x-smallerFont" id="pills-tab" role="tablist">
                                <li class="nav-item font-bold">
                                    <a class="nav-link active" id="who-tab" data-toggle="pill" href="#pills-who" role="tab" aria-controls="pills-who" aria-selected="true">WHO</a>
                                </li>
                                <li class="nav-item font-bold">
                                    <a class="nav-link" id="what-tab" data-toggle="pill" href="#pills-what" role="tab" aria-controls="pills-what" aria-selected="false">WHAT</a>
                                </li>
                                <li class="nav-item font-bold">
                                    <a class="nav-link" id="team-tab" data-toggle="pill" href="#pills-team" role="tab" aria-controls="pills-team" aria-selected="false">THE TEAM</a>
                                </li>
                                <li class="nav-item font-bold">
                                    <a class="nav-link" id="impact-tab" data-toggle="pill" href="#pills-impact" role="tab" aria-controls="pills-impact" aria-selected="false">SOCIAL IMPACT</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="row tab-content" id="pills-tabContent">

                        <div class="col-12 tab-pane fade show active" id="pills-who" role="tabpanel" aria-labelledby="who-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                                        <article class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                        </article>
                                    </div>

                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row row-eq-height mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <img src="../wp-content/themes/prosek/assets/img/studio/who.png" class="w-100 studio-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 tab-pane fade" id="pills-what" role="tabpanel" aria-labelledby="what-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                                        <article class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                        </article>
                                    </div>

                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row row-eq-height mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <img src="../wp-content/themes/prosek/assets/img/studio/what.png" class="w-100 studio-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="team-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                                        <article class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                        </article>
                                    </div>

                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <div class="row row-eq-height no-gutters">
                                                
                                                    <?php $profile = get_posts(array('post_type' => 'profile')); ?>
                                                        <?php $count = 0; ?>
                                                        <?php foreach($profile as $staff): ?>
                                                        <div class="col-md-3 profile userinfo" data-id="<?php echo $staff->ID; ?>" onClick="showProfile(<?php echo $staff->ID; ?>)">
                                                            <div class="text-white text-center p-text"><span><?php echo get_the_title($staff->ID); ?></span></div>
                                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($staff->ID)) ?>" class="w-100 team-img" />
                                                            <?php $count++; ?>
                                                        </div>
                                                    <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 tab-pane fade" id="pills-impact" role="tabpanel" aria-labelledby="impact-tab">
                            <div class="row">
                                <div class="col-lg-4 mb-5 pr-lg-5">
                                    <div class="smallerFont" style="color: #818182; line-height: 2.1;">
                                        <article class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                        </article>
                                    </div>

                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="row row-eq-height mb-4 pl-lg-5">
                                        <div class="col-12">
                                            <img src="../wp-content/themes/prosek/assets/img/studio/social_impact.png" class="w-100 studio-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true">
                <div class="modal-dialog mr-md-0 mt-0 mb-0" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button> -->
                        <div class="modal-title">
                            <button class="btn pt-0 profileNav" type="button pr-0" onClick="prev()">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg>                        
                                </span>
                            </button>
                            
                            <button class="btn pl-0 pt-0 profileNav" type="button" onClick="next()">
                                <span>
                                    <svg class="bi bi-chevron-right" width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
                                </span>
                            </button>
                            
                        </div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- <span aria-hidden="true" style="font-size: 2rem;">&times;</span> -->
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        </button>
                    </div>
                    <div class="modal-body" style="overflow-y: auto;">
                    <?php $profile = get_posts(array('post_type' => 'profile')); ?>
                        <?php foreach($profile as $sta): ?>
                            <div style="display: none;" class="item_details" id="<?php echo $sta->ID; ?>">
                                <div class="w-100 text-center">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($sta->ID)) ?>" class="team-img" style="width: 90%; height: 40vh;" />
                                </div>
                                
                                <div class="mt-3 mx-auto" style="width: 90%;">
                                <p class="mediumFont mt-5" style="font-weight: 400;"><?php echo get_the_title($sta->ID); ?></p>

                                    <?php echo get_post_field('post_content', $sta->ID); ?>  
                                </div>
                            </div>
                         <?php endforeach; ?>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>
                        </div>


            <?php
                get_footer();
            ?>

            <script>
                let modal;
                let prevModal;
                let postArray;
                let selectedId;
                let pre;
                const showProfile = (staffID) => {
                    postArray = <?php echo json_encode($profile); ?>;

                    selectedId = staffID;

                    modal = document.getElementById(staffID);
                    allModalsContent = document.getElementsByClassName('item_details');
                    
                    for (let i=0; i<allModalsContent.length; i++){
                        allModalsContent[i].style.display = "none";
                    }

                    // allModalsContent.style.display = "none";
                    modal.style.display = "block";
                    $('#profileModal').modal('show');
                }

                const prev = () => {
                    const indexID = postArray.map((res) => res.ID).indexOf(selectedId);

                    if(indexID !== 0){
                        pre = indexID - 1;

                        modal = document.getElementById(postArray[indexID].ID);
                        prevModal = document.getElementById(postArray[pre].ID);

                        modal.style.display = "none";
                        prevModal.style.display = "block";

                        selectedId = postArray[pre].ID;
                    }
                }

                const next = () => {
                    const indexID = postArray.map((res) => res.ID).indexOf(selectedId);

                    if(indexID <= postArray.length){
                        pre = indexID + 1;

                        modal = document.getElementById(postArray[indexID].ID);
                        prevModal = document.getElementById(postArray[pre].ID);

                        modal.style.display = "none";
                        prevModal.style.display = "block";

                        selectedId = postArray[pre].ID;
                    }
                }

                $("#profileModal").on("hidden.bs.modal", function () {
                    modal.style.display = "none";
                });

                $(document).ready(function(){
                    // $('.userinfo').click(function(){
                    //     const userId = $(this).data('id');
                    //     // console.log(userId);

                    //     $.ajax({
                    //         url: '../wp-content/themes/prosek/profileModal.php',
                    //         type: 'post',
                    //         data: {userid: userId},
                    //         success: function(response){
                    //             // console.log(<?php // echo 'Thus'; ?>);
                    //             $('.modal-body').html(response);
                    //             console.log(<?php // echo $_SESSION['userid']; ?>);
                    //         }
                    //     })
                    // })
                });
            </script>