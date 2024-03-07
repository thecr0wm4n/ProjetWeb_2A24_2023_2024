<!--Abassi Fedi 2A24 -->

<?php

include "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php";


$employeC=new EmployeC();
$employeC ->deleteemploye($_GET["id"]);

header('Location:ListEmployes.php');

?>