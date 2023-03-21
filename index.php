<?php


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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>TTL</td>
        </tr>
            <?php $i=0; foreach($DataSemuaSiswa as $siswa): ?>
                <tr>
                    <td><?php echo ++$i?></td>
                    <td><?= $siswa['namadepan'].' '.$siswa['namabelakang']?></td>
                    <td><?= $siswa['alamatjalan'].' '.$siswa['alamatkelurahan']?></td>
                    <td><?= $siswa['ttl']?></td>
                </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>