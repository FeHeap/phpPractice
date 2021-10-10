<?php
    
    //算術運算符
    $a = $b = 10;
    $c = 0;

    //var_dump($a / 0); 
    /* Warning: Division by zero in E:\server\apache\htdocs\operator.php on line 6
     * bool(false)
    */

    
    /*
     * 比較運算符: 比較兩個數據大小，或者內容是否相同，返回的結果都是布爾類型: 
     * 滿足返回true，不滿足返回false
     * >
     * >=
     * <
     * <=
     * ==
     * !=
     * ===
     * !==
    */
    $a = '123';
    $b = 123;
    //判斷相等
    var_dump($a == $b);     //bool(true)
    //全等判斷
    var_dump($a === $b);    //bool(false)

    
    /*邏輯運算符
     * &&
     * ||
     * !
    */
    $a = 'weekend';
    $b = 'goods';
    // &&
    var_dump($a == 'weekend' && $b == 'good');  //bool(false)
    // ||
    var_dump($a == 'weekend' || $b == 'good');  //bool(true)
    // !
    var_dump($b == 'good');     //bool(false)
    var_dump(!($b == 'good'));  //bool(true)
    // 邏輯&&和邏輯||又稱之為短路運算: 如果第一個表達式結果已經滿足條件了，那麼就不會運行邏輯運算後面的表達式: 在書寫代碼的時候，進量將出現蓋率最高的(能夠直接判斷出結果)的表達式放到第一位
    echo '<hr/>';


    /*
     * 連接運算符
     * .: 將兩個字符串連接在一起
     * .=: 複合運算，將左邊的內容與右邊的內容連接起來，然後重新賦值給左邊變量
     * A.=b ======= A = A.b
    */
    $a = 'hello ';
    $b = 123;
    echo $a . $b;
    $a .= $b;   // $a = $a . $b;
    echo $a;
    echo '<hr/>';

    /*
     * 錯誤抑制符: 在PHP中有一些錯誤可以提前預知，但是這些錯誤可能無法避免，但是又不希望抱錯給用戶看，
     * 可以使用錯誤抑制符處理
     *
     * @: 在可能出錯的表達式前面使用@符號即可
    */
    $a = 10;
    $b = 0;
    //$a % $b;  Warning: Division by zero in E:\server\apache\htdocs\operator.php on line 72
    @($a % $b);
    //錯誤抑制符通常在生產環境(上線)會用到，在開發的時候不會用: 系統本身最好沒有任何錯誤。
    echo '<hr/>';


    /*
     * 三目運算符: 有三個表達式參與的運算(簡單的分支結構縮寫)
     * 語法格式: (表達式1) ? 表達式2 : 表達式3;
    */
    $a = 10;
    $b = $a > 10 ? 100 : 0;
    echo $b;    //0
    //三目運算可以進行覆核三目運算: 三目運算中的表達式2和3都是可以是另一個三目運算。
    echo '<hr/>';


    /*
     * 自操作運算符: 自己操作自己的運算符
     * ++ 在原來的值上+1
     * -- 在原來的值上-1
    */
    $a = 1;
    $a++; //$a = $a + 1;
    $a = $b = 1;
    $a++;
    ++$b;
    echo $a,' ',$b; //2 2
    echo '<br/>';
    echo $a++,' ',++$b; //2 3
    echo '<br/>';
    echo $a,' ',$b; //3 3

    /*
     * 衍生符號: 類似自操作
     * +=
     * -=
     * *=
     * /=
     * %=
    */
    $a = 10;
    $b = 5;
    $a += $b; //$a = $a + $b;
    echo '<br/>';
    echo $a,' ',$b; //15 5


    /*
     * 位運算: 取出計算機中最小的單位(位bit)進行運算
     * &
     * |
     * ~
     * ^
     * <<
     * >>
    */