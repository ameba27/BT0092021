<?php
session_start();
require('connex.php');
if(isset($_POST['submit'])){
if(isset($_POST['username']) && !empty($_POST['username'])){
    if(filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
        if(isset($_POST['password']) && !empty($_POST['password'])){

           

             $password =sha1($_POST['password']);

            $data = $lien->prepare("SELECT email FROM admin WHERE email=? AND mdp=?");
            $data->execute(array($_POST['username'], $password));

            $rows = $data->rowCount();

            if($rows == true){
                $_SESSION['admin']=$_POST['username'];
                header('location:dashbord.php');
            

        }else header('location:erreur.php?Veuillez verifier votre email ou votre mot de passe');

    
/*
            }else{
                $erreur = "Username ou mot de passe inconnue";
            }

        }else{
            $erreur = "Veuillez saisir votre password";
        }

    }else{
        $erreur = "Veuillez saisir un email valide";
    }

}else{
    $erreur="Veuillez saisir un username valide";
}
}
*/
}
}
}
}

?>