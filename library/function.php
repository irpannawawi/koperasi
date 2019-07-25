<?php

    /*  
    $parm adalah parameter untuk level user yang dibolehkan
    contoh ceksession('User'); hanya user yang boleh mengakses halaman ini
    parameter Available : "User" atau "Admin"
    */
    function ceksession($parm)
    {
       
        $levelsession = $_SESSION['level'];
        $userId = $_SESSION['userId'];
        if(empty($level) OR empty($userId)){
            header('location:../index.php');
        }elseif($levelsession != $parm){
            echo "<h1>anda dilarang membuka halaman ini</h1>";
        }

    }





