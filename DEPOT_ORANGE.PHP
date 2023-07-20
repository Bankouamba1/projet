


<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="1xbetdepotfomul.css" />
<title> </title>
</head>

 <body>
 <div id="Inscription">
 <form action="traitement1.php"method="POST">
 
 <h1>Dépot orange</h1>
 
 <label><b>Entrez votre ID de compte joueur</b></label><br/>
 <input type="numero" placeholder="" name="idcompte" maxlength="8" required><br/> 

 <label><b> Entrez le montant</b> </label><br/>
 <input type="number" placeholder=" Montant minimun:100 " min="100" name="montant" maxlength="6" required><br/>

  <label><b>Numero utilisez pour le dépot</b></label><br/>
 <input type="tel" placeholder=" EX:71000000" name="tel" required><br/> 
 
 <label><b>Composez </b></label> <br/>
 <input type="numero" disabled="disabled" maxlength="0"value="*144*4*6*montant#" ><br/> 
 
 <label><b>Entrez ID de la transaction</b></label> <br/>
 <input type="text" placeholder="" name="transaction" maxlength="100" required><br/> 
 
 <select name="bookmaker" id="bookmaker" >
<option value="1xbet">1xbet</option>
 <option value="Betwinner">Betwinner</option>
</select>	
 <input type="submit"  name="Confrimer" id="submit" values="Confrimer">
 
  </form>
</div>
</body>
</html> 