<?php
    $nom_produit = "T-shirt simple"; 
    $couleur = "Blanc"; 
    $prix = 10.50;
    $disponible = true;
    $quantite = 10;

    echo "<h3> Le nom du produit est $nom_produit </h3>";
    echo "<h3> Il reste $quantite produit en stock. </h3>";
    echo "<h3> Le produit $nom_produit est de couleur $couleur. </h3>";

    $produit = 3;
    $resultat1 = $produit*$prix;
    $resultat2 = $quantite*$prix;
    echo "<h4> Acheter 3 produits couterait $resultat1 €.</h4>";
    echo "<h4> Acheter la totalité des produits disponibles coûterait $resultat2 €. </h4>";
    echo "<h4> Si 3 produits sont vendus </h4>";

    
    if ($disponible == true) {
        echo "<p> Le produit $nom_produit est disponible en ligne. </p>";
    }
    else {
        echo "<p> Le produit $nom_produit n'est malheuresement plus disponible. </p>";
    }

    if ($quantite > 5) {
        echo "<p> Il reste $quantite produits en magasin. </p>";
    }
    elseif ($quantite < 5) {
        echo "<p> Il ne reste plus que $quantite produits en magasin. </p>";
    }
    elseif ($quantite ==1) {
        echo "<p> Il ne reste qu'un produit en magasin. </p>";
    }
    elseif ($quantite ==0) {
        echo "<p> Il ne reste plus de produit en magasin. </p>";
    }
    
?> 

