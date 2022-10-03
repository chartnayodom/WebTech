<?php
    $month = strtotime("January 2022");
    $day_count = date('t',$month);
    // echo $day_count;
    $weeks = array();
    $week = '';
    $str = date('w', mktime(0, 0, 0, date('m', $month), 1, date('Y', $month)));

    $week .= str_repeat('<td></td>', $str);
    for ($day = 1; $day <= $day_count; $day++,$str++){
        $week .= '<td>' . $day;
        $week .= '</td>';
         
        if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        
        $week = '';
        }
    }
?>