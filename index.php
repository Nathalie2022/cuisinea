<?php
    require_once('templates/header.php');
    require_once('lib/recipe.php');

    $recipes = getRecipes($pdo, _HOME_RECIPES_LIMIT_);

?>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/images/logo-cuisinea.jpg" alt="logo Cuisinea">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Cuisinea - Recettes de cuisine</h1>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat soluta amet ipsa hic optio expedita ad quis dolorem minus, blanditiis numquam neque, deleniti repudiandae eum facilis aut a suscipit et.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="recettes" class="btn btn-primary">Voir nos recettes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-5">

        <?php foreach ($recipes as $key => $recipe){ 
            include('templates/recipe_partial.php');
        } ?>

    </div>
    
    <?php 
   require_once('templates/footer.php');
    ?>

    