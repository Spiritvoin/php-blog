<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Spiritvoin
 * Date: 07.09.11
 * Time: 17:30
 * To change this template use File | Settings | File Templates.
 *
 */
include "BDblog.php";
$BD = new BDblog();


$numb=0;

?>




<html>
<head>
    <title> <?php echo $BD->select("title", "blog",$numb);?> </title>
</head>
<body>

<form action="BLOG.php" method="POST">
    <input type="submit" name="previous" onclick="<?php  $numb--;?>" value="previous">
    <input type="submit" name="next" onclick="<?php $numb++; ?>" value="next">
    <p>title: <?php echo $BD->select("title", "blog",$numb); ?> </p>
    <p>content: <?php echo $BD->select("content", "blog",$numb); ?> </p>
    <p>created: <?php echo $BD->select("created", "blog",$numb); ?> </p>
</form>
<?php $numb;?>

<form action="BLOG_insert.php" method="POST">
     <p><input type="submit" name="go" value="insert"></p>
</form>
<form action="BLOG_UPDATE.php" method="POST">
     <p><input type="submit" name="go" value="UPDATE"></p>
</form>

<form action="BLOG_Delete.php" method="POST">
     <p><input type="submit" name="go" value="Delete"></p>
</form>

</body>
</html>
<?php


/*printf($_POST['title']);
printf($_POST['content']);
printf($_POST['created']);
$BD->insert($_POST['title'],$_POST['content'],$_POST['created']);*/

?>
