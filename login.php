<?php 
require_once('templates/header.php');
require_once('lib/user.php');

$errors = [];
$messages = [];

if (isset($_POST['loginUser'])){

    $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    if($user){
        $_SESSION['user'] = ['email' =>$user['email']];
        header('location: index.php');
    }else{
        $errors[] = 'Email ou mot de passe incorrect';
    }
}
?>

<div class="container col-xxl-8 px-4 py-5">
<h1>Connexion</h1>
</div>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success container col-xxl-8 px-4 py-5">
        <?=$message;?>
    </div>
<?php }?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger container col-xxl-8 px-4 py-5">
        <?=$error;?>
    </div>
<?php }?>
<div class="container col-xxl-8 px-4 py-5">
<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    
    <input type="submit" value="Connexion" name="loginUser" class="btn btn-primary">
</form>
</div>
<?php 
   require_once('templates/footer.php');
?>