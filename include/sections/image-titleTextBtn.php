<?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_two') : ?>
            <div class="home-section position-relative" id="about">

                <div class="container row align-items-center justify-content-between">

                    <div class=" col-md-6 image-holder d-flex align-items-center justify-content-center">
                        <img src="<?php the_sub_field('illustration_2'); ?>" class="img-fluid" />  
                    </div>

                    <div class="image-bgd" style="background-image: url('<?php the_sub_field('blue_left_bgd'); ?>')"></div>

                    <div class=" col-md-6 content">
                        <h2 class="content_title"><?php the_sub_field('content_title'); ?> <span><?php the_sub_field('content_title_orange'); ?></span></h2>
                        <p class="content_lead"><?php the_sub_field('content_lead'); ?></p>
                        <div class="content_link_btn">
                            <?php $link = get_sub_field('content_link'); ?>
                            <a class="content-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                        </div>
                    </div>

                </div>

            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>