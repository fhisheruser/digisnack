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
    </style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navigation-wrap ">
            <div class="container">
                 <img class="logo" src="logo3.jpg" class="navbar-brand">
                <p class="s">Canteen</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bg-dark ">
                        <li class="nav-item">
                            <a href="AboutUs" class="nav-link active" aria-current="page"><span class="me-2"></span><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="preference.php" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-solid fa-caret-down"></i></span><span>Change Menu</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-brands fa-first-order"></i></span><span>Order recieved</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="aboutUs.php" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-solid fa-address-card"></i></span></i><span>About Us</span></a>
                        </li> -->
                        <li class="nav-item">
                            <a href="" class="nav-link" aria-current="page"><span class="me-2"><i class="fa-solid fa-gear"></i></span><span>Setting</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <!-- <li><a class="dropdown-item" href="#"><button class="main-btn">Student Login</button></a></li> -->
                                <!-- <li><a class="dropdown-item" href="#"><button class="main-btn">Canteen Login</button></a></li> -->
                                <!-- <li><a class="dropdown-item" href="#"><button class="main-btn">Admin Login</button></a></li> -->
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

<!--section about -->

<!--section about us-->

<!--story-->
<section id="story">
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
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>