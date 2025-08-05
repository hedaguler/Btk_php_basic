<?php

 setcookie("auth[username]","", time() + (60*60*24));
 setcookie("auth[username]","",true,time() - (60*60*24)); // - diyince cookie yi silmiş oluruz
         header("Location: login.php");    

?>