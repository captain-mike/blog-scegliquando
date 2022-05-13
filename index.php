<?php get_header(); ?>
<div class="row">

</div>
<div class="row">

    <main id="content" role="main">
        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4">

                <div class="post-image">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="post-preview">
                    <h4><?php the_title() ?></h4>
                    <div><?php the_date() ?></div>
                    <div><?php the_excerpt() ?></div>
                </div>
                
                
            </div>
            <?php endwhile;
        endif; ?>
        </div>
        <?php get_template_part('nav', 'below'); ?>
    </main>
</div>
<?php get_footer(); ?>