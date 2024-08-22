<?php
require_once('config.php');
session_start();
$Email = $_SESSION['Email'];
$sql="SELECT * FROM `signup` WHERE `Email` LIKE '$Email'";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0){
    $row=mysqli_fetch_assoc($query);}

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-d4H9/NSPWtKVjlSlJzi6e8mzFEv2C3HpAdszKZ9oVdb3w7VNUSucxN4bWUGJGxEz27EfKDEfUnKFC5nx9cc2JQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col my-link">
                    My link
                    <?php echo$row['Email'];?>

                  http://localhost/referralSystem/?code=<?php echo$row['id']; ?>
                </div>
                <div class="col referred">
                    Referred
                </div>
                <div class="col stats">
                    Stats
                </div>
            </div>
        </div>
    </section>

<!--javascript-->
<script src="assets/js/main.js"></script>
<link rel="stylesheet" href="assets/bootstrap5/js/bootstrap.bundle.min.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>