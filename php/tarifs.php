  <?php
    // L'instruction include me permet d'inclure du contenu qui se situe dans
    // un autre fichier PHP
    include("../templates/header.php");
  ?>
  <main class="main-container">
    <section>
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>

    <?php
      // Afficher le tarif pour l'âge du capitaine
      // On se dit que l'âge du capitaine est de 43 ans.

      /*
        Tarif Plein 8,30 €
        Tarif Réduit 6,80 €
        Tarif Enfant 4,50 €
        Supplément 3D 1,00 €
        Tarif réduit pour les personnes de + de 60 ans et de moins de 16 ans
        Tarif enfant pour les - de 14 ans

        PAR DEFAUT : TARIF PLEIN

        SI AGE > 60 OU AGE < 16
          TARIF REDUIT
        SI AGE < 14
          TARIF ENFANT
        
      */

      $age = 43;

      $tarifPlein = 8.30;
      $tarifReduit = 6.80;
      $tarifEnfant = 4.50;

      // Par défaut
      $tarifCapitaine = $tarifPlein;

      // Conditions
      if ($age > 60 || $age < 16) {
        $tarifCapitaine = $tarifReduit;
      }

      // Si l'âge est < 14, ça remplace la valeur définie plus haut !
      // Du coup, je rempli les deux conditions ! Magie
      if ($age < 14) {
        $tarifCapitaine = $tarifEnfant;
      }

      // J'utilise les doubles quotes pour y mettre une phrase composé
      // du nom de ma variable avec son contenu (concaténation)
      $chaineAge = "Age : $age";
      $chaineAge = 'Age :'.$age;

      //var_dump($chaineAge);
      //var_dump($tarifCapitaine);

      // AFFICHER UNE VARIABLE
      // https://www.php.net/manual/fr/language.basic-syntax.phptags.php
      /*
        DEUX ECRITURES EQUIVALENTES
        sucre syntaxique (short tag / PHP)

        - <?php echo $age; ?>
        - <?= $age ?>
      */

    ?>

    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">
            <span class="prices__item-desc"><?= $age ?> ans</span> <span class="prices__item-value"><?php echo $tarifCapitaine; ?> &euro;</span>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">.. ans</span> <span class="prices__item-value">.... &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">.. ans</span> <span class="prices__item-value">.... &euro;</span>
            </li>
          </ul>
        </div>
      </div>

    </section>

  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
