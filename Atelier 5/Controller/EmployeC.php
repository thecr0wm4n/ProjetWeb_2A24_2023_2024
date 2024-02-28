<?php
/*Abassi Fedi 2A24*/

include "C:/xampp/htdocs/Atelier 5/Model/Employe.php";

class EmployeC{

    

    public function show($Employe){

        
        
            echo "<table border='1'>";
            echo "<tr><th>Nom</th><th>Prénom</th><th>Mot de passe</th><th>Numéro de téléphone</th><th>Email</th><th>Date de naissance</th></tr>";
            echo "<tr>";
            echo "<td>" . $Employe->getLastname() . "</td>";
            echo "<td>" . $Employe->getFirstname() . "</td>";
            echo "<td>" . $Employe->getPassword() . "</td>";
            echo "<td>" . $Employe->getPhone() . "</td>";
            echo "<td>" . $Employe->getEmail() . "</td>";
            echo "<td>" . $Employe->getDob() . "</td>";
            echo "</tr>";
            echo "</table>";
        
    }
    
}

echo "<h2>Informations de l'employé avec show()</h2>";

$personne2 = new Employe("foulen","ben foulen","1234","2222","fedi.abassi@esprit.tn","25-10-2000");
$personne2C = new EmployeC();
$personne2C->show($personne2);


?>