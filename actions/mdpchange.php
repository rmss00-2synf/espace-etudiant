<?php
    if (isset($_POST['newPassword'])) {
        require "database.php";
        $Oldmdp = $_POST['oldPassword'];
        $Newmdp = $_POST['newPassword'];
        $req = "SELECT MDP FROM users WHERE u_id = '2'";
        if ($rep = mysqli_query($db,$req)) {
         
        $chaned = false;
        while ($resultat = mysqli_fetch_assoc($rep)) {
            if ($Oldmdp == $resultat['MDP']) {
                $chaned = true;
            }
        }

        if ($chaned) {
            $req2 = "UPDATE users SET MDP = '".mysqli_real_escape_string($db,$Newmdp)."' WHERE u_id = '".$_SESSION['u_id']."'";
            if (mysqli_query($db,$req2)) {
                header("location: ../index2.php?err=0");
            }
        }
        else header("location: ../index2.php?err=1");
           # code...
        }
        else echo '2';
    }
    else echo '1';
?>