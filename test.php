<?php
mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());
mysql_select_db("Blog")or die  (mysql_error());

$result = mysql_query("SELECT  * FROM  `blog` ") or die (mysql_error());

/*while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("title: %s ", $row[0]," \n");
}*/

$row = mysql_fetch_array($result, MYSQL_NUM);
$row = mysql_fetch_array($result, MYSQL_NUM);
$row = mysql_fetch_array($result, MYSQL_NUM);
 printf("title: %s content: %s created: %s",$row[0] ,$row[1],$row[2]," \n");
/*$row = mysql_fetch_array($result, MYSQL_NUM);
 printf("title: %s ",$row[0] ," \n");
$row = mysql_fetch_array($result, MYSQL_NUM);
 printf("title: %s ",$row[0] ," \n");
$row = mysql_fetch_array($result, MYSQL_NUM);
 printf("title: %s ",$row[0] ," \n");*/

/*$row = mysql_fetch_row($result);
echo $row[0]; // 42
$row = mysql_fetch_row($result);
echo $row[0]; // 42
$row = mysql_fetch_row($result);
echo $row[0]; // 42
//echo $row[1]; // the email value*/






mysql_free_result($result);
?>