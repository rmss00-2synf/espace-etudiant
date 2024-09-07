<?php
    $T = $_POST;
    $resgistred = true;
    if(!isset($_FILES['photo']))
    $resgistred = false;
    else
    foreach ($T as $key => $value) {
            if(!isset($value) && empty($value))
                $resgistred = false;
        }
if ($resgistred) {
    $nom = htmlspecialchars($_POST['nom']); 
    $prenom = htmlspecialchars($_POST['prenom']); 
    $mdp = htmlspecialchars($_POST['mdp']);
    // $mdp = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
    $cne = htmlspecialchars($_POST['cne']);
    $adrss = htmlspecialchars($_POST['adrss']);
    $city = htmlspecialchars($_POST['ville']);
    $mail = htmlspecialchars($_POST['mail']);
    $photo = $_FILES['photo'];
    $new_file_name = $cne.".".strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
    $drt = __DIR__."/../uploads/".$new_file_name;
    $db = mysqli_connect('localhost','root','','ensat');
    if (move_uploaded_file($_FILES['photo']['tmp_name'],$drt)){
        if($db){
            $req = "INSERT INTO users(CNE,Nom,Prenom,Adresse,Ville,MDP,Email,Photo) VALUES (\"$cne\",\"$nom\",\"$prenom\",'$adrss','$city','$mdp','$mail','$new_file_name')";
            if(mysqli_query($db,$req)){
                mysqli_close($db);
                header('Location: ../index.php?error=0');
            }   
            else{
                header('Location: ../index.php?error=4');
            } 
        }
        else{
            header('Location: ../index.php?error=3');
        }
    }
    else{
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
        header('Location: ../index.php?error=2');
    }
    
}
 else {
    header('Location: ../index.php?error=1');
 }