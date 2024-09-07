<?php
include"actions/database.php";
if (!$id = $_SESSION['u_id']) {
		header('Location: index.php');
}
$req = "SELECT * FROM users WHERE u_id = '$id'";
$rep = mysqli_query($db,$req);
if($rep)
    $resultat = mysqli_fetch_assoc($rep);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace Etudiant</title>
    <link rel="stylesheet" href="styles/css/dash-board.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="styles/css/resume.css">
    <script type="text/javascript" src="styles/js/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/css/blog.css">
    <link rel="stylesheet" href="styles/css/setting.css">
    <link rel="stylesheet" href="styles/css/menu-style.css">
    <script type="text/javascript" src="styles/js/menu.js"></script>
  <!--  <link rel="stylesheet" href="styles/font-awesome/css/all.css">-->


</head>

<body <?=(!isset($_GET['val'])||!in_array($_GET['val'],array(1,2,3,4)))?"":"style=\"overflow: hidden;\"" ?>>
    <!--wrapper start-->
    <div class="wrapper">

        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="uploads/<?=$resultat['Photo']?>" alt=""><p><?=$resultat['Nom']." ".$resultat['Prenom']?></p>
                </center>
                <li class="item">
                    <a href="?val=5" class="menu-btn"><i class="fas fa-desktop"></i><span>GINF1</span></a>
                </li>
                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="?val=1" class="res"><i class="fas fa-image"></i><span>Resume</span></a>
                        <a href="?val=2" class="cv"><i class="fas fa-address-card"></i><span>CV</span></a>
                    </div>
                </li>
                <li class="item" id="messege">
                    <a href="#messege" class="menu-btn">
                        <i class="fas fa-envelope"></i><span>Blog GINF1<i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="?val=3" class="disc"><i class="fas fa-envelope"></i><span>Discussions</span></a>
                    </div>
                </li>
                <li class="item" id="setting">
                    <a href="#setting" class="menu-btn">
                        <i class="fas fa-cog"></i><span>Setting <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="?val=4" class="stng"><i class="fas fa-lock"></i><span>Password</span></a>
                    </div>
                </li>
            </div>
        </div>
        <!--sidebar end-->
                <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <div class="title"><span class="title-hide">ENSA<span class="sec-span">-TANGER</span></span></div>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="actions/deconnexion.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
        <!--header menu end-->
        <!--main container start-->
        <div class="main-container">