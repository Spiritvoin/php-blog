<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Spiritvoin
 * Date: 13.09.11
 * Time: 15:48
 * To change this template use File | Settings | File Templates.
 */
?>
<html>
<head>
    <title>Обработка HTML формы с помощью PHP</title>
</head>
<body>
<form action="BLOG_insert.php" method="POST">

    <p>title:<br/><input type="text" name="title" id="neme1"/></p>

    <p>content:<br/><input type="text" name="content"/></p>

    <p>created:<br/><input type="text" name="created"/></p>

    <p><input type="submit" value="go"></p>


</form>
</body>
</html>
<?php
$title = $_POST["title"];
$content = $_POST["content"];
$created = $_POST["created"];
include "BDblog.php";
$BD = new BDblog();
$BD->insert($title, $content, $created);
?>