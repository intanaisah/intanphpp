<?php
// Date
// Untuk menampilkan tanggal dan format tertentu
    // echo date ("1, D-M-Y");

    // Time
    // UNIX Timestamp /EPOCH time
    // Dedtik yang sudah berlaku sejak 1 januari 1970
    // echo time ();
    // echo date("1" , timw()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0,)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("1", mktime(0,0,0,8,25,1985));

    //strtotime
    echo date("1", strtotime("25 Agustus 1985"))
    ?>