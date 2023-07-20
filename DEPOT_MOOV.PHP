<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="1xbetdepotfomul.css" />
<title> </title>
</head>
<meta charset="utf-8" />
 <body>
 <div id="Inscription">
 <form action="traitement1.php"method="POST">
 
 <h1>Dépot moov</h1>
 
 <label><b>Entrez votre ID de compte joueur</b></label><br/>
 <input type="numero" name="idcompte" placeholder="" maxlength="8" required><br/> 
 
 <label><b> Entrez le montant</b> </label><br/>
 <input type="number" name="montant" placeholder="montant minimun:100" min="100" maxlength="7 " required><br/> 
 
 <label><b>Numero utilise pour le dépot </b></label><br/>
 <input type="tel"  placeholder="EX:71000000" maxlength="8"   name="tel" required><br/> 
 
 <label><b>Composez </b></label> <br/>
 <input type="numero" disabled="disabled" maxlength="0"value="*144*4*6*montant#" ><br/> 
 
 <label><b>Entrez ID de la transaction</b></label> <br/>
 <input type="text" name="transaction" placeholder="" maxlength="50" required><br/> 
 
 <select name="bookmaker" id="bookmaker" >
<option value="1xbet">1xbet</option>
 <option value="Betwinner">Betwinner</option>
</select>	
 <input type="submit" name="Confrimer" id='submit' value='Confrimer'>
</form>
</div>
</body>
</html> 
