<?php

    //PHP常量

    //使用函數定異常量: define
    define('PI', 3.14);
    
    //使用const關鍵字定義(PHP 5.3 之後新增的)
    const PII = 3;

    /*
     * 常量命名規則:
     * 1. 常量不需要使用"$"符號，一旦使用系統就會認為是變量;
     * 2. 常量的名字組成由字母、數字和下劃線組成，不能以數字開頭;
     * 3. 常量的名字通常是以大寫字母為主(與變量以示區別);
     * 4. 常量命名的規則比變量鬆散，可以用一些特殊字符，該方式只能使用define定義;
     *
    */

    //定義特殊常量
    define('-_-','smile');
    //const -_- = 'smile';  Parse error: syntax error, unexpected '-', expecting T_STRING in E:\server\apache\htdocs\const.php on line 22
    

    /*
     * 注意細節:
     * 1. define和const定義的常量是有區別: 在於訪問權限區別
     * 2. 定義常量通常不區分大小寫，但是可以區分，可以參照define函數的第三個參數
    */

    //常量的使用與變量一樣: 不可改變值(在定義的時候必須賦值)
    echo PI;

    //有的時候還需要使用另一種形式訪問(針對的是特殊名字的常量)，需要用到另外一個訪問常量的函數: constant('常量名')
    //echo -_-; Parse error: syntax error, unexpected ';' in E:\server\apache\htdocs\const.php on line 35
    echo constant('-_-'); 



    /*
     * 系統常量: 系統幫助用戶定義的常量，用戶可以直接使用
     * 常用的系統常量:
     * PHP_VERSION: PHP版本號
     * PHP_INT_SIZE: 整形大小
     * PHP_INT_MAX: 整形能表示的最大值
    */

    echo '<hr/>',PHP_VERSION,'<br/>',PHP_INT_SIZE,'<br/>',PHP_INT_MAX;

    /*
     * 在PHP中還有一些特殊的常量，他們有雙下劃線開始+常量名+雙下劃線結束，這種常量稱之為系統魔術常量:
     * 魔術常量的值通常會跟著環境變化，但是用戶改變不了
     * __DIR__: 當前被執行的腳本所在電腦的絕對路徑
     * __FILE__: 當前被執行的腳本所在電腦的絕對路徑(帶自己文件的名字)
     * __LINE__: 當前所屬的行數
     * __NAMESPACE__: 當前所屬的命名空間
     * __CLASS__: 當前所屬的類
     * __METHOD__: 當前所屬的方法
    */

    echo '<hr/>',__DIR__,'<br/>',__FILE__,'<br/>',__LINE__,'<br/>';
    echo __LINE__;