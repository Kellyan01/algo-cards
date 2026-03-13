<?php
require_once 'data.php';

//Mise en place de $tabData
$tabData = [];

//Remplissage de $tabData
array_push($tabData, $USERS_HUMAN, $USERS_PET, $USERS_XENO);

//AfficherHumain()
function afficherHumain($user){
    echo "<article style= 'border-bottom : 3px solid black '>
        <h2>nom : {$user['name']}</h2>
        <p>email : {$user['email']}</p>
        <p>age : {$user['age']} ans</p>
    </article>";
}

//AfficherAnimal()
function afficherAnimal($animal){
    echo "<article style= 'border-bottom : 3px solid black '>
        <h2>nom : {$animal['name']}</h2>
        <p>espece : {$animal['espece']}</p>
        <p>age : {$animal['age']} ans</p>
        <p>propriétaire : {$animal['propriétaire']}</p>
    </article>";
}

//AfficherXeno()
function afficherXeno($xeno){
    echo "<article style= 'border-bottom : 3px solid black '>
        <h2>nom : {$xeno['name']}</h2>
        <p>espece : {$xeno['espece']}</p>
        <p>age : {$xeno['age']} ans</p>
        <p>niveau de menace: {$xeno['menace']}</p>
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
            afficherAnimal($USERS_PET[0]);
            afficherXeno($USERS_XENO[0]);
        ?>
    </main>
    <footer></footer>
</body>
</html>