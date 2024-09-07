<center>
<table style="font-size:20px">
    <?php
        echo "<thead><th style=\"padding:15px\">Trie par :</th>";
        $Trie = array("cne"=>"CNE","nm"=>"Nom","prnm"=>"Prenom");
        foreach ($Trie as $key => $value) {
            echo"<th style=\"padding:15px\"><a href=\"?trie=$value\"> $value </a></th>";
        }
    ?>
    </thead>
    </table>
    </center>

<?php

if(isset($_GET['trie'])){
    $Tr = $_GET['trie'];
    if (in_array($Tr,$Trie))
    $req = "SELECT Nom, Prenom, CNE, Adresse, Ville, Email, Photo FROM users ORDER BY $Tr ASC";
    else $req = "SELECT Nom, Prenom, CNE, Adresse, Ville, Email, Photo FROM users";
}
else
    $req = "SELECT Nom, Prenom, CNE, Adresse, Ville, Email, Photo FROM users";
$rep = mysqli_query($db,$req);
if($rep){
    echo"<h2>Responsive Table</h2>
    <div class=\"table-wrapper\">
        <table class=\"fl-table\">
            <thead>
            <tr>
                <th>CNE</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>
            </thead>
            <tbody>";
    while($resultat = mysqli_fetch_assoc($rep)){
        echo"<tr>
        <td>".$resultat['CNE']."</td>
        <td>".$resultat['Nom']."</td>
        <td>".$resultat['Prenom']."</td>
        <td>".$resultat['Adresse']."</td>
        <td>".$resultat['Ville']."</td>
        <td>".$resultat['Email']."</td>
        <td><img src=\"uploads/".$resultat['Photo']."\"  style=\"width:50px; border-radius:5% ; height:50px;\" ></td>
    </tr>";
    }
    echo"<tbody>
    </table>
</div>";
}


?>

