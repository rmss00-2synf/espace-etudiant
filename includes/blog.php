
<?php
function indb($Mess){
    $db = $GLOBALS['db'];
    $req = "SELECT Nom From users";
    $rep = mysqli_query($db,$req);
    while ($res = mysqli_fetch_assoc($rep)) {
        if (trim($res['Nom'])==trim($Mess)) return true;
    }
    return false;
}

function replaceMes($message) {

    if($message[0] == '@'){
        $value = explode(" ",explode("@","$message")[1])[0];
        if(indb($value))
        $message = str_replace('@' .$value, "<span class=\"blue-label\">".$value."</span>", $message);
    }
    $arrtxt = explode(" @", $message);
    if (count($arrtxt)<2) {
        return $message;
    }
    $Tn = [];
    foreach ($arrtxt as $k => $val) {
        if ($k == 0 && $message[0] == '@') {
            $Tn[] = explode(" ", $val)[0];
        } elseif ($k > 0) {
            $Tn[] = explode(" ", $val)[0];
        }
    }
    foreach ($Tn as $key => $value) {
        if(indb($value))
        $message = str_replace('@' .$value, "<span class=\"blue-label\">".$value."</span>", $message);
    }

    return $message;
}

#========================================================================

    $req = "SELECT C.Jour, C.Message, C.cu_id, U.Nom FROM conversations as C, users as U WHERE C.cu_id = U.u_id";
    $rep = mysqli_query($db,$req);
    $id = $_SESSION['u_id'];
    ?>
    <div class="window-wrapper">
                    <div class="window-title">
                        <div class="title">
                            <span>Hip Chat</span>
                        </div>
                    </div>
                        <div class="chat-area">
                            <div class="title"><b>Conversation title</b><i class="fa fa-search"></i></div>
                            <div class="chat-list">
                                <ul>

    <?php
    while ($resultats = mysqli_fetch_assoc($rep)) {
        
    if ($resultats['cu_id']==$id){  ?>
    <li class="me">
                 <div class="name">
                     <span class="">You</span>
                 </div>
                 <div class="message">
                     <p><?php echo replaceMes($resultats['Message'])?></p>
                     <span class="msg-time"><?php echo $resultats['Jour']?></span>
                 </div>
             </li>        
    <?php }else{  ?>
    <li class="">
                 <div class="name">
                     <span class=""><?php echo $resultats['Nom']?></span>
                 </div>
                 <div class="message">
                     <p><?php echo replaceMes($resultats['Message'])?></p>
                     <span class="msg-time"><?php echo $resultats['Jour']?></span>
                 </div>
             </li>
        <?php }
    }
?>

            </ul>
            <div id="bottom"></div>
        </div>
        <form action="actions/sendmessages.php" method="post">
        <div class="input-area">
            <div class="input-wrapper">
                <input type="text" name="Message"  value="">
                <i class="fa fa-smile-o"></i>
                <i class="fa fa-paperclip"></i>
            </div>
            <!-- <div class="envoye">
            <button >envoyer</button>
            </div> -->
            <input type="submit" value="Envoyer" style="width: 15%; margin-right: 80px;">
            
        </div>
        </form>
    </div>
</div>
