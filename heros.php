<?php

require __DIR__.'/sin.php';


//$url = "https://gateway.marvel.com/v1/public/characters?limit=100&ts=1&apikey=cd781849dca4971f891ee8eadc42e296&hash=1a49ccb35f2f968a4e1f995c8af65492";

$heros = getUsers();

////$result = file_get_contents($url);
// Will dump a beauty json :3
//$result= json_decode($result, true);





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
          <?php  foreach ($heros as $hero): ?>
            <?php if(isset($hero['name'])):  ?>
                <?php if($hero =='thumbnail'){
                    $heropic = $hero['thumbnail']['path'] . "." . $hero['thumbnail']['extension']; } ?>
               
                    <div class="card mb-2 border-info">
                    <p class="card-header"><? echo $hero['name']?></p>
                        <div class="card-body" style="margin-top:10px ; margin-left:10px;">
                        <h5 class="card-title"><a href="santi.php?id=<? echo $hero['id']?>" class="card-link">Descripcion</a></h5>
                           <img src="<? echo $hero['thumbnail']['path'].'.'.$hero['thumbnail']['extension'] ?>" alt=""  style="width:200px; height:200px" class="card-img-top">
                           <div class="card-body">
                           <a href="#" class="card-link">Card link</a>
                           <a href="#" class="card-link">Another link</a>
                           </div>
                            
                            
                        
                        </div>
                    </div>

              


             <?php endif ?>
        
        
        
       
        <?php endforeach ?>
       </div>
   </div>



</body>
</html>