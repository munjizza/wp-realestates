<?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_five') : ?>
            <div class="home-section position-relative" id="section-five">
                <div class="container">

                    <h2 class="content_title text-center"><?php the_sub_field('content_title'); ?></h2>

                    <div class="image-holder center_bgd">
                        <img src="<?php the_sub_field('center_bgd'); ?> " />
                    </div>

                    <div class="row cards justify-content-between">
                        <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
                                <div class="col-lg-3 col-md-6 col-xs-12 d-flex justify-content-center">
                                    <div class="card house-card">
                                        <div class="card-thumb">
                                            <div class="image-holder"><img src="<?php the_sub_field('house_image'); ?>" class="img-fluid" /></div>
                                            <div class="image-info">
                                                <p class="price"><?php the_sub_field('price'); ?></p>
                                                <p class="description"><?php the_sub_field('description'); ?> </p>
                                            </div>
                                        </div>
                                        <div class="card-info">
                                            <div class="rent">
                                                <p><?php the_sub_field('rent_title'); ?></p>
                                                <p><?php the_sub_field('rent_value'); ?></p>
                                            </div>
                                            <div class="cap-rate">
                                                <p><?php the_sub_field('cap_rate_title'); ?></p>
                                                <p><?php the_sub_field('cap_rate_value'); ?></p>
                                            </div>
                                            <div class="return">
                                                <p><?php the_sub_field('return_title'); ?></p>
                                                <p><?php the_sub_field('return_value'); ?></p>
                                            </div>
                                            <div class="neighborhood">
                                                <p><?php the_sub_field('neighborhood_title'); ?></p>
                                                <p><?php the_sub_field('neighborhood_value'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>

                    <div class="content_link_btn text-center">
                        <?php $link = get_sub_field('content_link'); ?>
                        <a class="content-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                    </div>

                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>