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
$sql= "INSERT INTO entreprise
       (nomentreprise, 
       pseudoentreprise, 
       motdepasseentreprise, 
       emailentreprise, 
       localisation, 
       domaineentreprise, 
       logo)
VALUES ('".$_POST["nomentreprise"]."',
        '".$_POST["pseudoentreprise"]."', 
        '".$_POST["motdepasseentreprise"]."',
        '".$_POST["emailentreprise"]."',
        '".$_POST["localisation"]."',
        '".$_POST["domaineentreprise"]."',
        '".$_FILES["logo"] ["tmp_name"]."')";
if
(mysqli_query($conn, $sql)) {
echo "New record created successfully";
    //header("location: affichdb.php");

} else
{
echo "Error: " . $sql
. "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>