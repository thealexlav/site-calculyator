<?php
$url = explode("/", $_SERVER['REQUEST_URI']);
if($url[1] == calc){
    $content = file_get_contents("pages/calc.php");
}else{
    $content = file_get_contents("pages/index.php");
}
if (!empty($content)) require_once("template.php");
?>