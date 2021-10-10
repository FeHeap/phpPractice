<?php

    //包含文件: 使用數據
    
    echo 'hello world';
    //包含文件
    include 'include1.php'; //包含當前文件include2.php所在文件夾下的include1.php
    echo $a,' ',PI;

    /*
     * include 和 include_once 的區別:
     * include: 系統會碰到一次，執行一次:如果對同一文件進行多次加載，那麼系統會執行多次
     * include_once: 系統碰到多次，也只會執行一次
    */

    //再次加載
    //include 'include1.php';
    include_once 'include1.php';