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
        <div class="post-box-span excerpt-block d-block"><?php the_excerpt(); ?></div>
        <table class="container-fluid mt-4 mb-5 bg-light">
            <thead class="font-weight-bold">
                <td>price</td>
                <td>beds</td>
                <td>bathrooms</td>
                <td>squareft</td>
                <td>rent</td>
                <td>cap rate</td>
                <td>return</td>
                <td>rate</td>
            </thead>
            <tbody>
                <td><?php the_field('price'); ?></td>
                <td><?php the_field('beds'); ?></td>
                <td><?php the_field('bathrooms'); ?></td>
                <td><?php the_field('squareft'); ?></td>
                <td><?php the_field('rent_value'); ?></td>
                <td><?php the_field('cap_rate_value'); ?></td>
                <td><?php the_field('return_value'); ?></td>
                <td class="rating-stars d-flex">
                    <?php
                    $ratingstar = get_field('stars');
                    ?>
                    <span class="fa fa-star <?php if ($ratingstar >= 1) { echo 'checked'; } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar >= 2) { echo 'checked'; } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar >= 3) { echo 'checked'; } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar >= 4) { echo 'checked'; } ?>"></span>
                    <span class="fa fa-star <?php if ($ratingstar == 5) { echo 'checked'; } ?>"></span>
                </td>
            </tbody>
        </table>
        <div class="body-content">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="single-post-related">
        <div class="heading">
            <h4 class="readmore mt-5 font-weight-bold mb-3">See other houses</h4>
        </div>

        <div class="post-list row">
            <?php
            $house_posts = new WP_Query(array(
                'post_type' => 'investments',
                'post__not_in' => array($post->ID),
                'posts_per_page' => 3,
                'order' => 'ASC'
            ));
            if ($house_posts->have_posts()) {
                while ($house_posts->have_posts()) : $house_posts->the_post(); ?>

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