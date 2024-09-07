<?php
    $T = $_POST;
    $resgistred = true;
    foreach ($T as $key => $value) {
            if(!isset($value) || empty($value))
                $resgistred = false;
        }
if ($resgistred) {
    $name = $_POST['nom'];
    $mdp = $_POST['mdp'];
    if ($db = mysqli_connect("localhost","root","","ensat")) {
        $req = "SELECT u_id, Nom, MDP FROM users";
        if ($res = mysqli_query($db,$req)) {
            $very = false;
            while (($T = mysqli_fetch_assoc($res)) && !$very) {
                if(trim($mdp)===trim($T['MDP']) && trim($name)===trim($T['Nom'])){
                    $very = true;
                    $u_id = $T['u_id'];
                }
            }
            // trim($mdp)===trim($T['mdp'])
            // password_verify($mdp,$T['mdp'])
            if ($very) {
                require "database.php";
                $_SESSION['u_id'] = $u_id;
                header('Location: ../index2.php');
            }
            else {
                header('Location: ../index.php?error=3');
            }
            
        }
        else {
            header('Location: ../index.php?error=2');
         }
        
    }
    else {
        header('Location: ../index.php?error=2');
     }
    
}
 else {
    header('Location: ../index.php?error=1');
 }