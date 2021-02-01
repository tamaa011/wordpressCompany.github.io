<?php
    if (comments_open()) { // check if the comments are open ?>
           <h3 class="comments-count"><?php comments_number('0 Comments', '1 Comment', '% Comments') ?> </h3><!-- show comments number -->
        <?php
            echo '<ul class="list-unstyled comments-list">';
            $comments_arg = array(
                'max_depth' => 3,
                'type' => 'comment',
                'avatar_size' => 40
            );
            wp_list_comments($comments_arg); // list all comments on the post
            echo '</ul>';
            echo '<hr class="comment-separator">';
            $commentform_Args = array(
//                'fields' => array(
//                    'author' => '<div class="form-group"><label>Your Name</label> <input class="form-control"> </div>',
//                    'email' => '<div class="form-group"><label>Email</label> This Is Email Field </div>',
//                    'url' => '<div class="form-group"><label>URL</label> This Is URL Field </div>'
//                ),
//                'comment_filed' => '<div class="form-group">Textarea</div>'
                'title_reply' => 'Add Your Comment', // change add comment text
                'title _reply_to' => 'Add a Reply to [%s]', // change add reply to text
                'class_submit' => 'btn btn-primary btn-md', // change submit button class
                'comment_notes_before' => '' // disable email message
            
            );
            comment_form($commentform_Args); // show the form with the array
    } else {
        echo 'Sorry Comments Are Disabled';
    }
