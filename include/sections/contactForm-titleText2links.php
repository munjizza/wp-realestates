<?php if (have_rows('contact')) : ?>
    <?php while (have_rows('contact')) : the_row(); ?>
        <?php if (get_row_layout() == 'contact') : ?>

            <h2 class="content_title text-center"><?php the_sub_field('heading_title'); ?></h2>

            <div class="row justify-content-between contact-container position-relative mt-5">

                <div class="col-md-6 form">
                    <?php echo do_shortcode('[contact-form-7 id="405" title="Contact form homepage"]'); ?>
                </div>

                <div class="col-md-6 pl-5">
                    <h2 class="contact_title"><?php the_sub_field('contact_title'); ?> <span><?php the_sub_field('contact_title_blue'); ?></span></h2>
                    <p class="content_lead"><?php the_sub_field('contact_lead'); ?></p>

                    <div class="content_link_btn mt-5">
                        <?php $linkBlue = get_sub_field('content_link_blue'); ?>
                        <?php $linkWhite = get_sub_field('content_link_white'); ?>
                        <a class="content-btn btn-blue" href="<?php echo $linkBlue['url'] ?>"><?php echo $linkBlue['title'] ?></a>
                        <a class="content-btn btn-white" href="<?php echo $linkWhite['url'] ?>"><?php echo $linkWhite['title'] ?></a>
                    </div>
                </div>

            </div>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>