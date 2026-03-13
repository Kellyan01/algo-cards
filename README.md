# LECTURE ET AFFICHAGE DE DONNEES ISSUES DE TABLEAUX ASSOCIATIFS

## Fichiers fournis
- data.php rempli avec 3 tableaux assignés à des constantes.
  
## Tâches à effectuer

Dans un nouveau projet algo-cards, initialisé en dépôt git :

1) Créer une branche développement, et vous mettre dessus. Créer un fichier index.php, et en faire un commit
   
2) Créer une branche displayCards, et vous mettre dessus
   
3) Dans index.php, faire un require once de data.php
   
4) Créer une variable $tabData et lui assigner un tableau vide.
   
5) Ajouter à $tabData les constantes $USERS_HUMAN, $USERS_PET et $USERS_XENO dans l'ordre de votre choix (vous pouvez vous renseigner sur la fonction array_push() ).
   
6) Créer la fonction afficherHumain() qui prendra un tableau associatif en paramètre.
Faire en sorte qu'elle affiche le profil d'un humain avec le code HTML suivant :
```html
<article style= 'border-bottom : 3px solid black '>
    <h2>nom : nom_de_l'objet</h2>
    <p>email : mail_de_l'objet</p>
    <p>age : age_de_l'objet ans</p>
</article>
```

7) Tester la fonction. Si le test passe, en faire un commit. Puis se déplacer sur la branche développement, et faire un merge de la branche displayCards. Puis revenir sur la branche displayCards.

8) Créer la fonction afficherAnimal() qui prendra un tableau associatif en paramètre.
Faire en sorte qu'elle affiche le profil d'un animal avec le code HTML suivant :
```html
<article style= 'border-bottom : 3px solid black '>
    <h2>nom : nom_de_l'objet</h2>
    <p>espece : espece_de_l'objet</p>
    <p>age : age_de_l'objet ans</p>
    <p>propriétaire : propriétaire_de_l'objet</p>
</article>
```

9) Tester la fonction. Si le test passe, en faire un commit. Puis se déplacer sur la branche développement, et faire un merge de la branche displayCards. Puis revenir sur la branche displayCards.
    
10) Créer la fonction afficherXeno() qui prendra un tableau associatif en paramètre.
Faire en sorte qu'elle affiche le profil d'un Xéno avec le code HTML suivant :
```html
<article style= 'border-bottom : 3px solid black '>
    <h2>nom : nom_de_l'objet</p>
    <p>espece : espece_de_l'objet</p>
    <p>age : age_de_l'objet ans</p>
    <p>niveau de menace: menace_de_l'objet</p>
</article>
```

11) Tester la fonction. Si le test passe, en faire un commit. Puis se déplacer sur la branche développement, et faire un merge de la branche displayCards. Puis revenir sur la branche displayCards.
    
12) Créer une fonction profil() qui prend en paramètre un tableau (qui contiendra des tableaux associatifs, à l’image de $USERS_HUMAN).

13) Faire en sorte que la fonction profil() parcourt chaque tableau associatif du tableau en paramètre.
    
14) Dans la fonction profil(), pour chaque tableau associatif, SI le tableau est de type "humain", appeler la fonction afficherHumain(). SINON SI le tableau est de type "animal de compagnie", appeler la fonction afficherAnimal(). SINON SI le tableau est de type "Xeno", appeler la fonction afficherXeno(). SINON afficher dans au sein d’un <p> dans  un <article>, le message d'erreur "Type de Profil non Existant".
    
15) Appeler la fonction profil() sur chacun des tableaux $USERS_HUMAN, $USERS_PET, $USERS_XENO.
    
16) Tester la fonction. Si le test passe, en faire un commit. Puis se déplacer sur la branche développement, et faire un merge de la branche displayCards. Puis revenir sur la branche displayCards.
    
17) Créer la fonction profilAll() qui prend en paramètre un grand tableau constitué de petits tableaux qui sont constitués de tableaux associatifs (voir la structure de $tabData)
    
18) Faire en sorte que la fonction profilAll() appelle la fonction profil() sur chaque petit tableau.
    
19) Appeler la fonction profilAll() sur le tableau $tabData.
    
20) Tester la fonction. Si le test passe, en faire un commit. Puis se déplacer sur la branche développement, et faire un merge de la branche displayCards.
    
21) Vous mettre sur la branche main, et merge la branche développement.
    
22) Push le dépôt distant sur Github, et envoyer le lien au formateur
