<?php
$host = "localhost"; // у большинства хостеров этот параметр именно такой
$user = "root"; //ваше имя для подключения к MySQL
$pass = ""; // Ваш пароль для подключения к MySQL
$bd_name = "Blog"; // Имя создаваемой базы данных
$table_name = "blog"; // Имя создаваемой таблицы

$link = mysql_connect($host, $user, $pass) // Соединение с MySQL
or die ("Невозможно подключиться к MySQL");

/*
 * $db="CREATE DATABASE `".$bd_name." ` ;"; // Формирование запроса на создание базы данных
mysql_query ($db) // Выполнение запроса 
  or die ("Невозможно создать БД");  

mysql_select_db ($bd_name) // Выбор базы данных 
   or die ("Невозможно выбрать БД "); 

$table ="CREATE TABLE `".$table_name."` ( `test_1` INT(15) NOT NULL default '0',  `test_2` VARCHAR(64) NOT NULL ) ";

mysql_query ($table) // Отсылаем запрос на создание таблицы 
  or die ("Невозможно создать таблицу");
 */


mysql_select_db($bd_name) // Выбор Базы данных
or die ("Невозможно выбрать БД ");

$result = mysql_query("SELECT * FROM `" . $table_name . "`", $link); // теперь в $result содержится указатель на ответ MySQL
//var_dump($result);
$num_rows = mysql_num_rows($result); // получаем число строк в таблице
//echo "$num_rows \n";


/*$sql = "INSERT INTO `blog` (` title`, `content`, `created`) VALUES ($num_rows, $num_rows+1, $num_rows+2);";
mysql_query ($sql,$link) or die (mysql_error()&& mysql_errno() );


/* ЭТО РАБОТАЕ



$sql = "DELETE FROM  blog.blog ORDER BY
'title'   LIMIT 1";
mysql_query ($sql,$link) or die (mysql_error());*/

$start = 1;
$stop = $start + 1;

$sql = "SELECT  `title`
FROM  `blog`
LIMIT $start , $stop";

//echo mysql_query($sql, $link) or die (mysql_error());
$title = (string)mysql_query($sql, $link) or die (mysql_error());

//echo " ->>>  $title \n";


//$_POST[title]="rty";

if (isset($_POST['title'])) {
    echo  $_POST['title'];
} else {

}
//$title = htmlspecialchars($_POST["title"]);
//$content = htmlspecialchars($_POST["content"]);
//$created = htmlspecialchars($_POST["created"]);


// echo $_POST[' ']= "2";


?>

<html>
<head>
    <title>Обработка HTML формы с помощью PHP</title>
</head>
<body>
<form action="serg1.php" method="POST">

    <p>title:<br/><input type="text" name="title" id="neme1"  /></p>

    <p><input type="submit" name="go" value="insert"></p>

    <p>content:<br/><input type="text" name="content"/></p>

    <p><input type="submit" value="Отправить"></p>

    <p>created:<br/><input type="text" name="created"/></p>

    <p><input type="submit" value="Отправить"></p>

  <?php

    echo "<table border='1'>";
    echo "<TR>";
    echo "<TH>title</TH><TH> content </TH><TH> created </TH>";
    echo '</TR>';
    echo "--->>",$result,"<<---";
    while($rows = mysql_fetch_array($result))
    {
    echo"<tr>";
    echo"<td>", $rows [0],"</td><td>", $rows[1] ,"</td><td>", $rows[2],  "</td><td> <p><input type='radio' name='a'> </p>";
    echo "</tr>";
    }
    echo "</table>";
    ?>

</form>
</body>
</html>

<?php
// echo $_POST["title"];
//$t=$_POST["title"];
 /*$sql = "UPDATE `blog`.`blog` SET `content` = $t WHERE
 `blog`.`title` = 'Title1'
 AND  `blog`.`content` = 'content1'
 AND `blog`.`created` = 'created1' LIMIT 1;";*/
//mysql_query($sql, $link) or die (mysql_error());
// echo $_POST['value'];

/* Осуществляем проверку вводимых данных и их защиту от враждебных
скриптов */
//$title = htmlspecialchars($_POST["title"]);
//$content = htmlspecialchars($_POST["content"]);
//$created = htmlspecialchars($_POST["created"]);


/* Проверяем заполнены ли обязательные поля ввода, используя check_input

*/

mysql_close($link); // Разрываем соединение с MySQL
?>