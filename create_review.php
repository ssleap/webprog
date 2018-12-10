<?php

file_put_contents('./data/'.$_POST['name'].".html",$_POST['name']."<br>".$_POST['review']);
#header('location : localhost/gogi.php');


?>