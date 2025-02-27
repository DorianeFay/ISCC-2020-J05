<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" href="assets/vitrine.css">
    </head>
  
    <?php
        include 'header.php';
        $nav_en_cours = 'Accueil';
    ?>

    <body>
        <h2>Accueil</h2>
        <div class="accueil">
            <p>Le numérique, nouvelle ère de l'humanité, source d'innovation et de performance ?
              Pour mieux comprendre cette révolution, venez apprendre les rudiments du code et 
              découvrir les bases de la programmation des sites internet. Destiné aux étudiants,
              ce code camp vous initiera en un mois aux principaux langages de programmation
              Web (HTML-CSS et PHP), vous dévoilera le fonctionnement d'outils comme Google ou 
             Paypal et vous éclaira sur la sécurité des sites internet.
            </p>
            <div class="images">
                <img id="image1" src="assets/photo1.jpg">
                <img id="image2" src="assets/photo2.jpg">
            </div>
        </div>
        
    </body>

    <?php
        include 'footer.php'
    ?>
</html>