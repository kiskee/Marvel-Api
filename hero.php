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
    <div class="row text-center">
    <div class="card mb-3 text-center">
  <h3 class="card-header"> <?php echo $user['name']?></h3>
  <div class="card-body text-center">
  <img src="<? echo $user['thumbnail']['path'].'.'.$user['thumbnail']['extension'] ?>" alt=""  style="width:200px; height:200px" class="card-img-top"></img>
</div>
  <div class="card-body text-center">
      <?php if($user['description']==""): ?>
        <?php   include "includes/alert.php"; ?>
        <?php else : ?>
  <p class="card-text"><?php echo $user['description'] ?></p>
  
  <?php endif ?>
  </div>
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="comics.php?id=<? echo $hero['id']?>" class="card-link">Comics</a>
    <span class="badge bg-primary rounded-pill"><? echo $user['comics']['available'] ?></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="comics.php?id=<? echo $hero['id']?>" class="card-link">Series</a>
    <span class="badge bg-primary rounded-pill"><? echo $user['series']['available'] ?></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="comics.php?id=<? echo $hero['id']?>" class="card-link">Stories</a>
    <span class="badge bg-primary rounded-pill"><? echo $user['stories']['available'] ?></span>
  </li>
</ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
    

    </div>
</div>
</body>
</html> 

