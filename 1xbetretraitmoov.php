<!DOCTYPE html>
<html>

<link rel="stylesheet" href="1xbetdepotfomul.css" />
<title> </title>
</head>

 <body>
 <div id="Inscription">
 <form action="traitement.php"method="POST">
 
 <H1>Retrait moov</h1>
 
 <label><b> Entrez votre ID</b> </label><br/>
 <input type="number" name="ID_compte" placeholder="" maxlength="8 " required><br/> 
 
 <label><b> Entrez le montant</b> </label><br/>
 <input type="number" name="Montant" placeholder="Entrer le montant" min="100" maxlength="6 " required><br/> 
 
 <label><b>Numero de reception</b></label><br/>
 <input type="numero" name="tel" placeholder=" EX:71000000" maxlength="8" required><br/> 

 <select name="bookmaker" id="bookmaker" >
<option  value="1xbet">1xbet</option>
 <option value="Betwinner">Betwinner</option>
</select>	
 
 <input type="submit" name="Confrimer" id="submit" value="Confrimer">
 
  
</body>
</html> 
