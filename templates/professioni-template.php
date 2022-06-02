<?php
//Template Name: professioni
get_header();
?>
<div class="container my-5">
    <?php
    show_breadcrumbs()
    ?>

    <h1 class="mb-5">Tutte le professioni</h1>
    <section class="main-content home-content">
<?php
$query = new WP_Query([
    'post_type' => 'professione',
    'order_by' => 'post_title',
    'order' => 'DESC'
]);

if($query->have_posts()):
while($query->have_posts()):
    $query->the_post();
    $first_letter = get_the_title()[0];
    global $post;
?>
        <div class="cat-list" id="alphabetic-professions-list">
            <div class="row no-gutters">
                <div class="col-sm-6" id="professions-left-col">
                    <div class="letter-li" id="letter-<?=$first_letter?>">
                        <div class="letter"><?=$first_letter?></div>
                        <div class="cat-li-wrap">
                            <div class="cat-li-profession">
                                <a href="/professionista/commercialista" id="profession-<?=$post->post_name?>" class="cat-li">
                                    <div class="img-wrap"><img src="<?php the_post_thumbnail_url('full'); ?>"></div>
                                    <div class="cat-li-name" data-slug="<?=$post->post_name?>">
                                        <div class="profession-name-wrap"><?php the_title()?></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-sm-6" id="profession-children-left-col">

                            </div>
                            <div class="col-sm-6 d-none" id="profession-children-right-col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
endwhile;
endif;
?>
    </section>
</div>

<?php
get_footer();
?>