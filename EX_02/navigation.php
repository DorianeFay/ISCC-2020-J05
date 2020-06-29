<nav>
  <?php
    $color ="#17c1ff"
?>
    <?php if ($nav_en_cours == 'Accueil') 
        {echo $color;} 
        else {echo '';}
        ?> 
    <a class="contact" href="vitrine-accueil.php" >Accueil </a>

    <?php if ($nav_en_cours == 'Programme') 
        {echo $color;} 
        else {echo '';}
        ?> 
    <a class="contact" href="vitrine-programme.php">Programme</a>

    <?php if ($nav_en_cours == 'Contact') 
        {echo $color;} 
        else {echo '';}
        ?> 
    <a class="contact" href="vitrine-contact.php" >Contact</a>

    
</nav>