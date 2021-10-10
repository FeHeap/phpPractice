<meta charset="utf-8">
<?php
    
    //系統函數
    

    //輸出相關
    echo print('hello world<br/>');
    print 'hello world<br/>';
    
    $a = 'hello world<br/>';
    print_r($a);


    //時間相關
    echo date('Y 年 m 月 d 日 H:i:s',12345678),'<br/>';
    echo date('Y 年 m 月 d 日 H:i:s'),'<br/>';
    echo time(),'<br/>';
    echo microtime(),'<br/>';
    echo strtotime('tomorrow 10 hours'),'<br/>';