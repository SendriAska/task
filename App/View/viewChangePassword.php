<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/style/main.css">
    <link rel="stylesheet" href="../../public/style/pico.min.css">
    <title>Change Password</title>
</head>
</head>
<body>
    <header class="container-fluid">
        <?php include "App/View/components/navbar.php"; ?>
    </header>

    <main class="container-fluid">

        <form action="" method="post">
            <h2>Changer son mot de passe</h2>
            <input type="password" name="password" placeholder="Saisir l'ancien mot de passe">
            <input type="password" name="newPassword" placeholder="Saisir le nouveau mot de passe">
            <input type="password" name="confirmPassword" placeholder="Confirmer le nouveau mot de passe">
            <input type="submit" name="submit" id="submit" value="Changer le mot de passe">
            <p class="error"><?= $message ?></p>
        </form>

    </main>

</body>
</html>