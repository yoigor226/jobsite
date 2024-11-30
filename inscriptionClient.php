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
                <center><h2 style="color: aqua">Inscrivez-vous ici</h2>
                   <form action="insertClientdb.php" method="Post" enctype="multipart/form-data">
                       <input type="text" name="nom" placeholder="NOM">
                        <input type="text" name="prenom" placeholder="Prenom"><br>
                       <input type="text" name="pseudo" placeholder="Pseudo">
                        <input type="password" name="motdepasse" placeholder="Mot de passe"><br>
                       <input type="email" name="email" placeholder="Email">
                       <input type="date" name="datedenaissance" placeholder="Date de Naissance"><br>
                       
                       <input list="villeorigine" name="origine" placeholder="Ville d'Origine">
                         <datalist id="villeorigine">
                             <option value="Internet Explorer">
                             <option value="Firefox">
                             <option value="Chrome">
                             <option value="Opera">
                             <option value="Safari">
                         </datalist>
                       <input list="villeresidence" name="residence" placeholder="Ville de Residence">
                         <datalist id="villeresidence">
                             <option value="Internet Explorer">
                             <option value="Firefox">
                             <option value="Chrome">
                             <option value="Opera">
                             <option value="Safari">
                         </datalist><br>
                       <input list="dom" name="domaine" placeholder="Dommanie Rechercher">
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
                       <input list="diplo" name="diplome" placeholder="Dernier Diplôme">
                         <datalist id="diplo">
                             <option value="Baccalaureat">
                             <option value="BEPC">
                             <option value="CEP">
                             <option value="BTS">
                             <option value="LICENCE">
                             <option value="Master">
                             <option value="Doctorat">
                             <option value="LICENCE">
                             <option value="Autres">
                         </datalist><br>
                       <br>
                       <label style="">Travailler:</label>
                        <select name="typetravail">
                             <option>A Temps Plein</option>
                             <option>A Temps Partiel</option>
                       </select>
                       
                       <label style="color: aliceblue">Sexe:</label>
                        <select name="genre">
                             <option>Homme</option>
                             <option>Femme</option>
                             <option>Autres</option>
                       </select><br>
                       <label style="color: aliceblue">Photo de profil:</label>
                       <input type= "file" name="photoprofile" placeholder="Photo de profil" />
                       
                        <center><input type="submit" class="input"></center>
                   </form>
                   
            </center>

             </div>
                
                
            </div>
            
        </div>
    </body>
</html>