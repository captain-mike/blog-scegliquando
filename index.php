<?php get_header(); ?>
<div class="post-slider">
    <?php
    
       
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 6
    ];

    $query = new WP_Query($args);

    if($query->have_posts()):
    while($query->have_posts()): 
    $query->the_post();
    ?>

    <div class="post-slide" style="background-image:url(<?=the_post_thumbnail_url()?>)">
        <a href="<?=the_permalink()?>">
            <div class="overlay">

            </div>
            <div class="post-preview">
                <h4><?php the_title() ?></h4>
                <div><?php the_date() ?></div>
            </div>
        </a>
    </div>

    <?php endwhile;
    endif;


    ?>

</div>
<div class="container">


<div class="row mt-5">

    <main id="content" class="col-lg-9" role="main">
        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4 post-item">

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
    <aside class="col-lg-3">
        <?php get_sidebar(); ?>
    </aside>
</div>

</div>
<?php get_footer(); ?>