<?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_three') : ?>
            <div class="home-section position-relative" id="section-three">
                <div class="container">

                    <h2 class="content_title text-center"><?php the_sub_field('content_title'); ?></h2>

                    <div class="image-holder center_bgd">
                        <img src="<?php the_sub_field('center_bgd'); ?> " />
                    </div>

                    <div class="row cards justify-content-between">
                        <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
                                <div class="col-lg-3 col-md-6 col-xs-12 d-flex justify-content-center">
                                    <div class="card text-center">
                                        <div class="card-icon d-flex align-items-center justify-content-center">
                                            <p class="card_icon_number"><?php the_sub_field('card_icon_number'); ?></p>
                                            <div class="image-holder"><img src="<?php the_sub_field('card_icon_image'); ?> " /></div>
                                        </div>
                                        <div class="card-content">
                                            <h3><?php the_sub_field('card_title'); ?></h3>
                                            <p class="card-text"><?php the_sub_field('card_text'); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>