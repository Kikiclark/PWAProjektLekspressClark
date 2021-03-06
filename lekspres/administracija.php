<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>L'Express</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
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
                            <a href="index.html" class="nav-item nav-link active">HOME</a>
                            <a href="#" class="nav-item nav-link">MONDE</a>
                            <a href="unos.html" class="nav-item nav-link">UNOS</a>
                            <a href="#" class="nav-item nav-link">ECONOMIE</a>
                            <a href="administracija.php" class="nav-item nav-link">ADMINISTRACIJA</a>
                            <a href="#" class="nav-item nav-link">OFFRES LOCALES</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

<?php
    include 'connect.php';
    define('UPLPATH', 'img/');
    if(isset($_POST['update'])){
        $picture = $_FILES['slika']['name'];
        $title=$_POST['title'];
        $about=$_POST['about'];
        $content=$_POST['content'];
        $category=$_POST['category'];
    if(isset($_POST['archive'])){
        $archive=1;
    }else{
        $archive=0;
    }
    $target_dir = 'img/';
    $target_file = $target_dir . basename($_FILES['slika']['name']);
    move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file);
    $id=$_POST['id'];
    $query = "UPDATE clanak SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
    }

    
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $query2 = "DELETE FROM clanak WHERE id=$id ";
        $result2 = mysqli_query($dbc, $query2);
        }
    
    $query3 = "SELECT * FROM clanak";
    $result3 = mysqli_query($dbc, $query3);
    while($row = mysqli_fetch_array($result3)) {

?>
    <section>
        <article>
        <div class="container">
        <div class="row">

<?php

    echo '<form enctype="multipart/form-data" action="" method="POST">
    <div class="form-item">
    <label for="title">Naslov vijesti: </label>
    <div class="form-field">
    <input type="text" name="title" class="form-field-textual"
    value="'.$row['naslov'].'">
    </div>
    </div>
    <div class="form-item">
    <label for="about">Kratki sadr??aj vijesti: (do 50 znakova):</label>
    <div class="form-field">
    <textarea name="about" id="" cols="30" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea>
    </div>
    </div>
    <div class="form-item">
    <label for="content">Sadr??aj vijesti: </label>
    <div class="form-field">
    <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea>
    </div>
    </div>
    <div class="form-item">
    <label for="slika">Slika:</label>
    <div class="form-field">
    <input type="file" class="input-text" id="slika" value="'.$row['slika'].'" name="slika"/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px>
    
    </div>
    </div>
    <div class="form-item">
    <label for="category">Kategorija vijesti: </label>
    <div class="form-field">
    <select name="category" id="" class="form-field-textual"
    value="'.$row['kategorija'].'">
    <option value="monde">Monde</option>
    <option value="economie">Economie</option>
    </select>
    </div>
    </div>
    <div class="form-item">
    <label>Spremiti u arhivu:
    <div class="form-field">';
    if($row['arhiva'] == 0) {
    echo '<input type="checkbox" name="archive" id="archive"/>
    Arhiviraj?';
    } else {
    echo '<input type="checkbox" name="archive" id="archive"
    checked/> Arhiviraj?';
    }
    echo '</div>
    </label>
    </div>
    </div>
    <div class="form-item">
    <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
    <button type="reset" value="Poni??ti">Poni??ti</button>
    <button type="submit" name="update" value="Prihvati">Izmjeni</button>
    <button type="submit" name="delete" value="Izbri??i">Izbri??i</button>
    </div>
    </form>';




?>
                </div>
                
            </div>

            </article>

</section>
<?php
    }
?>  



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