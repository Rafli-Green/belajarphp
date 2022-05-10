<?php 
// ============================ Belajar var_dump
// ========================== Belajar 1
function raflies()
{
  $rafli = 9;
  $dani = "dani";

  return $rafli . ' & ' . $dani;
}

var_dump(raflies());

// ============================ Belajar 2
function dani()
{
    $ahmad = 12;
    $adzani = "aku";

      return $ahmad . '&' . $adzani;
}

var_dump(dani());

//============================== Belajar 3

function tegar()
{
  $dani = 0.5;
  $kya = "raflies";

    return $dani.$kya;
}
var_dump(tegar());
// =========================== Belajar 4

function gita ()
{
  $gita = 'wanita';
  $arman = 0.7;

     return $gita." & ".$arman;
}
var_dump(gita());

//========================== Belajar 5

function gisel()
{
  $cleo = 90;
  $aqua = 'raflies';

    return $cleo.$aqua;

}
var_dump(gisel());



// ========================== Pelajaran 1 ( menampilkan 2 fungsi)
var_dump (gisel() ." ". gita());

?>