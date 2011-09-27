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

    $matrix;
    echo "<table border='1'>";
    echo "<TR>";
    echo "<TH>title</TH><TH> content </TH><TH> created </TH>";
    echo '</TR>';
    $result = $BD->result();
    $i = 0;
    while ($rows = $BD->select_mysql_fetch_array($result))
    {
        echo"<tr>";
        echo"<td>", $rows [1], "</td><td>", $rows[2], "</td><td>", $rows[3], "</td><td> <p><input type='radio' name='radio'
    value=" . $rows[0] . "> </p>";
        echo "</tr> ";
    }
    echo "</table> </p>";
    ?>
    <p><input type="submit" name="go" value="UPDATE"></p>

    <p><input type="submit" name="go" value="Delete"></p>

</form>
<?php

if (isset($_POST['go']) && isset($_POST['radio'])) {
    switch ($_POST{'go'}) // переключающее выражение
    {
        case 'Delete': // константное выражение 1
            //  echo 'delete';
            $BD->delete($_POST{'radio'});
            break;
        case 'UPDATE': // константное выражение 2
            //echo 'UPDATE';
            $result = $BD->result1($_POST{'radio'});
            $rows = $BD->select_mysql_fetch_array($result);
            ?>

            title: <input type='text' name='title' value='<?php echo  $rows [1]; ?>'> </p>
            content: <input type='text' name='content' value='<?php echo $rows [2]; ?> '> </p>
            created: <input type='text' name='created' value='<?php echo  $rows [3]; ?> '> </p>
            <form action="BLOG.php" method="POST">
                <p><input type="submit" name="go" value="save"></p>
            </form>

                <?php
                                echo"1";
            if (isset($_POST['go'])&&($_POST['go']=='save')) {
                echo "true";
                $BD->update($rows[0], $rows[1], $rows[2], $rows[3]);
            } else {
                echo "null";
            }

            break;

        default:

    }
}


?>
<a href="BLOG_insert.php">insert</a>
</body>
</html>


<?php






?>
