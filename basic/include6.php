<?php

    // 文件嵌套包含

    // 包含include5.php//文件本身包含了include4.php
    include 'include5.php';
    
    // 嵌套包含的時候就很容易出現相對路徑出錯的問題: 相對路徑會因為文件的包含而改變(./和../)
    // windows下面，每一個文件夾下都有.和..的文件夾