<?php
$servername = "localhost";
$username = "igor";
$password = "igor";
$dbname = "jobsite";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
    }

$sql = "SELECT nom FROM client WHERE pseudo = '".$_POST["pseudo"]."' AND motdepasse = '".$_POST["motdepasse"]."'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Connexion réussie option Client";
} 

else {
    $sql = "SELECT nomentreprise FROM entreprise WHERE pseudoentreprise = '".$_POST["pseudo"]."' AND motdepasseentreprise = '".$_POST["motdepasse"]."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
  echo "Connexion réussie option Admin";
    }
    else{
        echo "Erreur de connexion";
    }
  
}

$conn->close();
?>