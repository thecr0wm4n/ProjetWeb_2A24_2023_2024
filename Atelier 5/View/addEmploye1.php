<!--Abassi Fedi 2A24 -->

<?php


include "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php";

    $lastname = $_POST["nom1"];
    $firstname = $_POST["prenom1"];
    $email = $_POST["email1"];
    $phone = $_POST["telephone1"];
    $dob = $_POST["ddn1"];
    $password = $_POST["password1"];

    
    $employe = new Employe($lastname, $firstname, $password, $phone, $email, $dob);
    $employeC = new EmployeC();
    $employeC->addemploye($employe);

    header('Location:ListEmployes.php');

    ?>