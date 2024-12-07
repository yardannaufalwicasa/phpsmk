<?php 

    // $hari = 3;

    // switch ($hari) {
    //     case 1:
    //         echo 'Minggu';
    //         break;
    //     case 2;
    //         echo 'Senin';
    //         break;
    //     case 3;
    //         echo 'Selasa';
    //         break;
    //     default:
    //     echo 'Hari Belum Dibuat';
    //     break;
    // }

    $pilihan = 'hapus';

    switch ($pilihan) {
        case 'tambah':
            echo 'Anda memilih tambah';
            break;
        case 'ubah':
            echo 'Anda memilih ubah';
            break;
        case 'hapus':
            echo 'Anda memilih hapus';
            break;
        default:
            echo 'Pilihan belum ada';
            break;
    }

?>