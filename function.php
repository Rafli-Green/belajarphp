<?php 
// Buatlah function dimana angka yang dimasukkan sebagai parameter maka dikalikan 5
function aritmatika ($x)
{
  return $x * 5;
}

var_dump(aritmatika(2.5)); // isi dari parameter itu argumen "2.5"
var_dump(aritmatika(5));


class Sija
{
  public function math()
  {
    return ' ini pelajaran minatmu';
  }
  public function ambilDataSiswa() //Public untuk mempublikasi tampilan
  {
    // Jangan ditiru echo <br>'nya
    return '<br><br>nama: Mep <br>nilai: '.$this->ambilNilaiRapot();
  }

  private function ambilNilaiRapot() // Private untuk menyembunyikan tampilan
  {
    return 8.9;
  }
}

$raport = new Sija();

var_dump($raport->ambilDataSiswa());
var_dump($raport->ambilNilaiRapot());



?>