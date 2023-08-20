
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "pre"; 

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `pre`"; 

$result = $con->query($sql);
$students = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Find Roommates - Sharing Is Earning Now</title>
</head>
<style>
  
body, h1, h2, h3, p, ul, li, a {
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
    padding: 0.6rem;
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

button {
            background-color: #4c60d2;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #344f99;
        }

.intro {
    text-align: center;
    padding: 4rem;
    color: #333;
    font-size: 25px;
}

.student-list {
    max-width: 70%;
   
        margin: 0 auto;
    padding: 1.5rem;
    align-content: flex-start;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    font-size: 19px;
margin-top: 80px;
}

ul {
    list-style: none;
    font-size: 15px;
}

li {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 1rem;
    margin-bottom: 1rem;
    font-size: 15px;
}

a {
    color: #333;
    text-decoration: none;
    justify-content: left;
}

a:hover {
    text-decoration: underline;
}
.h1{
    text-align: center !important ;
    margin-bottom: 20px;
    color: #4c60d2;
   
}
.student-image {
    float: right;
    margin-left: 20px;
}

.student-image img {
    max-width: 100px; /* Adjust the width as needed */
    height: auto;
    border-radius: 5px;
}
</style> 
 <body>
    <header>
        <nav>
            <a href="AboutUs.php">Home</a>
            <a href="student.php">Back</a>

            
           
        </nav>
    </header>
 
    <section class="student-list">
    <h1 class="h1">Check out the Menu and Place your order</h1>
        <ul id="studentList">
            <?php foreach ($students as $student) { ?>
                <li>
                    <h2><?php echo $student["name"]; ?></h2>
                    <p><strong>Amount:</strong> <?php echo $student["hostel"]; ?></p>
                    <p><strong>Quantity:</strong> <?php echo $student["location"]; ?></p>
                    <?php if (!empty($student["image"])) { ?>
                        <div class="student-image">
                            <img src="<?php echo $student['image']; ?>" alt="Student Image">
                        </div>
                    <?php } ?>
                    <button><a href="checkout.php">Checkout</a></button>

                </li>
            <?php } ?>
        </ul>
    </section>

</body>
</html>
