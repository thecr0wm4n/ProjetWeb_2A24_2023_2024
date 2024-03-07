
<?php 
/*Abassi Fedi 2A24*/

class Employe{

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

/*public function __construct(){
    $this->firstName="";
    $this->lastName="";
    $this->password="";
    $this->phone="";
    $this->email="";
    $this->dOB="";
}*/

public function __construct($a,$b,$c,$d,$e,$f){
    $this->firstName=$a;
    $this->lastName=$b;
    $this->password=$c;
    $this->phone=$d;
    $this->email=$e;
    $this->dOB=$f;
}

public function Afficher(){
    echo "nom:".$this->firstName;
    echo "prénom:".$this->lastName;
    echo "mot de passe:".$this->password;
    echo "téléphone:".$this->phone;
    echo "email:".$this->email;
    echo "date de naissance:".$this->dOB;
}

}

/*echo "<h2>Informations de l'employé avec Afficher()</h2>";

$personne1=new Employe("Achraf","ben mouelli","123456","2692","achraf.benmouelli@esprit.tn","20-12-2003");
$personne1->Afficher();*/




?>