<?php


class sergBD
{
    var $host,
    $user,
    $pass,
    $bd_name,
    $table_name,
    $link,
    $result,
    $num_rows;

    function sergBD()
    {
        $host = "localhost"; // у большинства хостеров этот параметр именно такой
        $user = "root"; //ваше имя для подключения к MySQL
        $pass = ""; // Ваш пароль для подключения к MySQL
        $bd_name = "Blog"; // Имя создаваемой базы данных
        $table_name = "blog"; // Имя создаваемой таблицы
        $link = mysql_connect($host, $user, $pass) // Соединение с MySQL
        or die ("Невозможно подключиться к MySQL");
        // echo "------------> $link";
        mysql_select_db($bd_name) // Выбор Базы данных
        or die ("Невозможно выбрать БД ");

        $result = mysql_query("SELECT * FROM `" . $table_name . "`", $link); // теперь в $result содержится указатель на ответ MySQL

        $num_rows = mysql_num_rows($result); // получаем число строк в таблице
        //echo "$num_rows \n" ;
    }

    function   select($name_column, $name_table, $start, $stop)
    {
        $name_table = "blog";
        $sql = "SELECT   $name_column FROM  $name_table LIMIT $start , $stop";


        echo "----------ddd--> $link";
        echo mysql_query($sql, $link) or die (mysql_error());

        return;
    }


}

?>
