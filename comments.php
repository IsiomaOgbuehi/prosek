<?php
$fields =  array(
    'author' =>
        '<input name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" placeholder="'.__('Your name','text-domain').( $req ? ' (Required)' : '' ).'"/>',
    'email' =>
        '<input name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" placeholder="'.__('Your email','text-domain').( $req ? ' (Required)' : '' ).'"/>',
);
$args = array(
    'id_form'           => 'commentform',
    'class_form'        => 'comment-form',
    'id_submit'         => 'submit',
    'class_submit'      => 'submit',
    'name_submit'       => 'submit',
    'submit_button'     => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
    'title_reply'       => '',
    'title_reply_to'    => __( 'Reply to %s','text-domain' ),
    'cancel_reply_link' => __( 'Cancel comment','text-domain' ),
    'label_submit'      => __( 'Post comment','text-domain' ),
    'format'            => 'xhtml',
    'comment_field'     =>  '<textarea id="comment" name="comment" placeholder="'.__('Comment text','text-domain').'" cols="45" rows="8" aria-required="true">' .'</textarea>',
    'logged_in_as'      => '<p class="logged-in-as">' .
                          sprintf(
                              __( 'Logged in as %1$s. <a href="%2$s" title="%3$s">%4$s</a>', 'text-domain'),
                              $user_identity,
                              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ),
                              __('Log out?','text-domain'),
                              __('Click to log out.','text-domain')
                          ) . '</p>',
    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.','text-domain' ) .'</p>',
    'fields'            => apply_filters( 'comment_form_default_fields', $fields ),
);

comment_form( $args );
 if(comments_open()){
                                comment_form(
                                    array(
                                        'class_form' => '',
                                        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title"',
                                        'title-reply-after' => '</h2'
                                    )
                                );
                            }

                            
?>