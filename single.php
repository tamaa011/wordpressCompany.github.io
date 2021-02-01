<?php get_header(); ?>
<!--add post from database-->
    <div class="container post-page">
        <div class="row">
            <div class="col-md-9">
                <?php get_search_form() ?>
            <?php 
                if (have_posts()) { // check if there is posts
                    while (have_posts()) { // loop through posts
                        the_post(); // loop through posts ?>
                            <div class="main-post single-post">
                                <?php edit_post_link('Edit <i class="fa fa-pencil"></i>') ?>
                                <h3 class="post-title">
                                    <a href="<?php the_permalink() ?>"> <!-- to add the links -->
                                        <?php the_title() ?> <!--to add post title   ('before,'after') -->
                                    </a>
                                </h3>
                                <span class="post-author">
                                    <i class="fa fa-user fa-fw"></i> <?php the_author_posts_link() ?>, <!--to add the author -->
                                </span>
                                <span class="post-date">
                                    <i class="fa fa-calendar fa-fw"></i> <?php echo get_the_date('F j, Y') ?>, <!--to add the post data (for time (the time)) -->
                                </span>
                                <span class="post-comments">
                                    <i class="fa fa-comments-o fa-fw"></i> <?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comments-url', 'Comments Disabled') ?>
                                    <!--to add the Comments viewer comments_popup_link('0 Comments', '1 Comment', 'number of Comments', 'class', 'Comments Disabled') -->
                                </span>
                                <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'img' ] ) ?>
                                    <!--to add the img viewer the_post_thumbnail('size', []) -->
                                <div class="post-content">
                                    <?php the_content() ?>
                                </div>
                                <hr>
                                <div class="order">
                                    <div class="call col-md-8">
                                        <span class="head">To Make Order Please Call </span>
                                            <p>01272111470</p>
                                            <p> 01016422738 </p>
                                    </div>
                                    <div class="mail col-md-4">
                                        <span class="head">Or Send Email To </span>
                                            <p><a>mohamed.tamaa@smartcomput.net</a> </p>
                                            <p><a>d.yousef@smartcomput.net</a></p>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <p class="cate">
                                    <i class="fa fa-tags fa-fw"></i>
                                        <?php the_category(', ') ?> <!--to add the category ('separtors') -->
                                </p>
                                <p class="tags"> 
                                    <?php if (has_tag()) { // check if it has tag
                                            the_tags(); // to add the tags
                                        } else {
                                            echo 'there is no tags';
                                        }       
                                         
                                    ?>
                                </p>
                            </div>
                    <?php
                    } // end while loop
                } // end if
               
                echo '<div class="clearfix"></div>';
                    echo '<div class="post-pagination">';
                        if (get_previous_post_link()) { // check for prev pages
                            previous_post_link('%link', '<i class="fa fa-chevron-left  fa-lg pre" aria-hidden="true"></i> Previous Post: %title'); // if there is prev page it will show this
                        } else {
                            echo '<span class="prev"> No Previous Posts </span>'; // if there is not prev page this will show 
                        }
                        if (get_next_post_link()) { // check for next pages
                            next_post_link('%link', 'Next Post: %title <i class="fa fa-chevron-right  fa-lg nex" aria-hidden="true"></i>'); // if there is prenextv page it will show this
                        } else {
                            echo '<span class="next"> No Next Posts</span>'; // if there is not next page this will show
                        }
                    echo '</div>';
                    echo '<hr class="comment-separator">';
                        comments_template(); // view comments

            ?> 
                </div>
            <div class="col-md-3 col-sm-3">
                <div class="sidebar">
                    <?php
                   get_sidebar();
                    
//                        if(is_active_sidebar('main-sidebar')) {
//                            dynamic_sidebar('main-sidebar');
//                        }
                    ?>
                </div>
            </div>
                <div class="clearfix"></div>
            </div>
    </div>

<!--add post from database-->

<?php get_footer(); ?>