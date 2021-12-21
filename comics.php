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

    <table class="table table-hover table-dark">
    <thead class="table-info">
        <tr>
            <th>Name</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($user['comics']['items'] as $comic ):?>
        <tr>           
            <td><a target="_blank" href="<?php echo $comic['resourceURI'] ?>">
            <?php echo  $comic['name'] ?></td>           
           
        </tr>
        <?php endforeach;  ?>
    </tbody>



</table>
  </div>
    </div>


    
</body>
</html>