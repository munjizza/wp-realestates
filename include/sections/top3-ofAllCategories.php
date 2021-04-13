<?php if (have_rows('sections_blog')) : ?>
    <?php while (have_rows('sections_blog')) : the_row(); ?>
        <?php if (get_row_layout() == 'sections_blog_four') : ?>
            <div class="blog_container blog-section">

                <h2 class="content_title text-center"><?php the_sub_field('section-title'); ?></h2>
                <?php
                //for each category, show 3 posts
                $cat_args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                );
                $categories = get_categories($cat_args);
                foreach ($categories as $category) {
                    $args = array(
                        'showposts' => 3,
                        'category__in' => array($category->term_id),
                        'caller_get_posts' => 1
                    );
                ?>
                    <div class="blog-category">
                        <div class="container">
                            <?php

                            $posts = get_posts($args);
                            if ($posts) {
                                echo '<h3 class="post-category mt-5"><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . '</a> </h3> ';
                            ?>
                                <div class="row align-items-start justify-content-between cards-top3">

                                    <?php foreach ($posts as $post) {
                                        setup_postdata($post); ?>

                                        <div class="col-md-4 d-flex justify-content-center">
                                            <div class="card">
                                                <div class="card-img">

                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" />
                                                    <?php endif; ?>

                                                </div>
                                                <div class="card-content">
                                                    <a class="box-title card-title text-uppercase"><?php the_title(); ?></a>
                                                    <?php $excerpt = get_the_excerpt(); ?>
                                                    <p class="box-text card-text"><?php echo $excerpt ?></p>
                                                    <a class="content-link" href="<?php the_permalink(); ?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>

                                </div>

                                <?php echo '<div class="text-right pr-5 pt-4 pb-5"><a class="all-in-category-link" href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>See all Articles on ' . $category->name . '</a></div>'; ?>

                            <?php
                            } // if ($posts


                            ?>
                        </div>
                    </div>
                <?php


                } // foreach($categories
                ?>



            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>