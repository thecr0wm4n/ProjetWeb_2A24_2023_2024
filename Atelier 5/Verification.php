
<?php
/*Abassi Fedi 2A24*/


include_once "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php"; 


class Verification{

   
    }




$nom1 = isset($_POST['nom']) ? $_POST['nom'] : 'erreur'; 
$prenom1 = isset($_POST['prenom']) ? $_POST['prenom'] : 'erreur'; 
$email1 = isset($_POST['email']) ? $_POST['email'] : 'erreur'; 
$telephone1 = isset($_POST['telephone']) ? $_POST['telephone'] : 'erreur'; 
$ddn1 = isset($_POST['ddn']) ? $_POST['ddn'] : 'erreur';
$password1 = isset($_POST['password']) ? $_POST['password'] : 'erreur';

$employe1 = new Employe($nom1, $prenom1, $password1, $telephone1, $email1, $ddn1);

echo "<h2>Informations de l'employé 2 avec var_dump()</h2>";
var_dump($employe1);

$employe2 = new EmployeC();


echo "<h2>Informations de l'employé 2 avec la fonction show()</h2>";
$employe2->show($employe1);
?>










