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
$numb;

?>

<html>
<head>
    <title> Blog </title>
</head>
<body>
<form action="BLOG.php" method="POST">
    <?php
    echo "<table border='1'>";
    echo "<TR>";
    echo "<TH>title</TH><TH> content </TH><TH> created </TH>";
    echo '</TR>';
    $result = $BD->result();
    while($rows = mysql_fetch_array($result))
    {
    echo"<tr>";
    echo"<td>", $rows [0],"</td><td>", $rows[1] ,"</td><td>", $rows[2],  "</td><td> <p><input type='radio' name='radio'
     value=",array(0=>$rows[0],1=>$rows[1],2=>$rows[2]),"> </p>";
    echo "</tr>";
    }
    echo "</table>";
    ?>
    <p><input type="submit" name="go" value="UPDATE"></p>
    <p><input type="submit" name="go" value="Delete"></p>


</form>
<a href="BLOG_insert.php">insert</a>




</body>
</html>


<?php

if (isset($_POST{'radio'})) {


 
echo var_dump($_POST['radio']);
    echo "1)", $_POST{'radio'};
} else {
}



/*printf($_POST['title']);
printf($_POST['content']);
printf($_POST['created']);
$BD->insert($_POST['title'],$_POST['content'],$_POST['created']);*/

?>
