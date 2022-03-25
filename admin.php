<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Espace Administrateur</h3>
    <?php include_once "admin_login.php"?>
    
    <form action="" method="POST">
        <input type="text" name="username" id="" placeholder="UserName">
        <input type="password" name="password" id="" placeholder="Password">
        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>
</html>