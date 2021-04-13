<?php $loop = new WP_Query(array(
    'post_type' => 'sections',
    'posts_per_page' => 1
)); ?>
<div>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

        <?php if (have_rows('faq')) : ?>
            <?php while (have_rows('faq')) : the_row(); ?>
                <?php if (get_row_layout() == 'faq') : ?>

                    <h2 class="content_title text-center mt-5"><?php the_sub_field('heading'); ?></h2>
                    <p class="content_lead text-center mt-5 questions-heding-lead-text"><?php the_sub_field('lead_text'); ?></p>

                    <div class="justify-content-center">
                        <?php if (have_rows('questions')) : while (have_rows('questions')) : the_row(); ?>
                                <ul class="accordions">
                                    <li class="accordion">
                                        <div class="question_title">
                                            <span class="number"><?php the_sub_field('question_number'); ?></span>
                                            <span class="question"><?php the_sub_field('question_title'); ?></span>
                                        </div>
                                        <div class="question_text content_lead"><?php the_sub_field('question_text'); ?></div>
                                    </li>
                                </ul>
                        <?php endwhile;
                        endif; ?>
                    </div>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    <?php endwhile; ?>
</div>