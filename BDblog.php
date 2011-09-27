<?php
class BDblog
{
    var $bd_name;
    var $table_name;
    var $link;
    var $result;
    var $num_rows;

    function BDblog()
    {
        $config = include ('config_connect.php');
        $this->bd_name = 'Blog'; // Имя создаваемой базы данных
        $this->table_name = 'blog'; // Имя создаваемой таблицы
        $this->link = mysql_connect($config['host'], $config['user'], $config['pass']) // Соединение с MySQL
        or die ("Невозможно подключиться к MySQL");
        mysql_select_db($this->bd_name) // Выбор Базы данных
        or die ("Невозможно выбрать БД ");

    }

    function   select_mysql_fetch_row($name_column, $name_table)
    {
        $sql = "SELECT  `${name_column}` FROM  `${name_table}` ";
        $result = mysql_query($sql, $this->link) or die (mysql_error());
        $rows = mysql_fetch_row($result);
        return $rows[0];

    }

    function   result()
    {
        $sql = "SELECT * FROM `" . $this->table_name . "`";
        return $result = mysql_query($sql, $this->link);
    }

    function   result1($id)
    {
        $sql = "SELECT * FROM `" . $this->table_name . "`where `id`=".$id."";
        return $result = mysql_query($sql, $this->link);
    }

    function   select_mysql_fetch_array($result)
    {

        return $rows = mysql_fetch_array($result);
    }

    function insert($title, $content, $created)
    {
        $sql = "INSERT INTO  `blog`.`blog` (`title` ,`content` ,`created`) VALUES ('$title',  '$content',  '$created');";
        mysql_query($sql, $this->link) or die (mysql_error() && mysql_errno());
    }

    function delete($id)
    {
        $sql = "DELETE FROM `blog` WHERE `id`=$id";
        mysql_query($sql, $this->link) or die (mysql_error());
    }
    function update($id,$title,$content,$created)
    {
//              UPDATE `blog`.`blog` SET `title` = 'ttt', `content` = 'ttttt', `created` = 'ttttt' WHERE `blog`.`id` = '12'
        $sql = "UPDATE `blog`.`blog` SET `title` = '".$title."', `content` = '".$content."', `created` = '".$created."' WHERE `blog`.`id` = '".$id."'";
         mysql_query($sql, $this->link) or die (mysql_error());
        echo "save";
    }

}

?>
