<!-- 
  #1 - Afficher la première salle 1️⃣
dans la page "en salle", ajouter un titre "Salles" après la liste des films
puis ajouter une balise <ul>
puis à l'intérieur ajouter une balise <li>
dans cette balise <li>, ouvrir l'interpréteur PHP pour qu'il affiche "Athéna"
en utilisant le tableau $rooms 😉
#2 - Afficher la deuxième salle 2️⃣
ajouter une seconde balise <li>
dans cette balise <li>, ouvrir l'interpréteur PHP pour qu'il affiche "Dyonisos"
en utilisant le tableau $rooms 😉
#3 - Analyser 🔎
les 2 lignes de code pour les deux <li> sont quasiment similaires
trouver LA partie changeante qui sera à remplacer par une variable
cette variable sera donc la variable qui va "boucler", changer de valeur dans la boucle
Etapes intermédiaires en cas de blocage pour écrire la boucle de l'étape #4
#4 - Boucler ➿
Rappels

les étapes précédentes nous ont permis de cibler le code à répéter dans une boucle
$rooms est le tableau contenant la liste des salles à afficher
Todo

on va remplacer les 2 affichages "<li>" par une boucle
écrire une boucle (avec while ou for) permettant de changer la valeur de la variable "trouvée" en étape #3
initialiser cette variable avec la première valeur (permettant d'avoir la première salle)
boucler "tant que" la variable n'a pas dépassé la dernière valeur (permettant d'avoir la dernière salle)
entre chaque "boucle"/"iteration" ajouter 1 à la variable
entre les accolades de cette boucle { ... }, le code va se répéter, s'exécuter à chaque "boucle"/"iteration"
y placer l'affichage d'un <li> avec le nom de salle
ce qu'on a fait en étape 3
si besoin, commencer sans les <li>, et les rajouter ensuite
toutes les salles du tableau $rooms doivent s'afficher
 -->

<?php include("../templates/header.php"); ?>
<?php

    // Pour appeler ce fichier
    // je tape dans le navigateur :
    // http://localhost/{mon_dossier}/php/ensalle.php

    // C'est dans ce fichier ensalle.php que l'on va coder

    $rooms = [
        'Athéna',
        'Dyonisos',
        'Hadès',
        'Zeus'
    ];

?>

  <main class="main-container">
    <section>
      <h2 class="page__title">Films en salle</h2>
      <h3 class="page__subtitle">Salles</h3>
      <ul>
        <?php 
        $i = 0;
        while($i < count($rooms)) {
          echo "<li>$rooms[$i]</li>";
          $i += 1;
        } 
        ?>
      </ul>
    </section>
  </main>

  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>