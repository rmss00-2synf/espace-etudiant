<?php

$facebook = $twitter = $youtube = $linkedin = $read = $game = $musique = $nature = 0;
$educations = array();
$experiences = array();

foreach ($_POST as $key => $value) {
    // Vérifie et traite les données POST selon les clés correspondantes
    echo "cle : $key, valeur : $value </br> ";
    if (strpos($key, "phone") !== false) {
        $phne = htmlspecialchars($value);
    } elseif (strpos($key, "website") !== false) {
        $web = htmlspecialchars($value);
    } elseif (strpos($key, "profile") !== false) {
        $profile = htmlspecialchars($value);
    } elseif (strpos($key, "facebook") !== false) {
        $facebook = 1;
    } elseif (strpos($key, "twitter") !== false) {
        $twitter = 1;
    } elseif (strpos($key, "youtube") !== false) {
        $youtube = 1;
    } elseif (strpos($key, "linkedin") !== false) {
        $linkedin = 1;
    } elseif (strpos($key, "read") !== false) {
        $read = 1;
    } elseif (strpos($key, "game") !== false) {
        $game = 1;
    } elseif (strpos($key, "musique") !== false) {
        $musique = 1;
    } elseif (strpos($key, "nature") !== false) {
        $nature = 1;
    }
    elseif (strpos($key,"competence")!== false) {
        $com = true;
        $temp = $value;
    }
    elseif ($com) {
        $compentances[$temp] = $value;
        $com = false;
    }
    elseif (strpos($key, "edu-start") !== false) {
        // Traite les informations liées à l'éducation
        $educationIndex = substr($key, strpos($key, "-") + 1);
        $educations[$educationIndex] = array();
        $educations[$educationIndex]['start'] = $value;
    } elseif (strpos($key, "edu-end") !== false && isset($educationIndex)) {
        $educations[$educationIndex]['end'] = $value;
    } elseif (strpos($key, "edu-title") !== false && isset($educationIndex)) {
        $educations[$educationIndex]['title'] = htmlspecialchars($value);
    } elseif (strpos($key, "edu-content") !== false && isset($educationIndex)) {
        $educations[$educationIndex]['content'] = htmlspecialchars($value);
        unset($educationIndex);
    } elseif (strpos($key, "work-start") !== false) {
        // Traite les informations liées à l'expérience professionnelle
        $experienceIndex = substr($key, strpos($key, "-") + 1);
        $experiences[$experienceIndex] = array();
        $experiences[$experienceIndex]['start'] = $value;
    } elseif (strpos($key, "work-end") !== false && isset($experienceIndex)) {
        $experiences[$experienceIndex]['end'] = $value;
    } elseif (strpos($key, "work-title") !== false && isset($experienceIndex)) {
        $experiences[$experienceIndex]['title'] = htmlspecialchars($value);
    } elseif (strpos($key, "work-content") !== false && isset($experienceIndex)) {
        $experiences[$experienceIndex]['content'] = htmlspecialchars($value);
        unset($experienceIndex);
    } else {
        echo "Il y a un problème avec les données POST.</br>";
    }
}

require"database.php";
$id = $_SESSION['u_id'];
$req="UPDATE users SET Profil = '".mysqli_real_escape_string($db,$profile)."', FB = '$facebook', TW = '$twitter', YT = '$youtube', LD = '$linkedin', Lecture = '$read', Jeux = '$game', Musique = '$musique', Environnement = '$nature', CV = '1', Tel = '$phne', Site_web = '".mysqli_real_escape_string($db,$web)."'  WHERE u_id ='$id'";
echo $req;
if (mysqli_query($db,$req)) {
    echo"c'est bon 1 </br>";
    foreach ($compentances as $key => $value) {
        $req = "INSERT INTO competances VALUES ('','".mysqli_real_escape_string($db,$key)."','$value','$id')";
        if (mysqli_query($db,$req)) {
            echo"c'est bon $key </br>";
        }
        else die("Une erreur 2");
    }
}
else die("Une erreur 1");

foreach ($educations as $key => $value) {
    $req = "INSERT INTO educations VALUES ('','".$value['start']."','".$value['end']."','".mysqli_real_escape_string($db,$value['title'])."','".mysqli_real_escape_string($db,$value['content'])."','$id');";
    if (mysqli_query($db,$req)) {
        echo"c'est bon $key </br>";
    }
}

foreach ($experiences as $key => $value) {
    $req = "INSERT INTO educations VALUES ('','".$value['start']."','".$value['end']."','".mysqli_real_escape_string($db,$value['title'])."','".mysqli_real_escape_string($db,$value['content'])."','$id');";
    if (mysqli_query($db,$req)) {
        echo"c'est bon $key </br>";
    }
}

header("location: ../includes/Cv");

?>
