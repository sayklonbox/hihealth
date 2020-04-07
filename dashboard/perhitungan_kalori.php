<?php

// Action Form

if(isset($_POST['hitung'])){
    
    //Input Form
    
    $bb       = $_POST['bb'];
    $tb       = $_POST['tb'];
    $kelamin  = $_POST['kelamin'];
    $umur     = $_POST['umur'];
    $kegiatan = $_POST['kegiatan'];
    $pemakan  = $_POST['pemakan'];

    /* RUMUS BMR 

    BMR Pria = 88.362 + (13.397 x berat badan [kg]) + (4.799 x tinggi badan [cm]) – (5.677 x umur)
    BMR Wanita = 447.593 + (9.247 x berat badan [kg]) + (3.098 x tinggi badan [cm]) – (4.33 x umur)
    
    Level Aktivitas Fisik
    
    Tidak aktif: TEE = BMR x 1.2
    Cukup aktif, berolahraga 1-3 kali/minggu: TEE = BMR x 1.375
    Aktif, berolahraga 3-5 kali/minggu: TEE = BMR x 1.55
    Sangat aktif, berolahraga 6-7 kali/minggu: TEE = BMR x 1.725

    */

    if($kelamin=="Perempuan"){
        
        $BMR = 447.593+(9.247*$bb)+(3.098*$tb)-(4.33*$umur);
        if($kegiatan=="TidakAktif"){
            $TEE=$BMR*1.2;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="CukupAktif"){
            $TEE=$BMR*1.375;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="Aktif"){
            $TEE=$BMR*1.55;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="SangatAktif"){
            $TEE=$BMR*1.725;
            $TEEc=$TEE*1000;
        }
        echo"Dengan Berat Badan Sebesar $bb Tinggi Badan Sebesar $tb <br>";
        echo"BMR Anda sebesar $BMR <br>";
        echo"Kebutuhan Kalori Harian Anda Adalah : $TEE kcals atau $TEEc cals <br>";
        echo"<br>";
        echo"Makanan Yang Disarankan Setiap Harinya Untuk Memenuhi Kebutuhan Kalori Anda Adalah : ";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        if($pemakan=="NonVegetarian"){
            ?>
                <a href="nonvegetarian.php">LIHAT SOLUSI MAKANAN</a>
                <?php
            }

    }
    else if($kelamin=="Laki"){
        $BMR = 88.362+(13.397*$bb)+(4.799*$tb)-(5.677*$umur);
        
        if($kegiatan=="TidakAktif"){
            $TEE=$BMR*1.2;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="CukupAktif"){
            $TEE=$BMR*1.375;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="Aktif"){
            $TEE=$BMR*1.55;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="SangatAktif"){
            $TEE=$BMR*1.725;
            $TEEc=$TEE*1000;
        }
        
        echo"Dengan Berat Badan Sebesar $bb Tinggi Badan Sebesar $tb <br>";
        echo"BMR Anda sebesar $BMR <br>";
        echo"Kebutuhan Kalori Harian Anda Adalah : $TEE kcals atau $TEEc cals <br>";
        echo"<br>";
        echo"Makanan Yang Disarankan Setiap Harinya Untuk Memenuhi Kebutuhan Kalori Anda Adalah : ";
        echo"<br>";
        echo"<br>";
        echo"<br>";

        
        }
    }

?>
