<?php 
    // require "actions/database.php";
    $req = "SELECT CV FROM users WHERE u_id = '".$resultat['u_id']."'";
    $rep = mysqli_query($db,$req);
    if($rep){
        while ($resultat=mysqli_fetch_assoc($rep)) {
            if (!$resultat['CV']) {?>
                <center>
                <h1 style="margin-top: 250px; font-size: 1.5em; font-weight: 700;">Vous n'avez pas de CV sur cette plateforme,  pour en creer, cliquez sur <a href="includes/creerCv/index.html" style=" font-style: italic; text-decoration: underline;"> creer un CV... </a></h1>
                </center>
           <?php }
           else header("location: includes/Cv");
        }
    }
    
    ?>
