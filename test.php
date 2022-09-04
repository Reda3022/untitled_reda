<?php
$con=mysqli_connect('localhost','root','','projet_reda');

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
        <?php $reponse = $con->query('SELECT * FROM "tb_localite"');
        while ($donnees = $reponse->fetch())
        {
            ?>
            <option value="<?php echo $donnees['id_loc']; ?>">
                <?php echo $donnees['npa_loc']; ?>
            </option>
        <?php } ?>
    </select>

    <input type="submit" value="Ajouter">

	</form>
</body>
</html>
