<div class="container">

    <div class="home-section position-relative" id="section-houses">

        <?php if (have_rows('sections')) : ?>
            <?php while (have_rows('sections')) : the_row(); ?>
                <?php if (get_row_layout() == 'section_houses') : ?>
                    <div class="home-section position-relative" id="section-houses">

                        <h2 class="content_title text-center"><?php the_sub_field('content_title'); ?></h2>
                        <div class="image-holder center_bgd">
                            <img src="<?php the_sub_field('center_bgd'); ?> " />
                        </div>

                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php $loop = new WP_Query(array(
            'post_type' => 'investments',
            'posts_per_page' => 4
        )); ?>
        <div class="row cards justify-content-center">

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
<!--            <div class="entry-content">
                    <?php the_content(); ?>
                </div> -->
                <div class="col-lg-3 col-md-6 col-xs-12 d-flex justify-content-center">
                    <a href="<?php echo get_permalink() ?>">
                        <div class="card house-card">
                            <div class="card-thumb">
                                <div class="image-holder"><img src="<?php the_field('house_image'); ?>" class="img-fluid" /></div>
                                <div class="image-info">
                                    <p class="price"><?php the_field('price'); ?></p>
                                    <p class="description"><span><?php the_field('beds'); ?></span>,<span><?php the_field('bathrooms'); ?> | <?php the_field('squareft'); ?></span></p>
                                </div>
                            </div>
                            <div class="card-info">
                                <div class="rent">
                                    <p>rent</p>
                                    <p><?php the_field('rent_value'); ?></p>
                                </div>
                                <div class="cap-rate">
                                    <p>cap rate</p>
                                    <p><?php the_field('cap_rate_value'); ?></p>
                                </div>
                                <div class="return">
                                    <p>return</p>
                                    <p><?php the_field('return_value'); ?></p>
                                </div>
                                <div class="neighborhood">
                                    <p>neighborhood</p>
                                    <?php
                                    $ratingstar = get_field('stars');
                                    ?>
                                    <div class="rating-stars d-flex pt-2">
                                        <span class="fa fa-star <?php if ($ratingstar >= 1) { echo 'checked'; } ?>"></span>
                                        <span class="fa fa-star <?php if ($ratingstar >= 2) { echo 'checked'; } ?>"></span>
                                        <span class="fa fa-star <?php if ($ratingstar >= 3) { echo 'checked'; } ?>"></span>
                                        <span class="fa fa-star <?php if ($ratingstar >= 4) { echo 'checked'; } ?>"></span>
                                        <span class="fa fa-star <?php if ($ratingstar == 5) { echo 'checked'; } ?>"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="content_link_btn text-center">
            <a class="content-btn font-capitalize" href="<?php echo get_post_type_archive_link( 'investments' ); ?>">View All Investments</a>
        </div>
    </div>
</div>