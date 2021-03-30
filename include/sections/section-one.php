<?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_one') : ?>

            <?php $bgd_image = get_field('blue_wave_bgd'); ?>
            <div id="section-one" style="background-image: url(<?php echo $bgd_image ?>)">

                <div class="row container align-items-center justify-content-between">
                    <div class="content col-md-6">
                        <h1 class="content_title"><?php the_sub_field('content_title'); ?></h1>
                        <p class="content_lead"><?php the_sub_field('content_lead'); ?></p>
                        <div class="content_link_btn">
                            <?php $link = get_sub_field('content_link'); ?>
                            <a class="content-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                        </div>
                    </div>
                    <div class="illustration col-md-6 d-flex align-items-center justify-content-center">
                        <img src="<?php the_sub_field('illustration_1'); ?> " class="img-fluid" />
                    </div>
                </div>

            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>