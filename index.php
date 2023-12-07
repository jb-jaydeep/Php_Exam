<?php

include("Config/config.php");

$config = new Config();

$res = $config->connect();

if($res){
    echo"success";
}else{
    echo"failed";
}

?>