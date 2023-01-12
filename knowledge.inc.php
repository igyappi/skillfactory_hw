<?php
    $a = 'Строка, конкатенованная из';
    $b = 3;
    $c = ' переменных разных типов';
?>

<?php
    $today = date('d.m.Y');
    $curr_month = date('m');
    $d = 'Сегодня ' . $today . ', время года: ';
    $month_int = intval($curr_month);
    if ($month_int <= 2 || $month_int > 11) {
        $season = 'Зима';
    } elseif ($month_int >= 3 && $month_int <= 5) {
        $season = 'Весна';
    } elseif ($month_int >= 6 && $month_int <= 8) {
        $season = 'Лето';
    } else {
        $season = 'Осень';
    }
    $d .= $season;
?>
