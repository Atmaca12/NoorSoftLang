<?php 
session_start();

$lang=strip_tags($_GET['lang']);
if($lang=='ru'||$lang=='en'){
    $_SESSION['lang']=$lang;
    header("Location:index.php?lang=$lang");
}else{
    header("Location:index.php?lang=no");
}


?>