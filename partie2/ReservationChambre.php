<html xmlns="http://www.w3.org/1999/xhtml">

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hotel Mariott de Constanine">
    <meta name="author" content="CHEROUANA Wissem">
    <meta name="keywords" content="Hotel, 5 stars, Algérie, Constantine, ville des ponts suspondus, capitale de la culture">

    <title>Hôtel Mariott de Constantine</title>

    <link href="css/style.css" rel="stylesheet">
     
    
</head>


<body>
    

<h1><center> Formulaire de réservation  d'une chambre </center></h1>
<form method="post" enctype="multipart/form-data" class="formulaire">
  
    <fieldset class="rubrique" >
        <legend> <h2> Informations personnelles : </h2></legend>
    <label>👦 Nom* : </label>                  
        <input type="text" name="nom" required="required" /><br/> <br/>  
    
   <label>  👦 Prénom* :</label>              
        <input type="text" id="prenom"  name="prenom" required="required" /><br/>  <br/>  
    
    <label>  📆 Date naissance* : </label> 
        <input type="date" name="dateN" id="dateN" required="required" onmouseout="getAge()" /><br/>
        
  <br/>
        
    <label>  📍 Adresse* : </label> 
        <input type="text" name="adresse" required="required" /><br/><br/>
           
    <label>  ☎ Téléphone* : </label>
        <input type="text" name="tel" required="required" /><br/><br/>
    
    <label>  📧 Mail* : </label>
        <input type="text" name="mail" required="required" placeholder="tourist@hotmail.com"/><br/><br/>
    
    <label> 🔑 Mot de passe* : </label>
        <input type="password" name="password" required="required" maxlength="8" /><br/><br/>
     
</fieldset> <br/>

     

<fieldset class="rubrique">
<legend> <h2> Options de la réservation : </h2></legend>
    
        
    <label>  Date d'arrivée : </label>  <input type="date" name="dateArrivee" required="true" /> <br/><br/>
    <label> Date de départ : </label>  <input type="date" name="dateDepart" required="true" /> <br/><br/>
    <label> Type de la chambre : </label> 
    <select name="TypeChambre"> 
    <option value="Suite">Suite </option>
    <option value="Chambre1lit">Chambre à un lit</option>
    <option value="Chambre2lits">Chambre à 2 lits</option>
    <option value="Chambre3lits">Chambre à 3 lits</option>
    <option value="Chambre4lits">Chambre à 4 lits</option>
    </select>
 
</fieldset> <br/>  
    <br/><br/>
    <center><button class="envoyer" value="send" >Envoyer</button></center>

</form> 
 <script src="js/jquery-2.1.4.js"></script>
    
<script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
 <script>
jQuery(document).ready(function() {     
 	
       // init background slide images
        $.backstretch([
        "images/1.jpg",
        "images/4 - Copie.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>   
   

    
    
    
</body>
    

</html>