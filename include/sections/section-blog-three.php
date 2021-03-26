<?php if (have_rows('sections_blog')) : ?>
    <?php while (have_rows('sections_blog')) : the_row(); ?>
        <?php if (get_row_layout() == 'sections_blog_three') : ?>

            <div class="container blog-section position-relative" id="section_blog_three">

                <h2 class="content_title text-center"><?php the_sub_field('section-title'); ?></h2>

                <div class="row justify-between">
                    <?php if (have_rows('repeater_blog')) : while (have_rows('repeater_blog')) : the_row(); ?>
                            <div class="col-lg-4 col-md-6 col-xs-12">
                                <div class="guides">
                                    <div class="guide_text">
                                        <p class="label"><?php the_sub_field('label'); ?></p>
                                        <p class="title"><?php the_sub_field('title'); ?></p>
                                        <?php $link = get_sub_field('link'); ?>
                                        <a class="link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                                    </div>
                                    <div class="guide_img text-right">
                                        <img src="<?php the_sub_field('illustration'); ?>" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>

                <img src="<?php the_sub_field('bg-right-narrow'); ?> " class="blog-section-bg-img"/>

            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>