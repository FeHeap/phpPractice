<?php
    /*
     * 數據類型: data type，在PHP中止的是儲存的數據本身的類型，而不是變量的類型，
     * PHP是一種弱類型語言，變量本身沒有數據類型。
     * 
     * PHP中將數據分為三大類八小類:
     * 
     * 簡單(基本)數據類型: 4個小類
     * 整型: int/integer，系統分配4個字節存儲，表示整數類型(有前提)
     * 浮點型: float/double，系統分配8個字節存儲，表示小數或者整型存不下的整數
     * 字符串型: string, 系統根據實際長度分配，表示字符串(引號)
     * 布爾類型: bool/boolean，表示布爾類型，只有兩個值: true 和 false
     *
     * 複合數據類型: 2個小類
     * 對象類型: object，存放對象(面向對向)
     * 數組類型: array，存儲多個數據(一次性)
     *
     * 特殊數據類型: 2個小類
     * 資源類型: resource，存放資源數據(PHP外部數據，如數據庫、文件)
     * 空類型: NULL，只有一個值就是NULL(不能運算)
     *
     *
     * 類型轉換: 在很多的條件下，需要指定數據類型，需要外部數據(當前PHP取得數據)，
     * 轉換成目標數據類型
     *
     * 在PHP中有兩種類型轉換方式:
     * 1. 自動轉換: 系統根據自己判定，自己轉換(用的比較多，效率偏低)
     * 2. 強制(手動)轉換: 認為根據需要的目標類型轉換
     *    強制轉換規則: 在變量之前資加一個()，然後在裡面寫上對應的類型: int/integer...其中NULL類型用到unset()
     *
     * 在轉換類型中，用的比較多的就是轉布爾類型(判斷)和轉數值類型(算術運算)
     *
     * 其他類型轉數值說明
     * 1. 布爾true為1，flase為0
     * 2. 字符串轉數值有自己的規則
     *    2.1 以字母開頭的字符串，永遠為0
     *    2.2 以數字開頭的字符串，取道泡到字符串為止(不會同時包含兩個小數點)
     *
    */
    
    //創建數據
    $a = 'abc1.1.1';
    $b = '1.1.1abc';

    //自動轉換
    echo $a + $b; //算數+運算，系統先轉換成數值類型(整型和浮點型)，然後運算

    //強制轉換
    echo '<br/>',(float)$a,' ',(float)$b;
    

    /*
     * 類型判斷
     * 通過一組類型判斷函數，來判斷變量，最終返回這個變量所保存數據的數據類型(相同結果為true，
     * 失敗為flase): 是一組以is_開頭後面跟著類型名字的函數: is_XXX(變量名)
     *
     * 布爾類型不能用echo來查看，可以使用var_dump結構查看
     * var_dump(變量1，變量2...)
    */
    echo '<hr/>';
    var_dump(is_int($a));       //false
    var_dump(is_string($a));    //true

    /*
     * 還有一組函數可以用來獲取以及設定數據(變量)的類型
     * gettype(變量名): 獲取類型，得到的是該類型對應的字符串
     * settype(變量名,類型): 設定數據類型，與強制轉換不同
     * 1. 強制轉換(類型)變量名，是對數據值複製的內容進行處理(不會處理實際存儲的內容)
     * 2. settype會直接改變數據本身
    */
    echo '<hr/>';
    echo gettype($a);
    
    var_dump(settype($b,'int'));
    echo gettype($b),$b;
    echo '<hr/>';


    /*
     * 整數類型: 保存整數數值(範圍限制)，4個字節存儲數據，最大32位，42億多，但是在PHP中默認是有符號類型(區分正負號)
     * 在PHP中提供了四種整型定義方式: 十進制定義，二進制定義，八進制定義和十六進制定義
    */
    $a1 = 110;
    //$a2 = 0b110;
    $a3 = 0110;
    $a4 = 0x110;
    echo $a1,'~',$a2,'~',$a3,'~',$a4,'<hr/>';   //默認的PHP輸出數值都會轉換成10進制輸出
    
    //利用進制函數運算
    var_dump(decbin(107));
    echo "<hr/>";

    /*
     * 浮點類型: 小數類型以及超過整型所能存儲範圍的整數(不保證精度)，經度範圍大概15個有效數字左右
     *
     * 浮點型定義有兩種方式:
     * $f = 1.23;
     * $f = 1.23e10;    //科學計數法，其中e表示底10
     *
     *
     *
     *
     *
     *
    */
    $f1 = 1.23;
    $f2 = 1.23e10;
    $f3 = PHP_INT_MAX + 1;  //整型超過自身存儲的大小之後會用浮點型存儲
    var_dump($f1,$f2,$f3);

    //浮點數判斷
    $f4 = 0.7;
    $f5 = 2.1;
    $f6 = $f5 / 3;
    var_dump($f6 == $f4);
    echo "<hr/>";

    //布爾類型
    $b1 = true;
    $b2 = FALSE;
    var_dump($b1,$b2);
    /* 在進行某些數據判斷的時候，需要特別注意類型轉換
     * empty(): 判斷數據的值是否為"空"(此處不是指NULL)，如果為空返回true，不為空返回false
     * isset(): 判斷數據存儲的變量本身是否存在，存在變量返回true，不存在返回false
    */
