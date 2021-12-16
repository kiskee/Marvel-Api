<?php

function getUsers(){
    $url = "https://gateway.marvel.com/v1/public/characters?limit=100&ts=1&apikey=cd781849dca4971f891ee8eadc42e296&hash=1a49ccb35f2f968a4e1f995c8af65492";



$result = file_get_contents($url);
// Will dump a beauty json :3
$result = json_decode($result, true);
$heros = $result['data']['results'];

return $heros;
   
 
 }


 function getUsersById($id){

    $users = getUsers();
    foreach ($users as $user){
        if($user['id']==$id){
            return $user;
        }
        
    }
    return null;

}


?>