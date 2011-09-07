<html>
<HEAD>
    <META http-equiv=content-type content="text/html; charset=windows-1251">
    <style>
        .t2 {
            FONT-SIZE: 14px;
            color: black;
            FONT-FAMILY: Verdana, Helvetica, Arial;
            display: block;
            text-align: right;
        }

        .t {
            FONT-SIZE: 14px;
            color: red;
            FONT-FAMILY: Verdana, Helvetica, Arial;
        }
    </style>
</HEAD>
<body>
<br><br><br><br><br>

<form action="sergtest.php" method="post" name="frt">
    <table align="center">
        <tr>
            <td class="t2">введите имя</td>
            <td><input type="text" size="15" maxlength="15" name="name1" id="name1" value="<?php
if (isset($_POST["name1"])) {
                echo $_POST["name1"];
            }
            else {
                echo "jbhb";
            }
            ; ?>"></td>
        </tr>
        <tr>
            <td class="t2">введите фамилию</td>
            <td><input type="text" size="15" maxlength="15" name="name2" id="name2"
                       value="<?php echo $_POST["name2"]?>"></td>
        </tr>
        <tr>
            <td class="t2">введите ваш вопрос президенту</td>
            <td><textarea name="text1" rows=7 cols=40 wrap="hard"><?php echo $_POST["text1"] ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="confirm" id="confirm" value="12345"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit"; name="vvod"; value="ввести"; ></td>
        </tr>
    </table>
</body>
</html>