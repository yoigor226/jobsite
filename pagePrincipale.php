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
                        <li id="acceuil" style="display: none"><a href="pagePrincipale.html">ACCEUIL</a></li>
                        <li id="ins"><a href="#">S'INSCRIRE</a></li>
                        <li id="conn"><a href="connexion.html">CONNEXION</a></li>
                        <li><a href="service.html"> NOS SERVICES</a></li>
                        <li><a href="apropos.html"> A PROPOS</a></li>
                    
                    </ul>
                </div>
            
            </div>
            
            <!--MENU de la page-->
            <div class="corps">
                <div class="embleme">FugJob</div>
                <div class="slogan">Sourire à l’avenir, c’est<br> travailler avec espoir</div>
                
                <div id="choix" style="display: block">
                    <div class="boutons">
                        <button onclick="window.location.href='connexion.php'">CONNEXION</button>
                    
                        <button onclick="
                                         document.getElementById('choixconnection').style.display ='block'; 
                                         document.getElementById('acceuil').style.display ='block';
                                         document.getElementById('choix').style.display ='none'; document.getElementById('conn').style.display ='none'; 
                                         document.getElementById('ins').style.display ='none'
                                         ">S'INSCRIRE</button>
                    
                    </div>
                    
                </div>
                
                <div class="btn" id="choixconnection" style="display: none">
                    
                    <div class="bouton">
                        <button onclick="window.location.href='inscriptionAdmin.php'">EMPLOYEUR</button>
                        <button onclick="window.location.href='inscriptionClient.php'">EMPLOYE</button>
                    </div>
                    
                </div>
                
                
            </div>
            
        </div>
    </body>
</html>