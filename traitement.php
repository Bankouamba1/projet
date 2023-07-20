<?php

if(isset($_POST["Confrimer"]))
{


    if(isset($_POST["ID_compte"]) and isset($_POST["Montant"]) and isset($_POST["tel"]) and isset($_POST["bookmaker"]))
    {    
        //if(!empty($_POST["id"]) AND !empty($_POST["montant"])  and !empty($_POST["tel"])	and  !empty($_POST["bookmaker"]))		
        
            $ID_compte=htmlspecialchars($_POST["ID_compte"]);	
            $Montant=htmlspecialchars($_POST["Montant"]);
            $tel=htmlspecialchars($_POST["tel"]);
            $bookmaker=htmlspecialchars($_POST["bookmaker"]);

            //connexion a la base de donnée
            $serveur ="localhost";
            $user_name ="root";
            $mdp_user =""	;
            $database ="operaration";
            $Status="En attente";
            

            $ma_connexion= mysqli_connect("$serveur",$user_name,$mdp_user,$database);
            $ma_requete="INSERT INTO retrait(`ID_compte`, `Montant`, `telephone`, `bookmaker`, `Status`)
            VALUES ('$ID_compte','$Montant','$tel','$bookmaker','$Status')";
            $execution= mysqli_query($ma_connexion, $ma_requete);
                   
            
    }else{ 
        	echo "tout les champs sont obligatoires";
    }
   
}else{
	echo "Merci de consulter la page de retrait";
}
?>
 <!DOCTYPE html>
<html>
<head>
   
<meta charset="utf-8" />
<title> </title>
</head>
<body>
    <from action=""  method="POST">
<p style="text-align:center;">
 Une caisse est disponible pour votre retrait. A fin de finaliser votre retrait merci de suivre les étapes suivantes en dessous: <br>
 3-Au niveau de la VILLE choisissez <br>
 Au niveau du RUE choisissez <br>
Une fois que le retrait est valider envoyé nous le code de retrait via whatsapp 
</p>
<p style="text-align:center;"><a style="color:red"; href="http://wa.me/message/WOM5YQV3CNKHM1"> Cliquer ici  </a> </p>
<P style="text-align: center;"><img style="width:500px"  src="image/photo.png"/></P>
</body>
</html>
