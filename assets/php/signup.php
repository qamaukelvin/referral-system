<?php
require_once('config.php');

session_start();
$Email = $_SESSION['Email'];
$sql="SELECT * FROM `signup` WHERE `Email` LIKE '$Email'";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0){
    $row=mysqli_fetch_assoc($query);}


// Declare Variables 
$Firstname=$_POST['Firstname'];
$Surname=$_POST['Surname'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Referralcode=$_POST['Referralcode'];


//Check if another Account is in existence and if not Insert sign up data to a database table
$existing="SELECT * FROM `signup` WHERE `Email` LIKE '$Email'";
$select=mysqli_query($conn,$existing);
if(mysqli_num_rows($select)>0){
    ?>
    <script>
        window.alert('Account Already Exists');
        window.location.href="../../index.php?code=<?php echo$row['id']; ?>";
    </script>
    <?php
}else{

$sql="INSERT INTO `signup` (`id`, `Firstname`, `Surname`, `Email`, `Password`, `Referralcode`, `Creationtime`) VALUES (NULL, '$Firstname', '$Surname', '$Email', '$Password', '$Referralcode', current_timestamp())";

//Check if data was successfully inserted and if not display an error 
$insert=mysqli_query($conn,$sql);

if($insert){
    ?>
    <script>
        window.alert("Success");
        window.location.href="home.php";
    </script>
    <?php
    session_start();
    $Email = $_SESSION['Email'];
}else{
    ?>
    <script>
        window.alert("Error !");
        window.location.href="../../index.php?code=<?php echo$row['id']; ?>";
    </script>
    <?php

}
}
?>