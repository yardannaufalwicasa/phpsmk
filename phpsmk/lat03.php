<?php 

  

    function belajar(){
        echo "Saya Belajar PHP";
    }
    
    function luaspersegi( $p = 5,   $l = 3){
        $luas = $p * $l;
    
        echo $luas;
    }

    function luas($p = 5,   $l = 3){
        $luas = $p * $l;
    
        return $luas;
    }

    echo luas(100,3) * 5;

    function output(){
        return "Belajar Function";
    }

    // echo '<h1>'.output().'</h1>';
?>