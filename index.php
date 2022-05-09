<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membuat Website dengan PHP</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <link rel="stylesheet" href="assets/style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">Harry Setiawan</h1>
        <h3 class="desc">Membuat Website dengan PHP dari Awal</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=biodata">Biodata</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "assets/home.php";
                break;
                case 'about':
                include "assets/about.php";
                break;
                case 'contact':
                include "assets/contact.php";
                break;
                case 'biodata';
                include 'assets/cbbio.php';          
            }
        }
else{
            include "home.php";
        }
        ?>
 
    </div>
    <footer>
        &copy Copyright Harry Setiawan | 0701191096
    </footer>
</body>
</html>