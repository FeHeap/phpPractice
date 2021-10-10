<?php
    

    //include 錯誤要求較輕，錯誤的話不會阻止代碼執行
    include 'a.php';    //Warning

    echo 'hello world';

    //require 錯誤要求較高，若錯誤會終止代碼執行
    require 'a.php';    //Fatal error

    echo 'hello world';

    