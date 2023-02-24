<?php
    require_once('templates/header.php');
    require_once('lib/tools.php');
    require_once('lib/recipe.php');

    $id = (int)$_GET['id'];

    $recipe = getRecipeById($pdo, $id);

    if ($recipe){
    
        $ingredients = linesToArray($recipe['ingredients']);
        $instructions = linesToArray($recipe['instructions']);
?>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid" alt="<?=$recipe['title'] ?>" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?=$recipe['title'] ?></h1>
            <p class="lead"><?=$recipe['description'] ?></p>
        </div>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <h2>Ingrédients</h2>
        <ul class="list-group">
            <?php foreach ($ingredients as $ingredient){?>
                <li class="list-group-item"><?= $ingredient;?></li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <h2>Instructions</h2>
        <ol class="list-group">
            <?php foreach ($instructions as $instruction){?>
                <li class="list-group-item"><?= $ingredient;?></li>
            <?php } ?>
        </ol>
    </div>
</div>

<?php } else{?>
    <div class="row text-center">
        <h2>Recette introuvable</h2>
    </div>
<?php } ?>

<?php 
   require_once('templates/footer.php');
?>
