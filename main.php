<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
</head>
<body>
    <div class="flex-container">
        <div class="header">     
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>
        <div class="about_me">
          <h1>  <?php  echo $p  ?> </h1>
            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="./img/floppy-disk-icon.png" width="256" height="256">'; ?>
                </div>
                <div class="fullname">
                    <?php
                        $age10 = $age % 10;
                        switch ($age10) {
                            case '1':
                                $age_text = 'год';
                                break;
                            case '2':
                            case '3':
                            case '4':
                                $age_text = 'года';
                                break;
                            default:
                                $age_text = 'лет';
                                break;
                        }
                    ?>
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'город', ' ', $city; ?>
                    </p>
                    <p> Мне
                    <?php  echo $age, ' ', $age_text;   ?></p>
                    <p> Научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                    <p> Синтаксис, типы данных, вывод данных </p>
                </div>
            </div>
            <div class="knowledge">
                    <?php include 'knowledge.inc.php'; ?>
                    <?php echo <<<EOT
                    Это heredoc строка:<br>
                    Пишу "кавычки" как 'хочу'.<br>
                    EOT;
                    ?>
                    <?php echo <<<'EOT'
                    Это newdoc строка:<br>
                    Пишу \\ и \ как хочу. \n \r \t<br>
                    EOT;
                    ?>
                    <?php echo $a, ' ', $b, $c; ?> <br>
                    <?php
                        $a = 0x10;
                        $b = 20;
                        define('B_OCTAL', 052);
                        $c = $a + $b + B_OCTAL;
                        echo "$a + $b + " . B_OCTAL . " = $c <br>";
                        echo "gettype($c) returned ", gettype($c), "<br>";
                        $fp_num = 3.14;
                        echo "gettype($fp_num) returned ", gettype($fp_num);
                    ?><br>
                    <?php
                        echo $d . "<br>";
                        echo "var_dump(\$d) returned:<br>";
                        var_dump($d);
                    ?>
            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
