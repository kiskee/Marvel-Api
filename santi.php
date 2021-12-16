<?php


require __DIR__.'/sin.php';

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



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN" crossorigin="anonymous">

    <title>Marvel api </title>
</head>
<body>

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