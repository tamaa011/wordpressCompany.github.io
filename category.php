<?php get_header(); ?>
<?php 
    //get category count
    $cat = get_queried_object(); // get object
    $posts_count = $cat->count; //get posts count
?>
<!--add post from database-->
    <div class="container home-page">
        <div class="row">
            <div class="category-information text-center">
            <div class="col-md-6 col-sm-6">
                <h1 class="category-title"><?php single_cat_title() ?> </h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="cat-stats">
                    <span>Items Count: <?php echo $posts_count ?></span>
                </div>
            </div>
                <div class="clearfix"></div>
            </div>
            
            <?php 
                if (have_posts()) { // check if there is posts
                    while (have_posts()) { // loop through posts
                        the_post(); // loop through posts ?>
                        <div class="col-sm-6 col-md-6">
                            <div class="main-post">
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
                                    <?php the_excerpt() ?>
                                 <button class="btn btn-primary cl"> <a href="<?php echo the_permalink(); ?>">View Post </a></button>
                                </div>
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
                        </div>
                    <?php
                    } // end while loop
                } // end if
            echo '<div class="clearfix"></div>';
//            echo '<div class="post-pagination">';
//                if (get_previous_posts_link()) { // check for prev pages
//                    previous_posts_link('<i class="fa fa-chevron-left  fa-lg" aria-hidden="true"></i> Prev'); // if there is prev page it will show this
//                } else {
//                    echo '<span class="prev"> Prev </span>'; // if there is not prev page this will show 
//                }
//                if (get_next_posts_link()) { // check for next pages
//                    next_posts_link('Next <i class="fa fa-chevron-right  fa-lg" aria-hidden="true"></i>'); // if there is prenextv page it will show this
//                } else {
//                    echo '<span class="next"> Next </span>'; // if there is not next page this will show
//                }
//            echo '</div>';
            ?> 
        </div>
        <div class="pagination-number">
             <?php echo numbering_pagination () ?>
        </div>
    </div>

<!--add post from database-->

<?php get_footer(); ?>