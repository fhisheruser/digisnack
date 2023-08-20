<?php

if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username, $password);
if(!$con){
    die("connection failed".mysqli_connect_error());

}
// echo"success";
$name=$_POST['name'];
$hostel=$_POST['hostel'];
$location=$_POST['location'];
$image_path = 'C:\xampp\htdocs\digisnack\image';
// if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
//     // Handle uploaded image
//     $image_tmp = $_FILES['image']['tmp_name'];
//     $image_name = $_FILES['image']['name'];
//     $image_path = "images/$image_name"; // Change this path as needed

//     move_uploaded_file($image_tmp, $image_path);
// }
$sql="INSERT INTO `pre`.`pre` (`name`, `hostel`, `location`, `image`) VALUES ('$name', '$hostel', '$location', '$image_path');";

// echo $sql;

if($con->query($sql)==true){
    // echo"successful";

}
else{
    // echo"error:$sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Preference - Sharing Is Earning Now</title>
</head>
<style>

body, h1, h2, h3, p, label, input, textarea, button {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}


body {
    /* background-color: #f4f4f4;
    line-height: 1.6; */
   
            background-image: url('college.jpg');
            background-size: cover;
            background-position: center;
            /* background-repeat: no-repeat; */
            /* line-height: 2.6; */
   
}
header {
    background-color: #4c60d2;
    color: #fff;
    padding: 1rem;
}

nav {
    display: flex;
    justify-content: left;
    font-size: 30px;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 1rem;
}

.intro {
    text-align: center;
    padding: 4rem;
    color: #333;
    font-size: 25px;
}

.preference-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    margin-top: 90px;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input,
textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 3px;
}

textarea {
    resize: vertical;
}

button {
    display: block;
    width: 100%;
    padding: 0.5rem;
    background-color: #4c60d2;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #354da9;
}

.h1{
    text-align: center !important ;
    margin-bottom: 20px;
    color: #4c60d2;
}

</style>
<body>
    <header>
        <nav>
            <a href="AboutUs.php">Home</a>
            <a href="roommate.php">Updated Menu</a>
            <a href="canteen.php">Back</a>

        </nav>
    </header>
    <!-- <section class="intro">
        <h1>Add Your Roommate Preference</h1>
        <p>Fill out the form below to add your roommate preference.</p>
    </section> -->
    <section class="preference-form">
    <h1 class="h1">Add Your Roommate Preference</h1>
        <p class="h1">Fill out the form below to add your roommate preference.</p>
        <form id="preferenceForm" method="post" action="preference.php" enctype="multipart/form-data">            
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="hostel">Amount:</label>
            <input type="number" id="hostel" name="hostel" required>
            
            <label for="location">Quantity:</label>
            <input type="number" id="location" name="location" required>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            
            <button type="submit">Submit</button>
        </form>
    </section>

</body>
</html>

