
<?php
    if (isset($_POST['Message'])) {
        include "database.php";
        $Mess = htmlspecialchars($_POST['Message']);
        $id = $_SESSION['u_id'];
        $dateActuelle = date("Y-m-d H:i:s");
        $req = "INSERT INTO conversations (m_id, Jour, Message, cu_id) VALUES ('', '$dateActuelle', '".mysqli_real_escape_string($db,$Mess)."', '$id')";
        if (mysqli_query($db, $req)) {
            header("location: ../index2.php?val=3");
        } else {
            echo "C'est pas bon";
        }
    } else {
        echo "C'est pas bon";
    }
?>
