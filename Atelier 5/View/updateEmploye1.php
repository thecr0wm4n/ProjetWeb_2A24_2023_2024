<!--Abassi Fedi 2A24 -->

<?php
include "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php";

$lastname2 = $_POST["nom1"];
$firstname2 = $_POST["prenom1"];
$email2 = $_POST["email1"];
$phone2 = $_POST["telephone1"];
$dob2 = $_POST["ddn1"];
$password2 = $_POST["password1"];

$employeC1=new EmployeC();
$employeC1 ->updateemploye($_POST["id3"],$lastname2,$firstname2,$password2,$phone2,$email2,$dob2); 

header('Location:ListEmployes.php');
?> 