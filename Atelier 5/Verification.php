

<?php
/*Abassi Fedi 2A24*/


//include_once "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php"; 


class Verification{

    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dOB;
    
    public function getLastname(){return $this->lastName;}
    public function setLastname($a){$this->lastName = $a;}
    
    public function getFirstname(){return $this->firstName;}
    public function setFirstname($b){$this->firstName = $b;}
    
    public function getPassword(){return $this->password;}
    public function setPassword($c){$this->password = $c;}
    
    public function getPhone(){return $this->phone;}
    public function setPhone($d){$this->phone = $d;}
    
    public function getEmail(){return $this->email;}
    public function setEmail($e){$this->email = $e;}
    
    public function getDob(){return $this->dOB;}
    public function setDob($f){$this->dOB = $f;}
    
    
    public function __construct($a,$b,$c,$d,$e,$f){
        $this->firstName=$a;
        $this->lastName=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dOB=$f;
    }

    public function show($Verification){

        
        
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Mot de passe</th><th>Numéro de téléphone</th><th>Email</th><th>Date de naissance</th></tr>";
        echo "<tr>";
        echo "<td>" . $Verification->getLastname() . "</td>";
        echo "<td>" . $Verification->getFirstname() . "</td>";
        echo "<td>" . $Verification->getPassword() . "</td>";
        echo "<td>" . $Verification->getPhone() . "</td>";
        echo "<td>" . $Verification->getEmail() . "</td>";
        echo "<td>" . $Verification->getDob() . "</td>";
        echo "</tr>";
        echo "</table>";
    
}
}



$nom1 = isset($_POST['nom']) ? $_POST['nom'] : 'erreur'; 
$prenom1 = isset($_POST['prenom']) ? $_POST['prenom'] : 'erreur'; 
$email1 = isset($_POST['email']) ? $_POST['email'] : 'erreur'; 
$telephone1 = isset($_POST['telephone']) ? $_POST['telephone'] : 'erreur'; 
$ddn1 = isset($_POST['ddn']) ? $_POST['ddn'] : 'erreur';
$password1 = isset($_POST['password']) ? $_POST['password'] : 'erreur';

$employe1 = new Verification($nom1, $prenom1, $password1, $telephone1, $email1, $ddn1);

echo "<h2>Informations de l'employé 2 avec var_dump()</h2>";
var_dump($employe1);

//employe2 = new EmployeC();


echo "<h2>Informations de l'employé 2 avec la fonction show()</h2>";
$employe1->show($employe1);
?>










