<?php

// untuk membandingkan dua jenis, lalu bisa di selected
function getSelected($s1, $s2)
{
    if($s1 == $s2)
    {
        echo "selected";
    }
}

// untuk membandingkan dua jenis, lalu bisa di checked
function getChecked($s1, $s2)
{
    if($s1 == $s2)
    {
        echo "checked";
    }
}

// // untuk checked genre
// function getGenre($cari, $string)
// {
//     $array = explode(",", $string);
//     $caridata = in_array($cari, $array);
//     if ($caridata)
//     {   
//         echo "checked";
//     }
// }

// explode = untuk merubah string menjadi array
// in_array = mencari data yang sesuai didalam array
