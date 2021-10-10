<?php
    /*
     * 流程控制: 代碼執行的方向
     *
     * 控制分類:
     * 1. 順序結構: 代碼從上往下運行，順序執行。(代碼執行基本結構)
     * 2. 分支結構: 給定一個條件，同時有多種可執行代碼(塊)，然後會根據條件執行某一段代碼
     * 3. 循環結構: 在某個條件控制範圍內，指定的代碼(塊)可以重複執行
    */

    //分支結構if
    $day = 'sunday';
    if($day == 'sunday') {
        echo 'go out<br/>';
    }

    $day = 'monday';
    if($day == 'sunday') {
        echo 'go out play';
    } else {
        echo 'work<br/>';
    }

    if($day == 'sunday') {
        echo 'go out<br/>';
    } else {
        if($day == 'saturday') {
            echo 'play at home<br/>';
        } else {
            echo 'work<br/>';
        }
    }
    
    $day = 'saturday';
    if($day == 'sunday') {
        echo 'go out';
    } elseif ($day == 'saturday') {
        echo 'play at home';
    } else {
        echo 'work';
    }
    echo '<br/>';
    
    //分支結構switch
    $day = 1;
    switch($day) { //$day條件一定是個具體的值
        case 1:
            echo '1';
            break;
        case 2:
            echo '2';
            break;
        case 3:
            echo '3';
            break;
        case 4:
            echo '4';
            break;
        case 5:
            echo '5';
            break;
        dafault:
            echo 'error';
            break;
    }
    echo '<br/><br/>';


    //循環結構for
    for($i = 1; $i <= 10; $i++) {
        echo $i.'<br/>';
    }
    echo $i.'<br/>';    //11

    for($i = 1, $end = 10; $i <= $end; $i++) {
        echo $i.'<br/>';
    }
    echo $i.'<br/>';

    /* 死循環
    for(;;) {   //無條件for循環
        echo 'hello world<br/>';
    }
    */
    echo '<hr/>';

    //循環結構while
    $i = 1;
    while($i <= 10) {
        echo $i++,'<br/>';
    }
    echo '<hr/>';

    //循環結構do...while
    $i = 1;
    do{
        if($i % 2 != 1) {
            echo $i,'<br/>';
        }
        
        $i++;
    }while($i <= 10);
    echo '<hr/>';
    
    //循環結構foreach: 專門針對數組


    //中斷控制
    //continue 層級; //默認是1
    $i = 1;
    while($i <= 100) {
        if($i % 5 != 0) {
            $i++;
            continue;
        }
        echo $i++,'<br/>';
    }

    //終止控制
    //break 層級; //默認是1
    $i = 1;
    while($i <= 100) {
        if($i % 5 != 0) {
            $i++;
            break;
        }
        echo $i++,'<br/>';
    }
    echo $i;
