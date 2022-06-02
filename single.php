<?php get_header(); ?>
<main id="content" role="main">
    <div class="container my-5">
        <div class="bg-grey">
            Ti trovi qui: <?php show_breadcrumbs() ?>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="post-title mb-5"><?php the_title(); ?></h1>
            <div id="post-content">
                <div class="post-thumb">
                    <?php the_post_thumbnail();?>
                </div>
                <?php the_content() ?>
                <hr class="clearfix">
            </div>

        <?php endwhile;
        endif; ?>
        <footer class="footer">
            <?php get_template_part('nav', 'below-single'); ?>
        </footer>
    </div>
</main>
<?php get_footer(); ?>