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
                <div class="embleme">FugJob</div>
                
                <div class="form">
                        <h2>Connectez-vous ici</h2>
                        <form action="verificationconnexion.php" method="Post">
                           <input type="text" name="pseudo" placeholder="Pseudo" required>
                            <input type="password" name="motdepasse" placeholder="Mot de passe" required>
                            <input type="submit" class="input">
                        </form>


                        <p class="link">Vous ne possédez pas de compte ?<br>
                            <a href="pagePrincipale.html">Inscrivez-vous</a> ici 
                        </p>
                        

                 </div>

                
                
            </div>
            
        </div>
    </body>
</html>