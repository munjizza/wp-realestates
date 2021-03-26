<?php if (have_rows('sections_blog')) : ?>
    <?php while (have_rows('sections_blog')) : the_row(); ?>
        <?php if (get_row_layout() == 'sections_blog_two') : ?>
            <div class="container blog-section position-relative" id="section_blog_two">



                <h2 class="content_title text-center"><?php the_sub_field('section-title'); ?></h2>


                <div class="row align-items-start justify-content-between cards-top3 mt-5">

                    <?php $the_query = new WP_Query('posts_per_page=3'); ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>


                <img src="<?php the_sub_field('bg-left-narrow'); ?> " class="blog-section-bg-img" />


            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>