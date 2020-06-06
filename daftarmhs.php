<?php
    include_once("mahasiswa.php");

    $m = new mahasiswa();
    //menggunakan property
    //$m->NIM = "11223344";  //set nilai ke property NIM
    //echo "NIM: ". $m->NIM; //Get Nilai dari property NIM

    $m->SETNIM("55667788");
    echo "NIM: ". $m->GETNIM();
