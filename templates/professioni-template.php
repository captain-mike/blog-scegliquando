<?php
//Template Name: professioni
get_header();
?>
<div class="container my-5">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>

    <h1 class="mb-5">Tutte le professioni</h1>
<section class="main-content home-content">

    <div class="cat-list" id="alphabetic-professions-list">
        <div class="row no-gutters">
            <div class="col-sm-6" id="professions-left-col"><div class="letter-li" id="letter-C">
        <div class="letter">C</div>
        <div class="cat-li-wrap">
        <div class="cat-li-profession">
        <a href="/professionista/commercialista" id="profession-commercialista" class="cat-li">
            <div class="img-wrap"><img src="https://scegliquando.imgix.net/images/07e9302b-a578-4c58-9d50-49447479f37a-commercialista.png?q=95h=90&amp;auto=format"></div>
            <div class="cat-li-name" data-slug="commercialista"><div class="profession-name-wrap">Commercialista</div></div>
        </a>
    </div></div>
    </div><div class="letter-li" id="letter-I">
        <div class="letter">I</div>
        <div class="cat-li-wrap">
        <div class="cat-li-profession">
        <a href="/professionista/idraulico" id="profession-idraulico" class="cat-li">
            <div class="img-wrap"><img src="https://scegliquando.imgix.net/images/9b3a1bd7-9907-48c7-947f-ad0fd068f25c-idraulico.png?q=95h=90&amp;auto=format"></div>
            <div class="cat-li-name" data-slug="idraulico"><div class="profession-name-wrap">Idraulico</div></div>
        </a>
    </div></div>
    </div></div>
            <div class="col-sm-6" id="professions-right-col"><div class="letter-li" id="letter-M">
        <div class="letter">M</div>
        <div class="cat-li-wrap">
        <div class="cat-li-profession">
        <a href="/professionista/muratore" id="profession-muratore" class="cat-li">
            <div class="img-wrap"><img src="https://scegliquando.imgix.net/images/f0c1252b-d66b-48b6-91f8-965437b9fcac-Muratore.png?q=95h=90&amp;auto=format"></div>
            <div class="cat-li-name" data-slug="muratore"><div class="profession-name-wrap">Muratore</div></div>
        </a>
    </div></div>
    </div></div>
        </div>
    </div>
    <div class="cat-list d-none" id="alphabetic-profession-children-list">
        <div class="row ">
            <div class="parentNameWrap col-10">
                <!-- <b>Categoria:</b> --> <span class="parentName"></span>
            </div>
            <div class="backToParents col-2">
                <i class="far fa-arrow-alt-circle-left"></i> <!-- Indietro -->
            </div>
            <!-- <div class="col separatorCol">
                <hr>
            </div> -->
        </div>
        <div class="row no-gutters">
            <div class="col-sm-6" id="profession-children-left-col">
                
            </div>
            <div class="col-sm-6 d-none" id="profession-children-right-col">
                
            </div>
        </div>
    </div>

</section>
</div>

<?php
get_footer();
?>