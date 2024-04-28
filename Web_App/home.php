<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "db_conn.php";
include 'php/User.php';
$user = getUserById($_SESSION['id'], $conn);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/home_style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">City Guide of <span style="color: #fabd02">Pateros</span> </a>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="searchBox" onchange="openPage()">
        <label for="searchBox" class="fas fa-search"></label>
    </form>

    <script>
        function openPage(){
            var x = document.getElementById("searchBox").value;

            if (x == "Pateros"){
                window.open("map.php")
            }
            if (x == "pateros"){
                window.open("map.php")
            }
            if (x == "pateros city"){
                window.open("map.php")
            }
            if (x == "Pateros city"){
                window.open("map.php")
            }
            if (x == "San Roque"){
                window.open("sanroque.php")
            }
            if (x == "san roque"){
                window.open("sanroque.php")
            }
            if (x == "Aguho"){
                window.open("aguho.php")
            }
            if (x == "aguho"){
                window.open("aguho.php")
            }
            if (x == "Sta Ana"){
                window.open("staana.php")
            }
            if (x == "sta ana"){
                window.open("staana.php")
            }
            if (x == "Martirez"){
                window.open("martirez.php")
            }
            if (x == "martirez"){
                window.open("martirez.php")
            }
            if (x == "Sto. Rosario-Silangan"){
                window.open("rosario_silangan.php")
            }
            if (x == "sto. rosario-silangan"){
                window.open("rosario_silangan.php")
            }
            if (x == "Bagong Calzada"){
                window.open("bagong_calzada.php")
            }
            if (x == "bagong calzada"){
                window.open("bagong_calzada.php")
            }
            
        }   
    </script>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-moon" id="theme-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.html">about</a>
        <a href="contact_us.html">contact us</a>
        <a href="profile.php">My Profile</a>
        <a href="index.php">logout</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-up">
        <h3>Welcome <span style="color: #fabd02">Visitors!</span></h3>
        <p>Explore the city with us!</p>
        
    </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="paterossights" id="paterossights">

    <h1 class="heading"> <span>pateros sights</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pateros-church.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> San Roque </h3>
            </div>
            <div class="content">
                <div class="price"> Diocesan Shrine of Sta. Marta - San Roque Parish </div>
                <a href="sanroque.php" class="btn"> Visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pateros-city-hall.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Aguho </h3>
            </div>
            <div class="content">
                <div class="price"> Pateros Municipal Hall </div><br><br>
                <a href="aguho.php" class="btn"> Visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/house.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> sta ana </h3>
            </div>
            <div class="content">
                <div class="price"> Old Houses </div><br><br>
                <a href="staana.php" class="btn"> Visit now</a>
            </div>
        </div>
    </div>
</div>

</section>

<!-- review section starts  -->

<section class="products" id="products">

    <h1 class="heading"> <span>products</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/balut.jpg" alt="">
            </div>
            <div class="content">
                <h3>balut</h3>
                <a type="button" onclick="location.href='https://www.bing.com/search?q=what+are+the+clocation+of+saling+balut+in+pateros&cvid=0552394371894af39b7bbbca9c6f7fe5&aqs=edge..69i57.11514j0j1&pglt=43&FORM=ANNTA1&PC=U531'" class="btn">find out</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/Salted-Duck-Egg.jpg" alt="">
            </div>
            <div class="content">
                <h3>salted egg</h3>
                <a type="button" onclick="location.href='https://pateros.infoisinfo-ph.com/search/egg'" class="btn">find out</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/alfombra.jpg" alt="">
            </div>
            <div class="content">
            <h3>Alfombra Slippers</h3>
                <a type="button" onclick="location.href='http://www.thepinoywarrior.com/2012/11/alfombras-of-pateros.html#:~:text=Footprint%20Alfombra%20or%20Teylan%27s%20Footwear%20can%20be%20found,and%20styles.%20Labels%3A%20filipino%20culture%2C%20footwear%2C%20pateros%2C%20philippines'" class="btn">find out</a>
            </div>
        </div>

    </div>

</section>

<!-- others to visit section starts  -->

<section class="otherstovisit" id="otherstovisit">

    <h1 class="heading"> <span>others to visit</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/dulong-bayan.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Martirez </h3>
            </div>
            <div class="content">
                <div class="price"> Dulong Bayan Monument </div><br><br>
                <a href="martirez.php" class="btn"> visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/manggahan-shrine.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Sto. Rosario-Silangan </h3>
            </div>
            <div class="content">
                <div class="price"> Manggahan shrine </div><br><br>
                <a href="rosario_silangan.php" class="btn"> visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/gmm.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> bagong calzada </h3>
            </div>
            <div class="content">
                <div class="price"> Garden of Memories Memorial Park </div>
                <a href="bagong_calzada.php" class="btn"> visit now</a>
            </div>
        </div>

<!-- others to visit  section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>