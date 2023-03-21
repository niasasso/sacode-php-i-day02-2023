<?php

    // TIPE DATA ARRAY
    $nama = ['Samuel', 'Marthen', 'Acho', 'Maikel', 'Korinus', 'Obet', 'Lukas'];
    
    // Panggil array berdasarkan index
    echo '<p>' . $nama[0] . '</p>';
    echo '<p>' . $nama[1] . '</p>';
    echo '<p>' . $nama[2] . '</p>';
    echo '<p>' . $nama[3] . '</p>';
    echo '<p>' . $nama[4] . '</p>';

    var_dump($nama);

    // Menghitung Jumlah array
    echo '<p> Jumlah Index Array =' .count($nama) .'</p>';

    // panggil array menggunakan foreach
    $i = 0;

    echo "<p> Nama Siswa </p>";
    foreach($nama as $siswa)
    {
        ++$i;
        echo "<p>".$i.'. '.$siswa ."</p>";
    }

    // Array yang memiliki index value
    $dataSiswa = [
        "namaDepan" => 'Sulenias',
        "NamaBelakang" => 'Asso',
        "Alamat" => 'Padang Bulan'
    ];
    echo $dataSiswa['namaDepan'].' '.$dataSiswa['NamaBelakang'].' '.$dataSiswa['Alamat'];

    // Panggil dengan pengulangan
    echo "<br> Data Siswa <br>";
    foreach($dataSiswa as $ds)
    {
        echo $ds ." <br>";
    }

    // array multi dimensi
    $DataSemuaSiswa =[
        [
            "namadepan" => "Sulenias",
            "namabelakang" => "Asso",
            "alamatjalan" => "Padang Bulan",
            "alamat" => "Perumnas IV, Blok H",
            "alamatkelurahan" => "Yabensai",
            "ttl" => "Wamena, 23 Desember, **** ",
        ],
    
        [
            "namadepan" => "Samuel",
            "namabelakang" => "Bosawer",
            "alamatjalan" => "Padang Bulan",
            "alamat" => "Perumnas IV, Blok H",
            "alamatkelurahan" => "Yabensai",
            "ttl" => "Wamena, 23 Desember, **** ",
        ],
    
        [
            "namadepan" => "Korius",
            "namabelakang" => "Wenda",
            "alamatjalan" => "Padang Bulan",
            "alamat" => "Perumnas IV, Blok H",
            "alamatkelurahan" => "Yabensai",
            "ttl" => "Wamena, 23 Desember, **** ",
        ],
    
        [
            "namadepan" => "Marthen",
            "namabelakang" => "Tenouye",
            "alamatjalan" => "Padang Bulan",
            "alamat" => "Perumnas IV, Blok H",
            "alamatkelurahan" => "Yabensai",
            "ttl" => "Wamena, 23 Desember, **** ",
        ],
    
        [
            "namadepan" => "Maikel",
            "namabelakang" => "Kayame",
            "alamatjalan" => "Padang Bulan",
            "alamat" => "Perumnas IV, Blok H",
            "alamatkelurahan" => "Yabensai",
            "ttl" => "Wamena, 23 Desember, **** ",
        ]
    ];
    
    // echo $DataSemuaSiswa['namadepan'];
    // var_dump($DataSemuaSiswa);
    foreach($DataSemuaSiswa as $siswa)
    {   ++$i;
        echo "<h4> Data Siswa No. ".$i." </h4> <br>";
        echo $siswa['namadepan'].' '. $siswa['namabelakang']. '<br>';
        echo $siswa['alamatjalan'].' '. $siswa['alamatkelurahan']. '<br>';
        echo $siswa['ttl'];
        
    }






?>