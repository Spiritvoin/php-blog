<?php


class BDblog
{
    var $bd_name;
    var $table_name;
    var $link;
    var $result;
    var $num_rows;

    function sergBD()
    {
        $config = include ('config.php');
        $this->bd_name = "Blog"; // Имя создаваемой базы данных
        $this->table_name = "blog"; // Имя создаваемой таблицы
        $this->link = mysql_connect($config[$host], $config[$user], $config[$pass]) // Соединение с MySQL
        or die ("Невозможно подключиться к MySQL");

        mysql_select_db($thsi->bd_name) // Выбор Базы данных
        or die ("Невозможно выбрать БД ");

        $this->result = mysql_query("SELECT * FROM `" . $this->table_name . "`", $this->link); // теперь в $result содержится указатель на ответ MySQL

        $this->num_rows = mysql_num_rows($this->result); // получаем число строк в таблице
        //echo "$num_rows \n" ;
    }

    function   select($name_column, $name_table, $start, $stop)
    {
        $name_table = "blog";
        $sql = "SELECT   $name_column FROM  $name_table LIMIT $start , $stop";


         echo "------------> $this->link <---------";
        /* if (!isset($this->link)) {
             echo mysql_query($sql);
         } else {
             echo "error";
             mysql_error();
         }*/
       mysql_query($sql) or die (mysql_error());

        return;
    }


}

?>
