<?php
require_once('config.php');

session_start();
$Email = $_SESSION['Email'];
$sql="SELECT * FROM `signup` WHERE `Email` LIKE '$Email'";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0){
    $row=mysqli_fetch_assoc($query);}


if (isset($_POST['Email']) && isset($_POST['Password'])) {
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];

        $sql="SELECT * FROM `signup` WHERE `Email` LIKE '$Email' AND `Password` LIKE '$Password'";
        $query=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($query);
        if($count>0){
            session_start();
            $_SESSION["Email"]=$Email;
            ?>
            <script>
                window.alert('Success');
                window.location.href="home.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                window.alert('Email or Password is Incorrect');
                window.location.href="../../index.php?<?php echo$row['id']; ?>";
            </script>
            <?php
        }
} else {
    // Handle the case where Email or Password is not set
    ?>
    <script>
        window.alert('Please enter both Email and Password');
        window.location.href="../../index.php?code=<?php echo$row['id']; ?>";
    </script>
    <?php
}
?>