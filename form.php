<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <form action="thanks.php" method="POST">
        <h1>Veuillez remplir le formulaire</h1>

        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname" required>
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname" required>
        </div>
        <div>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="user_email" required>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="number" id="phone" name="user_phone" required>
        </div>

        <label for="subject">Choisissez votre sujet:</label>
        <select id="subject" name="subject" required>
            <option value="">--Veuillez sélectionner--</option>
            <option value="cours de batterie">Cours de batterie</option>
            <option value="cours de guitare">Cours de guitare</option>
            <option value="cours de piano">Cours de piano</option>
        </select>

        <div>
            <label for="message">Message :</label>
            <textarea id="user_message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>

</html>
