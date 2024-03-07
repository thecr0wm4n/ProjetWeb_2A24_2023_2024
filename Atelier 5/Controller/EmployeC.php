<?php

/*Abassi Fedi 2A24*/

include "C:/xampp/htdocs/Atelier 5/Model/Employe.php";
include "C:/xampp/htdocs/Atelier 5/config.php";
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

    public function listEmployes(){
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try{
            $liste = $db -> query($sql);
            return $liste;
        }catch (Exception $e){
            die('error:'.$e->getMessage());
        }
    }

    public function deleteemploye ($id)
{
    $sql ="DELETE FROM employe WHERE id = :id"; 
    $pdo =config::getConnexion ();

    $query =$pdo ->prepare($sql);
    $query ->bindValue (':id',$id);

    try{
        $query ->execute();
        

    }catch (PDOException $e)
    {
        $e ->getMessage();
    }
}

public function addemploye($Employe)
    {
        $pdo =config::getConnexion ();
        try{
            $query =$pdo->prepare(

                "INSERT INTO employe (lastname,firstname,password,phone,email,dob)
                VALUES (:lastname,:firstname,:password,:phone,:email,:dob)"

            );

            $query ->execute([

                'lastname'=>$Employe->getLastname(),
                'firstname'=>$Employe->getFirstname(),
                'password'=>$Employe->getPassword(),
                'phone'=>$Employe->getPhone(),
                'email'=>$Employe->getEmail(),
                'dob'=>$Employe->getDob(),
            ]);

        } catch (PDOException $e)
        {
         $e ->getMessage();
        }
         }

         public function updateemploye ($id1,$lastname1,$firstname1,$password1,$phone1,$email1,$dob1)
{
    $sql ="UPDATE employe SET lastname= :Lastname, firstname = :Firstname, password = :Pass,phone = :Phone, email = :Email, dob = :Dob WHERE id = :id1"; 
    $pdo =config::getConnexion ();

    $query =$pdo ->prepare($sql);
    $query ->bindValue (':id1',$id1);
    $query ->bindValue (':Lastname',$lastname1);
    $query ->bindValue (':Firstname',$firstname1);
    $query ->bindValue (':Pass',$password1);
    $query ->bindValue (':Phone',$phone1);
    $query ->bindValue (':Email',$email1);
    $query ->bindValue (':Dob',$dob1);

    try{
        $query ->execute();
        

    }catch (PDOException $e)
    {
        $e ->getMessage();
    }
}
    
}

/*echo "<h2>Informations de l'employé avec show()</h2>";

$personne2 = new Employe("foulen","ben foulen","1234","2222","fedi.abassi@esprit.tn","25-10-2000");
$personne2C = new EmployeC();
$personne2C->show($personne2);*/


?>