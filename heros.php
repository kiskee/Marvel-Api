<?php
require __DIR__.'/functions.php';
$heros = getUsers();
include 'includes/header.php';
?>

   <div class="container">
       <div class="row">
          <?php  foreach ($heros as $hero): ?>
            <?php if(isset($hero['name'])):  ?>
                <?php if($hero =='thumbnail'){
                    $heropic = $hero['thumbnail']['path'] . "." . $hero['thumbnail']['extension']; } ?>
               
                    <div class="card mb-2 border-info">
                    <p class="card-header text-center"><a href="hero.php?id=<? echo $hero['id']?>" class="card-link"><? echo $hero['name']?> </a></p>
                        <div class="card-body text-center" style="margin-top:10px ; margin-left:10px;">
                        <h5 class="card-title"><a href="santi.php?id=<? echo $hero['id']?>" class="card-link">Descripcion</a></h5>
                           <img src="<? echo $hero['thumbnail']['path'].'.'.$hero['thumbnail']['extension'] ?>" alt=""  style="width:200px; height:200px" class="card-img-top"></img>
                           <div class="card-body">
                           <a href="comics.php?id=<? echo $hero['id']?>" class="card-link">Comics</a>
                           <a href="#" class="card-link">Series</a>
                           <a href="#" class="card-link">Stories</a>
                           <a href="#" class="card-link">Events</a>  
                           </div>
                            
                            
                        
                        </div>
                    </div>

              


             <?php endif ?>
        
        
        
       
        <?php endforeach ?>
       </div>
   </div>



</body>
</html>