<?php
//

$conn=mysqli_connect('localhost','root','','projet_reda');

$sql = "SELECT * FROM tb_localite";
$result = $conn->prepare($sql);

//exce
$result->execute();


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Reda Saci">

    <title>Formulaire_Client</title>

    <meta name="description" content="Formulaire de saisie client" />
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form action="index.php" method="POST">
		<h1>Insertion d'un nouveau client:</h1>

    <label for="">nom :<span>(obligatoire)</span></label>
    <input type="text" autofocus required name="nomC" id="nomC ">

    <label for="">prenom :<span>(obligatoire)</span></label>
    <input type="text" autofocus required name="prenomC" id="prenomC">

    <label for="">age :</label>
    <input type="text" name="ageC" id="ageC">

    <label for="">Adresse :</label>
    <input type="text" name="adrC" id="adrC">

    <label for="Localite">Localité</label>
    <select name="loc" id="loc">
        <libellé>NPA</libellé>
        <?php

        try {
            foreach ($result->fetch() as $row ) {
                echo "<option value='".$row['npa_loc']."'>".$row['nom_loc']."</option>";
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        ?>
    </select>
    <br></br>
    <input type="submit" value="Ajouter">

	</form>

<!-- //*********************MODIFICATION*********************// -->
<!-- <form action="connection.php" method="POST">
    <h1>Modification d'un client:</h1>

    <label for="idClient">
        Entrez l'id du client que vous voulez modifier:
        <input type="text" name="idClient" id="idClient">
    </label><br><br>

    <hr style="border-bottom: 2px solid black; margin-bottom: 30px;">

    <label for="nomC">
        Entrez le nouveau nom:
        <input type="text" name="nomC" id="nomC">
    </label><br><br>
    <label for="numTel">
        Entrez le nouveau numero de tel:
        <input type="text" name="numTel" id="numTel">
    </label><br><br>
    <label for="adresse">
        Entrez la nouvelle adresse:
        <input type="text" name="adresse" id="adresse">
    </label><br><br>
    <input type="submit" value="Modifier">

</form> -->
<!-- //*********************SUPPRESSION*********************// -->
<!-- <form action="connection.php" method="POST">
    <h1>Suppression d'un client:</h1>
    <label for="idClient">
        Entrez l'id du client que vous voulez supprimer:
        <input type="text" name="idClient" id="idClient">
    </label>
    <input type="submit">

</form> -->
</body>
</html>
