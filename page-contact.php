<?php get_header(); 


//If the form is submitted
if(true) {
	
    //Check to make sure that the name field is not empty
    if(trim($_POST['firstName']) === '') {
        $nameError = 'Indiquez votre prénom.';
        $hasError = true;
    } else {
        $firstname = trim($_POST['firstName']);
    }
    
    if(trim($_POST['lastName']) === '') {
        $nameError = 'Indiquez votre nom.';
        $hasError = true;
    } else {
        $name = trim($_POST['lastName']);
    }
    
    //Check to make sure sure that a valid email address is submitted
    if(trim($_POST['mail']) === '')  {
        $emailError = 'Indiquez une adresse e-mail valide.';
        $hasError = true;
    } else if (!preg_match("/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", trim($_POST['mail']))) {
        $emailError = 'Adresse e-mail invalide.';
        $hasError = true;
    } else {
        $email = trim($_POST['mail']);
    }

    if(trim($_POST['title']) === '') {
        $nameError = 'Donnez un titre à votre message';
        $hasError = true;
    } else {
        $name = trim($_POST['title']);
    }
        
    //Check to make sure comments were entered	
    if(trim($_POST['message']) === '') {
        $commentError = 'Entrez votre message.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }
    //If there is no error, send the email
    if(!isset($hasError)) {

        $emailTo = get_theme_mod('mail');
        $subject = 'Formulaire de contact de '.$name . ' '.$firstname;
        $sendCopy = trim($_POST['sendCopy']);
        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
        $headers = 'De : mon site <'.$emailTo.'>' . "\r\n" . 'R&eacute;pondre &agrave; : ' . $email;
        
        mail($emailTo, $subject, $body, $headers);

        $emailSent = true;
    }

}

if(isset($emailSent)) :
    ?>
    Merci pour votre message.
    <a href="<?= get_home_url(); ?>">Retour à l'accueil</a>
    <?php

else:

    if(have_posts()): while(have_posts()): the_post();
    ?>


    <section class="contact-form">
        <aside>
            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_post_thumbnail_caption(); ?>">
            <div class="info">
                <div class="name"><?= get_theme_mod('firstname', 'non renseigné')?> <?= get_theme_mod('lastname', 'non renseigné'); ?></div>
                <div class="street"><?= get_theme_mod('adress', 'non renseigné')?></div>
                <div class="postal"><?= get_theme_mod('post', 'non renseigné')?></div>
                <div class="mail"><?= get_theme_mod('mail', 'non renseigné')?></div>
                <div class="num"><?= get_theme_mod('phone', 'non renseigné')?></div>
            </div>
        </aside>

        <main>
            <h1><?php the_title(); ?></h1>
            <p class="text"><?php the_content(); ?></p>
            <form method="post" action="<?= get_the_permalink(); ?>">
                <div class="input">
                    <input type="text" name="lastName" id="lastName" placeholder="Nom" value="<?php if(isset($_POST['lastName'])) {echo $_POST['lastName'];} ?>" required>
                    <div class="underline"></div>
                </div>
                <div class="input">
                    <input type="text" name="firstName" id="firstName" placeholder="Prénom" value="<?php if(isset($_POST['firstName'])) {echo $_POST['firstName'];} ?>" required>
                    <div class="underline"></div>
                </div>
                <div class="input">
                    <input type="text" name="mail" id="mail" placeholder="votre adresse email" value="<?php if(isset($_POST['mail'])) {echo $_POST['mail'];} ?>" required>
                    <div class="underline"></div>
                </div>
                <div class="input">
                    <input type="text" name="title" id="title" placeholder="Titre du message" value="<?php if(isset($_POST['title'])) {echo $_POST['title'];} ?>" required>
                    <div class="underline"></div>
                </div>
                <div class="input">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message..." required> <?php if(isset($_POST['message'])) {echo $_POST['message'];} ?></textarea>
                    <div class="underline"></div>
                </div>

                <button type="submit" class="btn-primary">Envoyer un message</button>
            </form>
    </main>
    </section>

    <?php
    endwhile; endif;
endif;
get_footer();
