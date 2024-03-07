<?php 
/*Abassi Fedi 2A24 */
include "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php"; 

class showEmploye{




}


$employe1 = new Employe("fedi", "abassi", "123456", "1234", "exemple@esprit.tn", "26-05-2000");

echo "<h2>Informations de l'employé 2 avec var_dump()</h2>";
var_dump($employe1);

$employe2 = new EmployeC();


echo "<h2>Informations de l'employé 2 avec la fonction show()</h2>";
$employe2->show($employe1);

?>

