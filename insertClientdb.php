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

    
$sql= "INSERT INTO client
       (nom, 
       prenom, 
       pseudo, 
       motdepasse, 
       email, 
       datedenaissance, 
       origine, 
       residence, 
       domaine, 
       diplome, 
       typetravail, 
       genre, 
       photoprofile)
VALUES ('".$_POST["nom"]."',
        '".$_POST["prenom"]."', 
        '".$_POST["pseudo"]."',
        '".$_POST["motdepasse"]."',
        '".$_POST["email"]."',
        '".$_POST["datedenaissance"]."',
        '".$_POST["origine"]."',
        '".$_POST["residence"]."',
        '".$_POST["domaine"]."',
        '".$_POST["diplome"]."',
        '".$_POST["typetravail"]."',
        '".$_POST["genre"]."',
        '".$_FILES["photoprofile"] ["tmp_name"]."')";
if
(mysqli_query($conn, $sql)) {
echo "New record created successfully";
    //header("location: affichdb.php");

} else
{
echo "Error: yo ta gaffer" . $sql
. "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>