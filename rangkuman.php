1). Class : Class adalah object yang berisikan beberapa fungsi dan variable
    ex:
        class Contoh {
            //semua didalam class harus diawali dengan public
            public function contohFunction() {
                //return pada function harus berupa sebuah variable atau nilai pasti
                return 'Hasil';
            };
        }

2). Function :  Function adalah sebuah fungsi yang berisi rumus yang
                telah dibuat seperti variable dan integer yang harus mengembalikan nilai pasti (return)
    ex: 
        function contohFunction() {
            //return pada function harus berupa sebuah variable atau nilai pasti
            return 'Hasil';
        };

3). Object sebagai tipe data : Object adalah sebuah tempat atau wadah yang digunakan untukl menyimpan data
                               seperti data siswa yang didalamnya ada nama, kelas, dll.
    ex: 
        $contohObj =  (object) [
            'nama' => 'fooo',
            'kelas' => 'TKJ',    
        ];

4). Perulangan : Perulangan / Looping adalah suatu proses dimana ada sebuah data yang ingin ditampilkan
                 dalam hitungan tertentu.
    ex: 
       for ($i = 0; $i < 10 /** Banyak loopingan sesui dengan yang diinginkan */ ; $i++) {
            echo 'terserah';
       };

5). Soft Code: 
       var dump: Buat debugging ( var_dump($variable) )
       class: $var = new Contoh() // setelah new adalah nama class