<?php
$insert = false;
if(isset($_POST['name'])){
}
// Database connection
$_SERVER = "localhost";
$USERNAME= "root";
$PASSWORD= "";
$con= mysqli_connect($_SERVER, $USERNAME, $PASSWORD);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}

    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $desc=$_POST['desc'];
    // $date=$_POST['date'];
$sql=" INSERT INTO `trip`.`trip` ( `name`, `age`, `phone`, `gender`, `email`, `other`, `date`) VALUES ( '$name', '$age', '$phone', '$gender', '$email', '$desc',current_timestamp);";
// echo $sql;
if($con->query($sql)==true){
    // echo "successfully inserted";
    $insert = true;

}
else{
    echo "error: $sql <br> $con->error";
}
// Close the connection
$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <video autoplay loop muted plays-inline class="video-background">
            <source src="12129469_3840_2160_50fps.mp4" type="video/mp4">
        </video>
    <div class="container">
        <h1>
            welcome to travel form
        </h1>
        <p>
            enter your details to conform your travel and get a confirmation email
        </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="age" id="age" placeholder="Enter your age" required>
            <input type="number" name="phone" id="phone" placeholder="Enter your phone number" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter any other information here"></textarea>

            <button type="submit" class="btn">Submit</button>

            <?php
            if($insert == true){
                echo "<p class='submit'> your form has been submitted successfully</p>";
            }
            else{
                echo "<p class='submit'> your form has not been submitted successfully</p>";
            }
            
            ?>
            <!-- <button type="reset" class="btn">Reset</button> -->

        </form>
    </div>
            <script src="index.js"></script>



</body>
</html>