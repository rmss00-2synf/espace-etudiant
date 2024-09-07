<?php
require "../../actions/database.php";
$id = $_SESSION['u_id'];
$req = "SELECT * FROM users WHERE u_id = '$id'";
if ($rep = mysqli_query($db,$req)) {
  echo "<h3>  <a href=\"../../index2.php\" style=\"color:white\">ACCUEIL</a></h3>";
}else die("Erreur");
if(!$resul = mysqli_fetch_assoc($rep))
die("Erreur");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="../../uploads/<?=$resul['Photo']?>" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold"><?=$resul['Nom']." ".$resul['Prenom'] ?></p>
           <p class="regular">Edutiant(e)</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               <?=$resul['Adresse']?>, <?=$resul['Ville']?> <br /> MAROC
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
             <?=$resul['Tel']?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
             <?=$resul['Email']?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
             <?=$resul['Site_Web']?>
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">skill's</p>
         </div>
         <ul>
          <?php
            $req2 = "SELECT competance, maitrise  FROM competances WHERE cos_id = '$id'";
            if ($rep = mysqli_query($db,$req2)) {
              while ($resul2 = mysqli_fetch_assoc($rep)) {?>
              <li>
             <div class="skill_name">
               <?=$resul2['competance']?>
             </div>
             <div class="skill_progress">
               <span style="width: <?=$resul2['maitrise']?>%;"></span>
             </div>
             <div class="skill_per"><?=$resul2['maitrise']?>%</div>
           </li>
              <?php }
            }else echo"<h1 style=\"color:white\">Oups</h1>";
          ?>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
          <?php if ($resul['FB']) {?>
            
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>Stephen@facebook</p>
             </div>
           </li>
           <?php }if ($resul['TW']) {?>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p>Stephen@twitter</p>
             </div>
           </li>
           <?php }if ($resul['YT']) {?>
          
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p>Stephen@youtube</p>
             </div>
           </li>
           <?php }if ($resul['LD']) {?>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p>Stephen@linkedin</p>
             </div>
           </li>
           <?php }?>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About us</p>
         </div>
        <p><?=$resul['Profil']?></p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
        <ul>
        <?php
            $req3 = "SELECT w_debut, w_end, w_theme, w_contenu  FROM work_exps WHERE ws_id = '$id'";
            if ($rep = mysqli_query($db,$req3)) {
              while ($resul3 = mysqli_fetch_assoc($rep)) {?>
            <li>
                <div class="date"><?=$resul3['w_debut']?> - <?=$resul3['w_end']?></div> 
                <div class="info">
                     <p class="semi-bold"><?=$resul3['w_theme']?>.</p> 
                  <p><?=$resul3['w_contenu']?>!</p>
                </div>
            </li>
            <?php }
            }else echo"<h1 style=\"color:white\">Oups</h1>";
          ?>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Education</p>
         </div>
      <ul>
      <?php
            $req3 = "SELECT e_debut, e_end, e_theme, e_contenu  FROM educations WHERE es_id = '$id'";
            if ($rep = mysqli_query($db,$req3)) {
              while ($resul3 = mysqli_fetch_assoc($rep)) {?>
            <li>
                <div class="date"><?=$resul3['e_debut']?> - <?=$resul3['e_end']?></div> 
                <div class="info">
                     <p class="semi-bold"><?=$resul3['e_theme']?></p> 
                  <p><?=$resul3['e_contenu']?>!</p>
                </div>
            </li>
            <?php }
            }else echo"<h1 style=\"color:white\">Oups</h1>";
          ?>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">Hobby</p>
         </div>
       <ul>
       <?php if ($resul['Lecture']) {?>
         <li><i class="fas fa-book"></i></li>
         <?php } if ($resul['Jeux']) {?>
         <li><i class="fas fa-gamepad"></i></li>
         <?php } if ($resul['Musique']) {?>
         <li><i class="fas fa-music"></i></li>
         <?php } if ($resul['Environnement']) {?>
         <li><i class="fab fa-pagelines"></i></li>
         <?php }?>
      </ul>
    </div>
  </div>
</div>
</body>
</html>