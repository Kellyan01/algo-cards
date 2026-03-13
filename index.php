<?php
require_once 'data.php';

//Mise en place de $tabData
$tabData = [];

//Remplissage de $tabData
array_push($tabData, $USERS_HUMAN, $USERS_PET, $USERS_XENO);

//AfficherHuamin()
function afficherHumain($user){
    echo "<article style= 'border-bottom : 3px solid black '>
        <h2>nom : {$user['name']}</h2>
        <p>email : {$user['email']}</p>
        <p>age : {$user['age']} ans</p>
    </article>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <?php 
            //Test de fonction
            afficherHumain($USERS_HUMAN[0]);
        ?>
    </main>
    <footer></footer>
</body>
</html>