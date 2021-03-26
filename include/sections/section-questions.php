<?php if (have_rows('questions')) : ?>
    <?php while (have_rows('questions')) : the_row(); ?>
        <?php if (get_row_layout() == 'questions') : ?>

            <h2 class="content_title text-center mt-5"><?php the_sub_field('heading_title'); ?></h2>
            <p class="content_lead text-center mt-5 questions-heding-lead-text"><?php the_sub_field('heading_text'); ?></p>


            <div class="justify-content-center">
                <?php if (have_rows('accordions')) : while (have_rows('accordions')) : the_row(); ?>
                        <ul class="accordions">
                            <li class="accordion">
                                <div class="question_title">
                                    <span class="number"><?php the_sub_field('number'); ?></span>
                                    <span class="question"><?php the_sub_field('question'); ?></span>
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