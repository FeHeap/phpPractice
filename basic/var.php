<?php

    //變量

    //定義變量，在PHP中不需要任何關鍵字定義變量(賦值)
    $var1;
    $var2 = 1;

    //訪問變量
    echo $var2; //通過var變量名字找到存儲的內容1，然後輸出

    //修改變量
    $var2 = 2;
    echo '<hr/>',$var2,'<br/>';

    //刪除變量: 使用unset(變量名字)
    unset($var2);
    //echo $var2;   Notice: Undefined variable: var2 in E:\server\apache\htdocs\var.php on line 18


    /*
     * 變量命名規則:
     * 1. 在PHP中變量名字必須以"$"符號開始;
     * 2. 名字由字母、數字和下劃線"_"構成，但是不能以數字開頭;
     * 3. 在PHP中本身還允許中文變量(不建議)。
    */
    $var_1;$var_var_1;$_var1;
    
    //$1var;    Parse error: syntax error, unexpected T_LNUMBER, expecting T_VARIABLE or '$' in E:\server\apache\htdocs\var.php on line 28

    //中文變量
    $中國 = 'China';

    /*
     * 預定義變量: 提前定義的變量，系統定義的變量，存儲許多需要用到的數據(預定義變量都是數組)
     * 
     * $_GET: 獲取所有表單以get方式提交的數據
     * $_POST: POST提交的數據都會保存在此
     * $_REQUEST: GET和POST提交的都會保存
     * $GLOBALS: PHP中所有的全局變量
     * $_SERVER 服務器信息
     * $_SESSION: session會話數據
     * $_COOKIE cookie會話數據
     * $_ENV: 環境信息
     * $_FILES: 用戶上傳的文件信息
    */

    
    /*
     * 可變變量: 如果一個變量保存的值剛好是另外一個變量的名字，哪麼可以通過訪問一個變量的到另外一個變量的值: 在面量前面再多加一個$符號
     * 
     * $a = 'b';
     * $b = 'bb';
     *
     * $$a == 'bb'
     *
    */
    $a = 'b';
    $b = 'bb';
    echo $$a,'<br/>';


    /*
     * 變量傳值: 將一個變量賦值給另一個變量
     * 
     * 變量傳值一共有兩種方法: 值傳遞，引用傳遞
     * 值傳遞: 將變量保存值賦值一份，然後將新的值給另外一個變量保存(兩個變量沒有關係)
     * 引用傳遞: 將變量保存的值所在的內存地址，傳遞給另外一個變量，兩個變兩只向同一塊內存空間(兩個變量是同一個值)
     * 在內存空間中，通常有以下幾個區分
     * 棧區: 程序可以操作的內存部分(不存數據，運行程序代碼)，少但是塊
     * 代碼段: 存儲程序的內存部分(不執行)
     * 數據段: 存儲普通數據(全局區和靜態區)
     * 堆區: 存儲複雜數據，大但是效率低
    */
    
    //值傳遞
    $c = 10;
    $d = $c;
    $d = 5;
    echo '$c==',$c,', $d==',$d,'<br/>';

    //引用傳遞
    $e = 10;
    $f = &$e;
    $e = 5;
    echo '$e==',$e,', $f==',$f,'<br/>';