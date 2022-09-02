Pour l'instant, j'ai deux dossiers

- HTML
  - index.html
  - tarifs.html
- PHP
  - index.php (vide pour l'instant)


-----

Ce que je veux, c'est pouvoir introduire PHP dans le projet.
Pour cela, je vais très concrêtement :

1 - Prendre le contenu du fichier html/index.html
Créer un fichier php/index.php
Coller le contenu du fichier html/index.html dans php/index.php

2 - Prendre le contenu du fichier html/tarifs.html
Créer un fichier php/tarifs.php
Coller le contenu du fichier html/tarifs.html dans php/tarifs.php

3 - Je supprime le dossier HTML qui ne me servira plus !!
    Je vais travailler à partir de ce moment là sur le dossier PHP uniquement !

------

4 - Je vais devoir vérifier les liens qui finissent par .html dans mon projet, et les remplacer par .php

5 - Vérifier en allant sur le navigateur, en localhost, que la navigation dans le dossier PHP fonctionne (je clique sur tous les liens pour le vérifier)

6 - Je peux, une fois la vérification faites, passer à la suite

7 - Je créer un dossier templates

On part d'un constat : On va avoir besoin de templatiser (factoriser) les parties du code HTML qui se répètent entre les pages 
On créer pour cela un dossier qu'on peut appeler : views / templates / inc

Dans ce projet, on peut constater par exemple que la partie navigation se répète entre les pages. Le fait de templatiser la navigation va permettre une meilleure maintenance du code, car je ne vais modifier les liens qu'à un seul endroit !

Comment je vais appeler le fichier qui va me permettre de mettre la navigation ?
nav.php (navigation est le nom qui permet de décrire la fonction du fichier, et l'extension permet de dire qu'on travaille en PHP)

Qu'est ce que je vais mettre dans le fichier nav.php ?

Le code HTML de la navigation (le contenu)

Une fois cela fait, je vais devoir rassembler mes puzzles pour les coller ensemble

8 - Je travaille à présent dans le dossier PHP
Et je vais SEULEMENT à cette étape là, commencer à travailler avec les balises PHP

Je vais pouvoir utiliser l'instruction include pour inclure les fichiers de templates dans mes pages de mon site.

