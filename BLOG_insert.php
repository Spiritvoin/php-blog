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
    <title>insert</title>
</head>
<body>
<form action="BLOG_insert.php" method="POST">

    <p>title:<br/><input type="text" name="title" id="neme1"/></p>

    <p>content:<br/><input type="text" name="content"/></p>

    <p>created:<br/><input type="text" name="created"/></p>

    <p><input type="submit" value="go"></p>


</form>
<a href="BLOG.php">BLOG</a>
</body>
</html>
<?php
if ((isset($_POST["title"])) && (isset($_POST["content"])) && (isset($_POST["created"]))) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $created = $_POST["created"];
    include "BDblog.php";
    $BD = new BDblog();
    $BD->insert($title, $content, $created);
    /*echo "успешно сохранино";*/
}else
{/*echo "заполнены не все поля ";*/}
?>