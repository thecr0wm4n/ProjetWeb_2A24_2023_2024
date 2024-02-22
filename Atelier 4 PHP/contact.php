<!--Abassi Fedi 2A24-->

<!DOCTYPE html>
<html>
<head>
    <title>Informations d'inscription</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<?php
    
    $champs_vides = false;
    foreach ($_GET as $value) {
        if (empty($value)) {
            $champs_vides = true;
            break;
        }
    }

    
    if ($champs_vides) {
        echo "<h2>Champs manquants</h2>";
    } else {
        
?>
    <h2>Informations d'inscription</h2>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo isset($_GET['nom']) ? $_GET['nom'] : 'erreur'; ?></td>
            <td><?php echo isset($_GET['prenom']) ? $_GET['prenom'] : 'erreur'; ?></td>
            <td><?php echo isset($_GET['email']) ? $_GET['email'] : 'erreur'; ?></td>
            <td><?php echo isset($_GET['telephone']) ? $_GET['telephone'] : 'erreur'; ?></td>
            <td><?php echo isset($_GET['adresse']) ? $_GET['adresse'] : 'erreur'; ?></td>
            <td><?php echo isset($_GET['codepostal']) ? $_GET['codepostal'] : 'erreur'; ?></td>
        </tr>
    </table>
<?php
    }
?>
</body>
</html>
