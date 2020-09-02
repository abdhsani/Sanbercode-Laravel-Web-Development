<?php
function ubah_huruf($string)
{
    //kode di sini
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for ($i = 0; $i < strlen($string); $i++) {
        $posisi = strrpos($abjad, $string[$i]);
        $output .= substr($abjad, $posisi + 1, 1);
    }
    return $output;
}

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat') . "<br>"; // tfnbohbu
