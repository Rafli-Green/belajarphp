<!-- <?php 
//======================== Praktik OOP
//======================== Belajar 1

$rafli = 'rafli';
$dani = 12;

class rafli
{
  // ini property (variabel didalam class) 
  public $data = 8;

  // ini method (function didalam class)
  public function rafli()
  {
      return 'bruh';
  }
  public function matematika()
  {
      return 1+1-3;
  }
}

$foo = new rafli();

// cara memanggil property
var_dump($foo->data);

// cara memanggil method
var_dump($foo->rafli());
var_dump($foo->matematika());

var_dump($foo->data ." & ". $foo->rafli() );

//============================================================== Belajar 2

$ivan = 'ivan';
$haris = 4.5;

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

~
//============================================================== Belajar 3


class Muhajirin
{
  public function muhajirin()
  {
    return "Anak Remaja Masjid";
  }

  public function dukuh_kupang()
  {
    return "Anak Dukuh Kupang";
  }
}

$human_resources = new Muhajirin();

var_dump($human_resources->muhajirin()." & ".$human_resources->dukuh_kupang());
?>

<br>
<br>
