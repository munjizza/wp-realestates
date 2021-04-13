<?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_four') : ?>
            <div class="home-section position-relative" id="section-four">
                <div class="container">

                    <h2 class="content_title text-center"><span><?php the_sub_field('content_title_orange'); ?></span> <?php the_sub_field('content_title'); ?></h2>
                    <p class="content_lead text-center"><?php the_sub_field('content_lead'); ?></p>

                    <div class="chart">
                        <?php echo do_shortcode('[visualizer id="156" lazy="no" class=""]'); ?>
                    </div>
                    
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>