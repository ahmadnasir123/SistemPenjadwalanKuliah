<?php
function tampilJadwalDosen($kelas, $hari, $dosen){
    $jadwal = jadwal($kelas);
        for($row = 0; $row<12; $row++){

            for($rows=0; $rows<$jadwal[$hari]["JJ"]; $rows++){
                $slot[$rows] = $jadwal[$hari]["smulai"] + $rows; 
            };
            for($rows=0; $rows<$jadwal[$hari]["JJ1"]; $rows++){
                $slot1[$rows] = $jadwal[$hari]["smulai1"] + $rows ; 
            };
            echo "<tr>";
            echo "<td>".slotWaktu()[$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$row]["waktu"]."</td>";
            if(in_array($row+1, $slot) && $jadwal[$hari]["Dosen"] == $dosen){
                echo "<td>".$jadwal[$hari]["Nama"]."</td>";
                echo "<td>".$jadwal[$hari]["Dosen"]."</td>";
                echo "<td>".$jadwal[$hari]["Ruang"]."</td>";
                echo "<td>".$jadwal[$hari]["JJ"]."</td>";
                echo "<tr>";   
            }else if(in_array($row+1, $slot1) && $jadwal[$hari]["Dosen1"] == $dosen ){
                echo "<td>".$jadwal[$hari]["Nama1"]."</td>";
                echo "<td>".$jadwal[$hari]["Dosen1"]."</td>";
                echo "<td>".$jadwal[$hari]["Ruang1"]."</td>";
                echo "<td>".$jadwal[$hari]["JJ1"]."</td>";
                echo "<tr>";
            }else{
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<tr>";
            }    
        } 
}
function slotWaktu(){
    $waktu = array(
                array("waktu" => "07.30 - 08.20", "nomor" => 1),
                array("waktu" => "08.20 - 09.10", "nomor" => 2),
                array("waktu" => "09.10 - 10.00", "nomor" => 3),
                array("waktu" => "10.15 - 11.05", "nomor" => 4),
                array("waktu" => "11.05 - 11.55", "nomor" => 5),
                array("waktu" => "12.45 - 13.35", "nomor" => 6),
                array("waktu" => "13.35 - 14.25", "nomor" => 7),
                array("waktu" => "14.25 - 15.15", "nomor" => 8),
                array("waktu" => "15.45 - 16.35", "nomor" => 9),
                array("waktu" => "16.35 - 17.25", "nomor" => 10),
                array("waktu" => "17.25 - 18.15", "nomor" => 11),
                array("waktu" => "18.45 - 19.35", "nomor" => 12)
    );
    return $waktu;
}
function jadwal($kelas){    
    $ti5A = array(
        0 => array(
                    "Nama" => "Penjaminan Kualitas Perangkat Lunak", "Dosen" => "Mauldy", "Ruang" => "GSG208", "JJ" => 4, "Hari" => "Senin", "smulai" => 6, "smulai1" => 0, "JJ1" => 1),

        1 => array("Nama" => "Probabilitas dan Statistik", "Dosen" => "Mera", "Ruang" => "AA305", "JJ" => 4, "Hari" => "Selasa", "smulai" => 1, "smulai1" => 0, "JJ1" => 1,
                   "Nama1" => " E-Business ", "Dosen1" => "Bambang", "Ruang1" => "GSG208", "JJ1" => 4, "Hari1" => "Senin", "smulai1" => 5),

        2 => array("Nama" => "Perancangan Strategi Sistem Informasi", "Dosen" => "Hatta", "Ruang" => "AA308", "JJ" => 3, "Hari" => "Rabu", "smulai" => 1,
                     "Nama1" => " Pemrograman Web 2 ", "Dosen1" => "Anggi", "Ruang1" => "AA303", "JJ1" => 6, "Hari1" => "Rabu", "smulai1" => 5),

        3 => array("Nama" => " Sistem Pendukung Keputusan ", "Dosen" => "Iklima", "Ruang" => "GSG211", "JJ" => 4, "Hari" => "Kamis", "smulai" => 1,
                     "Nama1" => "Pembelajaran Mesin", "Dosen1" => "Dewiyanti", "Ruang1" => "AA301", "JJ1" => 4, "Hari1" => "Kamis", "smulai1" => 6),

        4 => array("Nama" => "Bahasa Inggris Communication 2", "Dosen" => "Dewi K", "Ruang" => "GSGInt", "JJ" => 3, "Hari" => "Jumat", "smulai" => 5,
                    "Nama1" => "Manajemen Proyek ", "Dosen1" => "Elisa", "Ruang1" => "GSGInt", "JJ1" => 4, "Hari1" => "Jumat", "smulai1" => 8)
    );

    $ti5B = array(
        0 => array("Nama" => "E-Business ", "Dosen" => "Bambang", "Ruang" => "GSG210", "JJ" => 4, "Hari" => "Senin", "smulai" => 1,
                    "Nama1" => "Probabilitas Dan Statistik ", "Dosen1" => "Euis", "Ruang1" => "GSG210", "JJ1" => 4, "Hari1" => "Senin", "smulai1" => 5),

        1 => array("Nama" => "Pemrograman Web 2", "Dosen" => "Syamsi", "Ruang" => "AA303", "JJ" => 6, "Hari" => "Selasa", "smulai" => 1,
                    "Nama1" => "Perancangan Strategi Sistem Informasi", "Dosen1" => "Hatta", "Ruang1" => "AA304", "JJ1" => 3, "Hari1" => "Selasa", "smulai1" => 8),

        2 => array("Nama" => "Penjaminan Kualitas Perangkat Lunak", "Dosen" => "Iklima", "Ruang" => "AA304", "JJ" => 4, "Hari" => "Rabu", "smulai" => 1,
                     "Nama1" => "Sistem Pendukung Keputusan", "Dosen1" => "Asep", "Ruang1" => "AA304", "JJ1" => 4, "Hari1" => "Rabu", "smulai1" => 6),

        3 => array("Nama" => "Manajemen Proyek TIK", "Dosen" => "Hadi", "Ruang" => "GSG207", "JJ" => 4, "Hari" => "Kamis", "smulai" => 7, "smulai1" => 0, "JJ1" => 1),
                   

        4 => array("Nama" => "Bahasa Inggris Communication 2", "Dosen" => "Fitri", "Ruang" => "GSG206", "JJ" => 3, "Hari" => "Jumat", "smulai" => 1,
                    "Nama1" => "Pembelajaran Mesin ", "Dosen1" => "Mera", "Ruang1" => "AA304", "JJ1" => 4, "Hari1" => "Jumat", "smulai1" => 6)
    );
        if($kelas == 0){
            return $ti5A;
        }else if($kelas == 1){
            return $ti5B;
    }
}
    function ulangJadwal($var, $nama, $slotMulai){
        $jadwal = jadwal($var);
        $slotMulai = $slotMulai - 1;
        for($row = 0; $row<$jadwal[$nama]["JJ"]; $row++){
            echo "<tr>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["waktu"]."</td>";
            echo "<td>".$jadwal[$nama]["Nama"]."</td>";
            echo "<td>".$jadwal[$nama]["Dosen"]."</td>";
            echo "<td>".$jadwal[$nama]["Ruang"]."</td>";
            echo "<td>".$jadwal[$nama]["JJ"]."</td>";
            echo "<tr>";
        };
    }
    function pembulatanHari($slotMulai, $jumlah){
        $slotMulai = $slotMulai - 1;
        for($row = 0; $row<$jumlah; $row++){
            echo "<tr>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$slotMulai+$row]["waktu"]."</td>";
            echo "<td> </td>";
            echo "<td> </td>";
            echo "<td> </td>";
            echo "<td> </td>";
            echo "<tr>";
        };
    };
    function TampilTabel($kelas){
        for($row=0; $row<5; $row++){
            echo "<tr class='table-primary'>";
            echo "<th rowspan = '24'>";
            if($row == 0){
                echo "Senin";
            }else if($row == 1){
                echo "selasa";
            }else if($row == 2){
                echo "Rabu";
            }else if($row == 3){
                echo "Kamis";
            }else if($row == 4){
                echo "Jumat";
            }
            echo "</th>";
            echo "</tr>";
            tampilJadwal($kelas, $row);
        }
    };

    function tampilJadwal($kelas, $hari){
        $jadwal = jadwal($kelas);
        for($row = 0; $row<12; $row++){

            for($rows=0; $rows<$jadwal[$hari]["JJ"]; $rows++){
                $slot[$rows] = $jadwal[$hari]["smulai"] + $rows; 
            };
            for($rows=0; $rows<$jadwal[$hari]["JJ1"]; $rows++){
                $slot1[$rows] = $jadwal[$hari]["smulai1"] + $rows ; 
            };
            echo "<tr>";
            echo "<td>".slotWaktu()[$row]["nomor"]."</td>";
            echo "<td>".slotWaktu()[$row]["waktu"]."</td>";
            if(in_array($row+1, $slot)){
                echo "<td>".$jadwal[$hari]["Nama"]."</td>";
                echo "<td>".$jadwal[$hari]["Dosen"]."</td>";
                echo "<td>".$jadwal[$hari]["Ruang"]."</td>";
                echo "<td>".$jadwal[$hari]["JJ"]."</td>";
                echo "<tr>";   
            }else if(in_array($row+1, $slot1)){
                echo "<td>".$jadwal[$hari]["Nama1"]."</td>";
                echo "<td>".$jadwal[$hari]["Dosen1"]."</td>";
                echo "<td>".$jadwal[$hari]["Ruang1"]."</td>";
                echo "<td>".$jadwal[$hari]["JJ1"]."</td>";
                echo "<tr>";
            }else{
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<tr>";
            }    
        }
    }
    function pagination($id){

        if($id == 0){
            echo "<a href='#'>&laquo;</a>";
            echo "<a class='active' href=''>1</a>";
            echo "<a href='jadwal.php?id=1'>2</a>";
            echo "<a href='jadwal.php?id=1'>&raquo;</a>";

        }else if($id == 1){
            echo "<a href='jadwal.php?id=0'>&laquo;</a>";
            echo "<a href='jadwal.php?id=0'>1</a>";
            echo "<a class='active' href='#'>2</a>";
            echo "<a href='jadwal.php?id=2'>&raquo;</a>";
        }
    }

    function namaKelas($id){

        if($id == 0){
            echo "TI 5A";
        }else if($id == 1){
            echo "TI 5B";
        }
    }
    function namaHari($id){

        if($id == 0){
            echo "Senin";
        }else if($id == 1){
            echo "Selasa";
        }else if($id == 2){
            echo "Rabu";
        }else if($id == 3){
            echo "Kamis";
        }else if($id == 4){
            echo "Jumat";
        }
    }

?>