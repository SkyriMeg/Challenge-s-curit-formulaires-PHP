<!-- <?php

        $errors = [];
        if (!empty($_POST)) {
            $data = array_map('trim', $_POST);
            $user_lastname = htmlentities($data["user_lastname"]);
            $user_firstname = htmlentities($data["user_firstname"]);
            $user_email = htmlentities($data["user_email"]);
            $user_telephone = htmlentities($data["user_telephone"]);
            $user_message = htmlentities($data["user_message"]);
            $user_subject = htmlentities($data["user_subject"]);

            if (strlen($user_lastname) < 3) {
                $errors["user_lastname"] = "Votre prénom doit avoir 3 caractères minimum";
            }
            if (strlen($user_firstname) < 3) {
                $errors["user_firstname"] = "Votre prénom doit avoir 3 caractères minimum";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors["user_email"] = "Votre email est au mauvais format";
            }
            if (empty($user_telephone)) {
                $errors["user_telephone"] = "Veuillez renseigner votre téléphone";
            }
            if ($subject == "") {
                $errors["user_subject"] = "Veuillez sélectionner votre sujet";
            }
            if (empty($user_message)) {
                $errors["user_message"] = "Veuillez écrire votre message";
            }
        }
        ?> -->
<!-- ---------------------------------------------------------------------------------------------- -->


<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '' || !filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
        $errors[] = "Une adresse mail valide est obligatoire";
    if (!isset($_POST['subject']) || ($_POST['subject']) == '')
        $errors[] = "Veuillez sélectionner votre sujet";
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Votre message ne doit pas être vide";


    if (empty($errors)) { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Validation</title>
            <link href="style.css" rel="stylesheet">
        </head>

        <body>
            <html>
            <h3>Merci <?= $_POST['user_firstname'] ?> <?= $_POST['user_lastname'] ?> de nous avoir contacté à propos de "<?= $_POST['subject'] ?>." <br>

                Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['user_email'] ?> ou par téléphone au <?= $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande : <br>

                <?= $_POST['user_message'] ?></h3>

        <?php } else { ?>
            <div class="alert">
                <h2>Veuillez renseigner correctement tous les champs</h2>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <a href="./form.php">Revenir au formulaire</a>
        <?php } ?>

    <?php
} ?>
        </body>

        </html>
