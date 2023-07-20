<?php 

  session_start();

if(isset($_POST["Terminer"])){
        		header("location:Index.php");
        	}
        	
if(isset($_POST["Confrimer"]))
{
	if(isset($_POST["idcompte"]) and isset($_POST["montant"]) and isset($_POST["tel"]) and isset($_POST["transaction"]) and isset($_POST["bookmaker"]))
	{
		if(!empty($_POST["idcompte"]) and !empty($_POST["montant"])  and !empty($_POST["tel"])	and  !empty($_POST["transaction"]) and !empty($_POST["bookmaker"]))
        {

		     $IDCOMPTE=htmlspecialchars($_POST["idcompte"]);	
		     $Montant=htmlspecialchars($_POST["montant"]);
		     $tel=htmlspecialchars($_POST["tel"]);	
		     $transaction=htmlspecialchars($_POST["transaction"]);
		     $bookmaker = htmlspecialchars($_POST["bookmaker"]);

    
		                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
		     //Connexion a la base de donnée

		    $serveur = "localhost";
		    $user_name = "root";
		     $mdp_user = "";
		     $database = "operaration";
		     $status = "En attente";
		     

		     $ma_connexion = mysqli_connect("$serveur", $user_name, $mdp_user, $database);

		     $ma_requete = "INSERT INTO depot(`IDCOMPTE`, `Montant`, `telephone`, `IDtransaction`, `bookmaker`, `Status`) VALUES('$IDCOMPTE', '$Montant', '$tel', '$transaction', '$bookmaker', '$status') ";

		     $execution = mysqli_query($ma_connexion, $ma_requete);


		}
			
		

	}else{
		echo "Tous les champs sont obligatoires";
	}
	//Fermeture de la base de données
	$ma_connexion->close();
}else{
	echo "Merci de consulter la page de depots";
}

?>

	
	<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="1xbetpage1.css" />
<meta charset="utf-8" />
<title> </title>
</head>
<body>
	<form action="" method="POST">
	<section>
		<p> <strong style="color:#53af57"><h3 style="text-align: center;">Merci d'utiliser BENOB!</h3></strong></p>
		<p>Votre demande a bien été prise en compte veillez patienter quelques minutes</p>
		<p>Utilisez nos codes promos <strong style="color:red">BEN226</strong> ou <strong style="color:red"> BENOB</strong> pour vous inscrire sur <strong style="color:red">1xbet</strong> ou <strong style="color:red">Bitwinner.</strong></p>
		<input id="continuer" type="submit" name="Terminer" value="Terminer">
	</section>
</body>
</html>






