<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // задание1
        function isNumberrInRange ($number){
            if($number > 0 && $number < 10) print ("true, ").'<br>';
            else print ("false, ").'<br>';
        }
        echo isNumberrInRange(-5);

        // задание2
        function isEven ($even) {
            return ($even % 2 == 0);
            // if($even % 2 == 0) print "true, ";
            // else print "false, ";
        }
        echo isEven(8);

        // задание3
        $array = [1,2,3,4,5];
        $newArray = [];
        foreach ($array as $item) {
            if(isEven($item)){
                print ($newArray[] = $item);
            } 
        }

        // задание4
        function cut($str, $num = 5){
            print substr($str, 0, $num);
        }

        // задание5
        $arr = array('1' => 1,'2' => 2);
        function arrayNum($arr){
            echo array_shift($arr);
            if(!empty($arr)) arrayNum($arr);
            else return;
        }
        arrayNum($arr)."<br>";

        // задание6
        //1 вариант
        print '<br>';
        echo 'Чтение всего файла:<br>';
        print file_get_contents('./test.txt');
        //2 вариант
        print '<br>';
        echo 'Чтение построчно:<br>';
        
        $f = fopen("./test.txt", "r");
        $lines = [];
        while ($line = fgets($f)){
            print ($lines[] = $line)."<br>";
        }
        fclose($f);

        // задание7
        $file = file("count.txt");
        $count = implode("", $file);
        $count++;
        $myfile = fopen("count.txt","w");
        fputs($myfile,$count);
        fclose($myfile);
        echo $count."<br>";

        // задание8

        // задание9
        session_start();
        if(!isset($_SESSION['counter'])){
            echo "Вы еще не обновили страницу";
            $_SESSION['counter'] = 0;
        }
        else{
            $_SESSION['counter']++;
            echo "Кол-во обновлений страниц:".$_SESSION['counter'];
        }

        // задание10
        ?>
        <form action="index02.php" method="GET">
            <input type="email" name="email">
            <input type="submit">
        </form>
        <?php 
            if(!empty($_REQUEST['email'])){
                $_SESSION['email'] = $_REQUEST['email'];
            }
        ?>
</body>
</html>