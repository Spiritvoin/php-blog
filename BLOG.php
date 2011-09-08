<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Spiritvoin
 * Date: 07.09.11
 * Time: 17:30
 * To change this template use File | Settings | File Templates.
 *
 */
require_once "BDblog.php";
$BD = new BDblog();

?>
<html>
<head>
    <title>Обработка HTML формы с помощью PHP</title>
</head>
<body>
<form action="BLOG.php" method="POST">

    <p>title:<br/><input type="text" name="title" id="neme1" value=
<?php
if (isset($_POST["name1"])) {
        echo $_POST["name1"];
    }
    else {
        echo $BD->link;
        $BD->select("title", "", 0, 1);
    }
    ?>
            /></p>

    <p><input type="submit" name="go" value="insert"></p>

    <p>content:<br/><input type="text" name="content"/></p>

    <p><input type="submit" value="Отправить"></p>

    <p>created:<br/><input type="text" name="created"/></p>

    <p><input type="submit" value="Отправить"></p>


</form>
</body>
</html>
<?php


?>
