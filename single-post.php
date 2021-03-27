<?php get_header(); ?>

<?php
$category_id = $categories[0]->cat_ID;
?>

<div class="container">

    <div class="single-post">
        <h2 class="post-category"> <?php echo get_the_category($id)[0]->name ?> </h2>
        <h1 class="post-title"> <?php the_title(''); ?> </h1>
        <?php if (has_post_thumbnail()) { ?>
            <div class="lead-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
        <?php }; ?>
        <div class="body-content">
            <?php the_content(); ?>
        </div>
        <div class="post-date"><?php the_date(); ?></div>
    </div>

    <div class="single-post-related">
        <div class="heading">
            <span class="readmore">Read More on </span>
            <span class="category"><?php echo get_the_category($id)[0]->name ?></span>
        </div>

        <div class="post-list row">
            <?php $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category__in' => wp_get_post_categories($post->ID),
                'post__not_in' => array($post->ID),
                'posts_per_page' => 3,
                'order' => 'ASC'
            );

            $blog_posts = new WP_Query($args);
            if ($blog_posts->have_posts()) {
                while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-6 m-b-30">
                        <div class="blog-posts-box">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <div class="card-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" />
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="post-white-box">
                                <h4 class="blog-posts-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <span class="post-box-span excerpt-block d-block"><?php the_excerpt(); ?></span>
                                <a href="<?php the_permalink(); ?>" class="blog-readmore-btn">Read more<i class="fa fa-arrow-right"></i></a>
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

<?php get_footer(); ?>