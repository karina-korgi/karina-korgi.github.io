<?php

$db = mysql_connect("localhost","root","");
if(!$db) {echo "База не подключена";}
mysql_select_db("ra1le");
 

$nameorg = $_POST['nameorg'];
$site = $_POST['site'];
$result = mysql_query("INSERT INTO `ra11e`.`user` (nameorg) VALUES('nameorg')"
					 ("INSERT INTO `ra11e`.`item` (site) VALUES('site')");
 
 
 
if ($result== 'true') 
{echo "Ваши данные успешно добавлены";}
else{echo "Ваши данные не добавлены";}
 
?>

