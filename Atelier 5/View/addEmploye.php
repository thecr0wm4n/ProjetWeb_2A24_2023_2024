<!--Abassi Fedi 2A24-->
<?php include "C:/xampp/htdocs/Atelier 5/Controller/EmployeC.php"; 

 ?>
<!DOCTYPE html>
<html>
    <head><link rel="icon" type="image/x-icon" href="icon.ico"/><title>Inscription</title></head>
    <header>
        <meta charset="utf-8" />
        
        <center>
        <a href="accueil.html"> Home</a>   <a href=""> Projets et taches</a> <a href=""> Liste des employés</a>   <a href=""> Inscription</a>
        </center>
        <style>
            body {
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            form {
                max-width: 370px;
                margin: 0 auto;
            }
            label {
                display: inline-block;
                width: 100px;
                font-weight: bold;
            }
            input, select {
                width: calc(100% - 110px); 
                padding: 5px;
                margin-bottom: 10px;
                box-sizing: border-box; 
            }
            button[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #456ba0;
                color: white;
                border: none;
                cursor: pointer;
            }
            button[type="submit"]:hover {
                background-color: #456ba0;
            }
            button[type="reset"] {
                width: 100%;
                padding: 10px;
                background-color: #456ba0;
                color: white;
                border: none;
                cursor: pointer;
            }
            button[type="reset"]:hover {
                background-color: #456ba0;
            }
        </style>
    </header>
    
    <body>
        
        <section>
<div>
        <a>_________________________________________________________________________________________________________________________________________________________________________________________</a>
        <img src="img.jpg" alt="image principale" height="600" width="1600w">
        <center><b ><font size="+10" color="#456ba0">Inscription au site</font></b></center>
        
</div>
<br><br>
<div>
    <form id="inscription" action="addEmploye1.php" method="post">
        <label for="nom">Nom : </label>
        <input type="text" id="nom1" name="nom1">
        <br><br>
        
        <label for="prenom">Prénom : </label>
        <input type="text" id="prenom1" name="prenom1">
        <br><br>
        
        <label for="email">Email : </label>
        <input type="text" id="email1" name="email1">
        <br><br>
        
        <label for="telephone">Téléphone : </label>
        <input type="tel" id="telephone1" name="telephone1">
        <br><br>
        
        <label for="ddn">Date de naissance : </label>
        <input type="date" id="ddn1" name="ddn1">
        <br><br>
        
        <label for="password">Mot de passe : </label>
        <input type="password" id="password1" name="password1">
        <br><br>
        
        <button id="ajouter" type="submit">Ajouter</button>
        <br><br>
        <button id="annuler" type="reset">Annuler</button>
    </form>
</div>
    </section>
    </body>
    <br>
    <a>_____________________________________________________________________________________________________________________________________________________________________________________________</a>
        <footer>
    <a>Vous pouvez nous contacter par email :</a><a href="">contact@esprit.tn</a>
    <br>
    <a>adresse : Ghazela , Tunis</a>
        </footer>
    </html>