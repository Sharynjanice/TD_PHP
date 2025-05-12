<?php
SESSION_start();
if(isset($_SESSION['user'])){
    header("Location: index.php");
}
$username= "Sharyn";
$password= "2005";
$error=  "";

if (isset($_POST["login"])){
    if(isset($_POST["username"]) && isset($_POST["password"])){ //verification de saisie utilisateur
        $input_username = $_POST["username"]; //username saisi par l'utilisateur
        $input_password = $_POST["password"]; //password saisi par l'utilisateur
        if($username == $input_username && $password == $input_password){
            $_SESSION["user"]= $username;
            header("Location: index.php");
            var_dump($_SESSION);
    
        }else{
            $error = "identifiants incorrects";
        }
    }else{
        $error = "Merci de vouloir renseigner tout les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="login.php" method="post">
            <input name="Username"  type="text" placeholder="Entrez votre nom d'utilisateur"/>
            <br></br>
            <input name="Password" type="password" placeholder="Entrez votre mot de passe"/>
            <br></br>
            <input name="login" type="submit" value="Connexion" />
        </form>
        <p style= "color: red"><?php echo $error; ?></p>  
</body>

</html>