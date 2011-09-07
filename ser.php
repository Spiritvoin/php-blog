<?php
$large_number = 2147483647;
var_dump($large_number);
// на выходе: int(2147483647)

$large_number = 2147483648;
var_dump($large_number);
// на выходе: float(2147483648)

// это подходит также для специфицированных 16-ричных чисел:
var_dump(0x80000000);
// на выходе: float(2147483648)

$million = 1000000;
$large_number = 50000 * $million;
var_dump($large_number);
// на выходе: float(50000000000)

$large_number = (int)2147483648;
var_dump($large_number);

var_dump(2 / 4);
// на выходе: float(3.5714285714286)

echo (int)((0.1 + 0.7) * 10); // выведет 7!
echo  (bcadd(0.1, 0.7, 4)); //0.8000
echo  (bcadd(0.1, 0.7, 4) * 10); //8

var_dump(25 / 7);

echo 'Это простая строка.';
echo 'Вы можете также внедрять в строки символы newline,
как здесь.
';
echo 'Arnold once said: "I\'ll be back"';
// на выходе: ... "I'll be back"
echo 'Are you sure you want to delete C:\\*.*?';
// на выходе: ... delete C:\*.*?
echo 'Are you sure you want to delete C:\*.*?';
// на выходе: ... delete C:\*.*?
echo 'I am trying to include at this point: \n a newline';
// на выходе: ... this point: \n a newline
?>

<?php
echo $str = <<<EOD
Пример строки,
захватывающей несколько строчек,
с использованием синтаксиса heredoc.

EOD;

/* Более сложный пример, с переменными. */
class foo
{
    var $foo;
    var $bar;


    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';
var_dump($foo);
echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41

EOT;
?>
<?php
$beer = 'Heineken';
echo "$beer's taste is great"; // не будет работать, "'" это неправильный
// символ для имён переменных (у меня работает - прим. пер.)
//echo "He drunk some $beers"; // работает, 's' это правильный символ
// для имён переменных
echo "He drunk some ${beer}s"; // работает
echo "He drunk some ${beer}s"; // работает
?>
