<!-- Studi Kasus
1. Andi punya data, didalam data si andi terdapat identitas 10 anak yang meliputi nama kelas absen. Buatlah satu buah array dalam variabel yang didalamnya terdapat identitas dari 10 anak ( object).
2. Buatlah perulangan dari data array yang dibuat oleh si Andi.
3. Ambil data nama dari masing masing anak dari object tersebut. -->

<?php 



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
        (object)
        [
        'nama' => 'Rafles',
        'kelas'=> 'SIJA',
        'absen'=> '22',
        ],
        (object)
        [
        'nama' => 'Ferdi',
        'kelas'=> 'SIJA',
        'absen'=> '52',
        ],
        (object)
        [
        'nama' => 'Ferdian',
        'kelas'=> 'SIJA',
        'absen'=> '15',
        ],
        (object)
        [
        'nama' => 'danies',
        'kelas'=> 'SIJA',
        'absen'=> '16',
        ],
        (object)
        [
        'nama' => 'daniel',
        'kelas'=> 'SIJA',
        'absen'=> '12',
        ],
        (object)
        [
        'nama' => 'danio',
        'kelas'=> 'SIJA',
        'absen'=> '08',
        ],
        (object)
        [
        'nama' => 'ogah',
        'kelas'=> 'SIJA',
        'absen'=> '01',
        ],
        (object)
        [
        'nama' => 'ucup',
        'kelas'=> 'SIJA',
        'absen'=> '03',
        ],

    ];

    return $array;

}

for ($i = 0;$i<count(data_siswa());$i++)
    {
        $data = data_siswa()[$i];
        var_dump($data->nama).($data); // Memanggil seluruh key "nama" pada object.
    }
$data_ucup = data_siswa()[9]->nama; // Memanggil key "nama" 1 object saja.
var_dump($data_ucup);


?>