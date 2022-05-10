<?php

// ========================== Belajar 1
function foo()
{
    $rafli = 'rafli adzani';
    $dani = 'dani';

    return $rafli . ' & ' . $dani;
};

var_dump(foo());
// ========================== Belajar 2
$rafli = 'rafli';
$dani = 12;

class Rafli
{
    public $data = 8;
    public function rafli_test()
    {
        return 'rafli';
    }
    public function foo()
    {
        return 'fii';
    }
}

$foo = new rafli();
var_dump($foo);
// ============================= Belajar 3

function data_siswa()
{
    $array = (array)
    [
        (object)
        [
        'nama'=> 'Andi',
        'kelas'=> 'SIJA',
        'absen'=> '03',
        ],
        (object)
        [
        'nama' => 'dani',
        'kelas'=> 'SIJA',
        'absen'=> '04',
        ],

    ];
    
    return $array;

}


// ================================================ Senin, 9 Mei 2022


