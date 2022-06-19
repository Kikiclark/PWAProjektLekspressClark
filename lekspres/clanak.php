<?php
    include 'connect.php';
    define('UPLPATH', 'img/');
    $id = $_GET['id'];
    $query3 = "SELECT * FROM clanak WHERE arhiva=0 AND id = '$id'";
    $result3 = mysqli_query($dbc, $query3) or die(mysqli_error($connect));

    while($row = mysqli_fetch_array($result3)){

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Clanak</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="b-logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link">HOME</a>
                            <a href="#" class="nav-item nav-link">MONDE</a>
                            <a href="unos.html" class="nav-item nav-link">UNOS</a>
                            <a href="#" class="nav-item nav-link">ECONOMIE</a>
                            <a href="contact.html" class="nav-item nav-link">ADMINISTRACIJA</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">monde</a></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <section class="cointainer">
        <h2 class="category"><?php
        echo "<span>".$row['kategorija']."</span>";
        ?></h2>
        <article class="res row justify-content-center align-items-center" style="margin: 0px;">
            <h2 class="col-lg-12">
                <strong class="naslov">
                    <?php
                    echo $row['naslov'];
                    ?>
                </strong>
            </h2>
            <p class="col-lg-12 tekst">
                <?php
                echo "<i>".$row['sazetak']."</i>";
                ?>
        
            </p>
            <ul class="col-lg-12">
                <li>
                    <?php
                    echo "<i>".$row['datum']."</i>";
                    ?>
                </li>
            </ul>
            <div class="col-lg-2 col-sm-0"></div>
            <?php
            echo '<img src="' . UPLPATH . $row['slika'] . '"class="col-lg-8 slikica col-sm-12">';
            ?><!--
            <img src="slike/slika1.PNG" alt="igraci" class="col-lg-8 slikica col-sm-12">-->
            <div class="col-lg-2 col-sm-0"></div>

            <div class="col-lg-3 col-sm-0"></div>
            <p class="col-lg-6 tekst col-sm-12">
                <?php
                echo $row['tekst'];
                ?>    
            </p>
            <div class="col-lg-3 col-sm-0"></div>
        </article>

    </section>
        <!-- Single News Start
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sn-container">
                            <h1 class="sn-title">Lorem ipsum dolor sit amet</h1>                
                            <div class="footer-bottom">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                publié le 16/05/2019 19:35
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                            <div class="sn-img">
                                <img src="img/bojoWind.jpg" />
                            </div>
                            <div class="sn-content">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>
                                    Praesent ultricies, mauris eget vestibulum viverra, neque lorem malesuada mauris, eget rhoncus lectus enim a lorem. Vivamus at vehicula risus, eget facilisis massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et posuere sapien. Fusce bibendum lorem sem, quis tincidunt felis mattis nec.
                                </p>
                                </br>
                                <p>
                                    Proin vel nulla purus. Nunc nec eros in nisi efficitur rutrum quis sed eros. Mauris felis dolor, rhoncus eget gravida vitae, pretium vel arcu. Cras blandit tellus eget tellus dictum venenatis. Sed ultricies bibendum dictum. Etiam facilisis erat id turpis tincidunt malesuada. Duis bibendum sapien eu condimentum sagittis. Proin nunc lorem, ullamcorper vel tortor sodales, imperdiet lacinia dui. Sed congue, felis id rhoncus varius, urna lacus imperdiet nunc, ut porttitor mauris mi quis mi. Integer rutrum est finibus metus eleifend scelerisque. Morbi auctor dignissim purus in interdum. Vestibulum eu dictum enim. Suspendisse et sem vitae velit feugiat facilisis.
                                </p>    
                                </br>
                                <p>
                                    Vestibulum sit amet ullamcorper sem. Integer hendrerit elit eget purus sodales maximus. Quisque ac nulla arcu. Morbi venenatis arcu ac arcu cursus pharetra. Morbi sit amet viverra augue, ac ultricies libero. Praesent elementum lectus mi, eu elementum urna venenatis sed. Donec auctor purus ut mattis feugiat. Integer mi erat, consectetur sed tincidunt vitae, sagittis elementum libero. Vivamus a mauris consequat, hendrerit lectus in, fermentum libero. Integer mattis bibendum neque et porttitor.
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>-->
        <!-- Single News End-->        
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Christian Clark
                            cclark@tvz.hr
                            2022
                            </p>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Footer Bottom End -->
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
