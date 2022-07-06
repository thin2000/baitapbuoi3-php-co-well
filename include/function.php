<?php
session_start();
function redirect($url){
    header("location: $url");
         exit();
}
?>