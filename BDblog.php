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

    function   select($name_column, $name_table, $numb)
    {
        $sql = "SELECT  `${name_column}` FROM  `${name_table}` ";
        $result = mysql_query($sql, $this->link) or die (mysql_error());
        for ($i = 0; ($i <= $numb); $i++) {
            $rows = mysql_fetch_row($result);
        }
        return $rows[0];

    }

    function insert($title, $content, $created)
    {
        $sql = "INSERT INTO  `blog`.`blog` (`title` ,`content` ,`created`) VALUES ('$title',  '$content',  '$created');";
        mysql_query($sql, $this->link) or die (mysql_error() && mysql_errno());
    }

    function delete($title, $content, $created)
    {

        $sql = "DELETE FROM `blog` WHERE `title`=$title";
        mysql_query($sql, $this->link) or die (mysql_error() && mysql_errno());
    }


}

?>
