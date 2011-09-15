<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Spiritvoin
 * Date: 13.09.11
 * Time: 15:48
 * To change this template use File | Settings | File Templates.
 */

include "BDblog.php";
$BD = new BDblog();
 ?>
<html>
<head>
    <title> <?php //echo $BD->select("title", "blog");?> </title>
</head>
<body>
<form action="Blog.php" method="POST">

    <p>title: <br/><input type="button" name="content" id="name1" onclick="" value=<?php  echo $BD->select('title', "blog",0); ?>  </p>

    <p>content:<br/><input type="text" name="content" id="name2" value=<?php  echo $BD->select('content', "blog",0); ?> /></p>

    <p>created:<br/><input type="text" name="created" value=<?php echo $BD->select("created", "blog",0); ?> /></p>
     <p><input type="submit" name="go" value="insert"></p>

    </form>

    </body>
</html>

<?php




    echo "$A";


?>