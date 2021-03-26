<?php get_header('pages'); ?>

<div class="container single-post">

    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php echo '<h2 class="post-category">' . get_the_category($id)[0]->name . '</h2>'; ?>
                <h1 class="post-title"> <?php the_title(''); ?></h1>

                <?php if (has_post_thumbnail($post->ID)) { ?>
                    <div class="lead-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                <?php }; ?>

                <div class="body-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-date"><?php the_date(); ?></div>

            </article>

    <?php endwhile;
    endif; ?>


</div>

<?php get_footer(); ?>