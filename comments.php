<?php

if(post_password_required()){
    return;
}
?>
<div class="comments-area" id="comments">
    <?php
        if(have_comments()):
    ?>
    <h2 class="comments-title">
        <?php
            $commnets_number =get_comments_number();
            if('1'=== $commnets_number){
                printf(_x("Ont througt on &ldquo;%s&rdquo;",'comments title','twentysixteen'),get_the_title());
            }else{
                printf(
                _nx(
                    '%1$s thought on &ldquo;%s&rdquo;',
                    '%1$s thought on &ldquo;%s&rdquo;',
                    $commnets_number,
                    'comments title',
                    'twentysixteen'
                ),
                mumber_format_i18n($commnets_number),
                get_the_title();

                  );
             }
         ?>
    </h2>

    <?php the_comments_navigation();?>

    <ol class="comment-list">
        <?php
         wp_list_comments(
            array(
                'style'=>'ol',
                'short_ping'=>true,
                'avatar_size'=>42,

            )
            );
            ?>

    </ol>

    <?php endif;?>

    <?php
    if(!comments_open() && get_comments_number() && post_type_supports(get_post_type(),'comments')):?>

    <p class="no-comments"><?php _e('Comments are closed.','twentysixteen');?></p>
    <?php endif;?>

    <?php

    comment_form(
        array(
            'title_reply_before'=>'<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'=>'</h2>',

        )
        );

        ?>

</div>