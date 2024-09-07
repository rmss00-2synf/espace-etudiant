
<div class="portfoliocard">
     <div class="coverphoto"></div>
     <!-- <div class="profile_picture"><img src="uploads/" alt=""></div> -->
     <div class="left_col">
         <div class="followers">
             <div class="follow_count">14,541</div>
             Moyenne Ap1
         </div>
         <div class="following">
             <div class="follow_count">16,1</div>
             Moyenne Ap2
         </div>
     </div>
     <div class="right_col">
         <h2 class="name"><?=$resultat['Nom']." ".$resultat['Prenom']?></h2>
         <h3 class="location"><?=$resultat['Adresse']." ".$resultat['Ville']?>, MAROC</h3>
         <ul class="contact_information">
             <li class="work">STUDENT</li>
             <li class="website"><a class="nostyle" href="#"><?=$resultat['Site_Web']?></a></li>
             <li class="mail"><?=$resultat['Email']?></li>
             <li class="phone"><?=$resultat['Tel']?></li>
             <li class="resume"><a href="#" class="nostyle">GINF1</a></li>
         </ul>
     </div>
</div>
