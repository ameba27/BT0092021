<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container mt-3 pt-5">
    <h3><span class="text-success">Espace</span> <span class="text-primary">Administrateur</span></h3>
    <?php include_once "admin_login.php"?>
    
    <form action="" method="POST">
        <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" name="username" id="" placeholder="UserName">
        <label for="Username">Username</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="password" class="form-control" name="password" id="" placeholder="Password">
        <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Se connecter</button>
    </form>
    </div>
</body>
</html>