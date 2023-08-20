
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
$totalAmount = 0;
foreach ($students as $student) {
    $totalAmount += $student["hostel"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
        .s{
            color: white;
        }
        .student-list {
    max-width: 70%;
   
        margin: 0 auto;
    padding: 1.5rem;
    align-content: flex-start;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    font-size: 55px;
/* margin-top: 30px; */
}
.h1{
    text-align: center !important ;
    margin-bottom: 5px;
    color: #4c60d2;
    font-size: 35px;
   
}
    </style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navigation-wrap ">
            <div class="container">
             <img class="logo" src="/image/logo3.jpg" class="navbar-brand" >
                <p class="s">Admin</p>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bg-dark ">
                        <li class="nav-item">
                            <a href="AboutUs" class="nav-link active" aria-current="page"><span class="me-2"></span><span>Home</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="roommate.php" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-solid fa-caret-down"></i></span><span>Menu</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-brands fa-first-order"></i></span><span>My Order</span></a>
                        </li> -->
                        <li class="nav-item">
                            <a href="admintotal.php" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-solid fa-address-card"></i></span></i><span>Total food Served</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-solid fa-gear"></i></span><span>Setting</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <!-- <li><a class="dropdown-item" href="student.php"><button class="main-btn">Student Login</button></a></li>
                                <li><a class="dropdown-item" href="canteen.php"><button class="main-btn">Canteen Login</button></a></li> -->
                                <li><a class="dropdown-item" href="AboutUs.php"><button class="main-btn">Log-Out</button></a></li>
                                

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--section-1 top banner-->

    <section id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="college.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="canteen2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="college_canteen.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="student-list">
    <h1 class="h1">Todays Total Amount</h1>
    <p>Total Amount: Rs<?php echo $totalAmount; ?></p>
        <!-- <ul id="studentList">
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
        </ul> -->
    </section>
<!--section about -->
<!-- <section>
    <div class="about-section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5 text-sec1">
                    <h1>About >></h1>

                </div>
            </div>
        </div>  
    </div>          

</section> -->

<!--section about us-->
<!-- <section>
    <div class="about-section wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                    <div class="card border-0">
                        <img src="image/first.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                    <h1>About SCOE Canteen</h1>
                    <p>Saraswati College of Engineering is the leading engineering institution in Navi Mumbai established in 2004. We aspire to be a leading research organization with a dream and vision of creating a knowledgeable society. SCOE is provided with spacious buildings to accommodate reception, auditorium, office, classrooms, staff rooms, drawing halls, laboratories, workshop, library, computer center, conference halls, examination hall, recreation center, sports rooms, canteen, and placement cell. This facilities count us one of the Top Engineering college In Navi Mumbai.</p>
                    <p>In a college setting, the main use of an online canteen system is to offer students and staff a convenient way to order and access meals. It can help reduce long queues, save time, and provide a seamless experience for placing food orders. Additionally, the system can help the college manage inventory, track sales, and gather data for menu planning and improving food services based on preferences and trends.</p>
                </div>
            </div>
        </div>
        <div class="container foo-type">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                    <h2>We make everythig by hand with the bast possible ingredients and its also good for your health.</h2>
                    <p>In a college setting, the main use of an online canteen system is to offer students and staff a convenient way to order and access meals. It can help reduce long queues, save time, and provide a seamless experience for placing food orders. Additionally, the system can help the college manage inventory, track sales, and gather data for menu planning and improving food services based on preferences and trends.</p>
                    <button class="main-btn mt-4 ">Learn More</button>

                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="caed border">
                        <img src="image/img-2.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--story-->
<!-- <section id="story">
    <div class="story-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-content">
                        <h2>When a man's stomach is full it makes no difference whether he is rich or poor.</h2>
                        <button class="main-btn mt-3">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>