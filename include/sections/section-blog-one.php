<?php if (have_rows('sections_blog')) : ?>
    <?php while (have_rows('sections_blog')) : the_row(); ?>
        <?php if (get_row_layout() == 'sections_blog_one') : ?>
            <div class="container  mt-5" id="">


                <h2 class="content_title text-center"><?php the_sub_field('section-title'); ?></h2>


            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="essential-reading">
    <div class="container">
        <div class="d-flex es-posts-content">
            <div class="">
                <?php $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'tag' => 'essential-reading',
                    'order' => 'ASC',
                );
                $blog_posts = null;
                $blog_posts = new WP_Query($args);
                if ($blog_posts->have_posts()) {
                    while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                        <div class="important-post">
                            <div class="blog-posts-box">
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                <div class="es-important-postbox">
                                    <h4 class="blog-posts-title"><a href="<?php the_permalink(); ?>"
                                                                    title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <a href="<?php the_permalink(); ?>" class="blog-readmore-btn">Read more<i
                                                class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                }
                wp_reset_query();
                ?>
            </div>

            <div class="es-rightSide">
                <?php $args2 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'tag' => 'essential-reading',
                    'offset' => 1,
                    'order' => 'ASC',
                );
                $blog_posts2 = null;
                $blog_posts2 = new WP_Query($args2);
                if ($blog_posts2->have_posts()) {
                    while ($blog_posts2->have_posts()) : $blog_posts2->the_post(); ?>
                        <div class="es-postbox">
                            <div class="blog-posts-box">
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php the_title_attribute(); ?>"></a>
                                <div class="es-rightPosts">
                                    <h4 class="blog-posts-title"><a href="<?php the_permalink(); ?>"
                                                                    title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <a href="<?php the_permalink(); ?>" class="blog-readmore-btn">Read more<i
                                                class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                }
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>