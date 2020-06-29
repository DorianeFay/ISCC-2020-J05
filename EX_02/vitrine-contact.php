<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" href="assets/vitrine.css">
    </head>

    <?php
        include 'header.php';
        $nav_en_cours = 'Contact';
    ?>

    <body>
        <h2>Contact</h2>
        <form>
            <div>
                <label for="name">Votre nom</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">Votre email</label>
                <input type="text" id="mail" name="user_mail">
            </div>
            <div>
                <label for="msg">Comment améliorer mon site ?</label>
                <textarea id="msg" name="user_msg"></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </body>
    
    <?php
        include 'footer.php'
    ?>
</html>