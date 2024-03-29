<?php


require __DIR__.'/functions.php';

if(!isset($_GET['id'])){
    include "includes/not_found.php";
    exit;
}
$heros = getUsers();
$userId = $_GET['id'];

$user = getUsersById($userId);

if(!$user){
    include "includes/not_found.php";
    exit;
}

include 'includes/header.php';

?>

<div class="container">
    <div class="row">
<div class="card">
    <div class="card-header text-center">
        <h3>View Hero: <?php echo $user['name']?></h3>
    </div>
    <div class="card-body text-center">
    <img src="<? echo $user['thumbnail']['path'].'.'.$user['thumbnail']['extension'] ?>" alt=""  style="width:200px; height:200px" class="card-img-top">
</br>
    <p class="card-text"><?php echo $user['description'] ?></p>
  </div>
    </div>


    
</body>
</html>