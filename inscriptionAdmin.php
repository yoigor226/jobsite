<!DOCTYPE>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FugJob</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="page">
            
            <!--navbar de la page-->
            <div class="navbar">
                <div class="logo">
                    <p>FugJob</p>
                </div>
                
                <div class="menu">
                    <ul>
                        <li id="acceuil" style="display: block"><a href="pagePrincipale.html">ACCEUIL</a></li>
                        <li><a href="service.html"> NOS SERVICES</a></li>
                        <li><a href="apropos.html"> A PROPOS</a></li>
                    
                    </ul>
                </div>
            
            </div>
            
            <!--MENU de la page-->
            <div class="corps">
                <div class="emblemeins">FugJob</div>
                
                <div class="forminscription">
                <center><h2 style="color: aqua">Enregistrez Votre Entreprise  ici</h2>
                   <form action="insertAdmindb.php" method="Post" enctype="multipart/form-data"v>
                       <input type="text" name="nomentreprise" placeholder="NOM">
                       <input type="text" name="pseudoentreprise" placeholder="Pseudo"><br>
                        <input type="password" name="motdepasseentreprise" placeholder="Mot de passe">
                       <input type="email" name="emailentreprise" placeholder="Email"><br>
                       
                       <input list="ville" name="localisation" placeholder="Ville">
                         <datalist id="ville">
                             <option value="Internet Explorer">
                             <option value="Firefox">
                             <option value="Chrome">
                             <option value="Opera">
                             <option value="Safari">
                         </datalist>
                       <input list="dom" name="domaineentreprise" placeholder="Dommanie d'Expertise">
                         <datalist id="dom">
                             <option value="Menage">
                             <option value="Informatique">
                             <option value="Electronique">
                             <option value="Mecanique">
                             <option value="Electricité">
                             <option value="Agriculture">
                             <option value="Elevage">
                             <option value="Commerce">
                             <option value="Industriel">
                             <option value="Minier">
                             <option value="Livraison">
                             <option value="Enseignement">
                             <option value="Autres">
                         </datalist>   
                       <br>
                       
                       <label style="color: aliceblue">Logo:</label>
                       <input type="file" name="logo"/>
                       
                        <center><input type="submit" class="input"></center>
                   </form>
                   
            </center>

             </div>
                
                
            </div>
            
        </div>
    </body>
</html>