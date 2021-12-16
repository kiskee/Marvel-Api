<?php
include 'includes/header.php';



?>


<!--
<div class="container">
    <p>
        <a class="btn btn-outline-success"  href="create.php">Create new User</a>
    </p>
<table class="table table-hover table-dark">
    <thead class="table-info">
        <tr>
            <th>Name</th>
            <th>id</th>
            <th>modified</th>
            <th>resourceURI</th>
            
        </tr>
    </thead>
<tbody>
        <?php foreach($datos as $user ):?>
        <tr>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['modified'] ?></td>
            <td><?php echo $user['resourceURI'] ?></td>
           
            
        </tr>
        <?php endforeach;  ?>
    </tbody>

    </table>
</div>-->

<form action="" method="get">
            <label for="character"></label>
            <input type="text" name="character" value="">
            <button type="submit" name="button">Buscar</button>


</form>


<?php    

if(isset($_GET['character'])){
    $character = $_GET['character'];
    $char = str_replace(' ','%20',$character);
$url = "https://gateway.marvel.com/v1/public/characters?name=".$char."&limit=100&ts=1&apikey=cd781849dca4971f891ee8eadc42e296&hash=1a49ccb35f2f968a4e1f995c8af65492";



$result = file_get_contents($url);
// Will dump a beauty json :3
$data = json_decode($result, true);

var_dump($data['data']['results']);

}



?>

<?php include 'includes/footer.php';?>