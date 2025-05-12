<?php
$hostname="Sharyn";
$dbname="TP1";
$duser= "root";

try{
    $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $duser "");

} catch (\Throwable $th){
    //THROW £TH
}

$users = [ // Tableau qui contient 3 utilisateur
    [
        "prenom"=> "Sharyn",
        "nom"=> "Janice",
        "email"=> "Sharyn.J@anice.fr",
        "tel"=> "06 12 35 78"
    ],
    [
        "prenom"=> "Shasha",
        "nom"=> "Jace",
        "email"=> "Shasha.J@ce.fr",
        "tel"=> "06 23 45 27"
    ],
    [
        "prenom"=> "Merveille",
        "nom"=> "Grace",
        "email"=> "Merveille.Gr@ce.fr",
        "tel"=> "06 54 04 12"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <table class="table table-striped">
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
    </tr>
    <?php
    foreach($users as $value){
        echo "
        <tr> 
        <td> ".$value['prenom']."</td>
        <td> ".$value['nom']."</td>
        <td> ".$value['email']."</td>
        <td> ".$value['tel']."</td>
        </tr> 
        ";
    }
    ?>
    <tr>
        <td>Sharyn</td>
        <td>Janice</td>
        <td>Sharyn.J@nice.fr</td>
        <td>06 12 35 78</td>
    </tr>
    <tr>
        <td>Shasha</td>
        <td>Jace</td>
        <td>Shasha.J@ce.fr</td>
        <td>06 23 45 27</td>
    </tr>
    <tr>
        <td>Merveille</td>
        <td>Grace</td>
        <td>Merveille.Gr@ce.fr</td>
        <td>06 54 04 12</td>
    </tr>
   </table>
</body>
</html>