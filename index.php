<?php




try{
    $conn= new PDO("mysql:host=localhost;dbname=projet_reda;port=3306;charset=utf8",'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e){
echo 'erreur de la connexion' .$e->getMessage();
}







if(isset($_POST['nomC']) && isset($_POST['prenomC']) && isset($_POST['ageC'])){
   if(!empty($_POST['nomC']) && !empty($_POST['prenomC']) && !empty($_POST['ageC'])){

		$nomC = htmlspecialchars($_POST['nomC']);
		$prenomC = htmlspecialchars($_POST['prenomC']);
		$ageC = htmlspecialchars($_POST['ageC']);
        $insertionClient = $conn->prepare('INSERT INTO tb_client(nom_client,pre_client,age_client) VALUES(?,?,?)');
        $insertionClient->execute(array($nomC,$prenomC,$ageC));

 		echo 'Le Client a été bien ajouté !!';
	}else{
		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
	}
 }

?>
