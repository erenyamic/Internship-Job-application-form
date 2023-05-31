<?php
session_start();
if(isset($_POST["btn1"])){
 $db=new mysqli("localhost","root","","basvurular");
 if($db->connect_error){
    die('Error'.(".$db->connect_errno.").$db->connect_error);
 }else{

    $dosya=$_FILES["pdfFile"]["tmp_name"];
            $yeniad=$_FILES["pdfFile"]["name"];
            $yol = "./img/".$yeniad;
            
            $dn="https://applications.reeder-op.com/img/".$yeniad;
            move_uploaded_file($dosya,$yol);

    $dosya2=$_FILES['fotoFile']['tmp_name'];
    $yeniad2=$_FILES['fotoFile']['name'];
    $yol2='./img/'.$yeniad2;
    $dn2="https://applications.reeder-op.com/img/".$yeniad2;
    move_uploaded_file($dosya2,$yol2);




$editNumber='';

$uzunluk = 6; // Oluşturulacak kodun uzunluğu


$harfler = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$rakamlar = '0123456789';
$karakterler = $harfler . $rakamlar;

for ($i = 0; $i < $uzunluk; $i++) {
    $index = rand(0, strlen($karakterler) - 1);
    $editNumber .= $karakterler[$index];
}

echo "<script>alert('Başvurunuz iletilmiştir. Başvuru Düzenleme Kodunuz: $editNumber');</script>";





    $sorgu4=$db->query("INSERT INTO basvurular (
        adSoyad, 
        adres, 
        gsm, 
        dogum, 
        dogumYeri, 
        ehliyet, 
        uyrug, 
        tckimlik, 
        okul, 
        bolum, 
        baslama1, 
        bitis1, 
        ort1, 
        okul2, 
        bolum2, 
        baslama2, 
        bitis2, 
        ort2, 
        okul3, 
        bolum3, 
        baslama3, 
        bitis3, 
        ort3, 
        okul4, 
        bolum4, 
        baslama4, 
        bitis4, 
        ort4, 
        dil, 
        word1, 
        excel1, 
        powerpoint1, 
        access1, 
        digerYetenekler, 
        digerAdSoyad, 
        referansFirma, 
        pozisyon1, 
        basvurulanBolum1, 
        isTecrubeleri1, 
        ilham1, 
        takim1, 
        stajBaslama, 
        stajBitis,
        file_name,
        file_img,
        editNumber,
        email
    ) VALUES (
        '{$_POST["adSoyad"]}', 
        '{$_POST["adres"]}', 
        '{$_POST["gsm"]}', 
        '{$_POST["dogum"]}', 
        '{$_POST["dogumYeri"]}', 
        '{$_POST["ehliyet"]}', 
        '{$_POST["uyrug"]}','{$_POST["tckimlik"]}', 
        '{$_POST["okul"]}', 
        '{$_POST["bolum"]}', 
        '{$_POST["baslama1"]}', 
        '{$_POST["bitis1"]}', 
        '{$_POST["ort1"]}', 
        '{$_POST["okul2"]}', 
        '{$_POST["bolum2"]}', 
        '{$_POST["baslama2"]}', 
        '{$_POST["bitis2"]}', 
        '{$_POST["ort2"]}', 
        '{$_POST["okul3"]}', 
        '{$_POST["bolum3"]}', 
        '{$_POST["baslama3"]}', 
        '{$_POST["bitis3"]}', 
        '{$_POST["ort3"]}', 
        '{$_POST["okul4"]}', 
        '{$_POST["bolum4"]}', 
        '{$_POST["baslama4"]}', 
        '{$_POST["bitis4"]}', 
        '{$_POST["ort4"]}', 
        '{$_POST["dil"]}', 
        '{$_POST["word1"]}', 
        '{$_POST["excel1"]}', 
        '{$_POST["powerpoint1"]}', 
        '{$_POST["access1"]}', 
        '{$_POST["digerYetenekler"]}', 
        '{$_POST["digerAdSoyad"]}', 
        '{$_POST["referansFirma"]}', 
        '{$_POST["pozisyon1"]}', 
        '{$_POST["basvurulanBolum1"]}', 
        '{$_POST["isTecrubeleri1"]}', 
        '{$_POST["ilham1"]}', 
        '{$_POST["takim1"]}', 
        '{$_POST["stajBaslama"]}', 
        '{$_POST["stajBitis"]}',
        '{$dn}',
        '{$dn2}',
        '{$editNumber}',
        '{$_POST["emaill"]}'
        )
    ");




$sorgu5=$db->query("INSERT INTO resorular (
    soru1, 
    soru2, 
    soru3, 
    soru4, 
    soru5, 
    soru6, 
    soru7, 
    soru8, 
    soru9, 
    soru10, 
    soru11, 
    soru12, 
    soru13, 
    soru14, 
    soru15, 
    soru16, 
    soru17, 
    soru18, 
    soru19, 
    soru20, 
    soru21, 
    soru22, 
    soru23, 
    adSoyad
) VALUES (
    '{$_POST["soru1"]}', 
    '{$_POST["soru2"]}', 
    '{$_POST["soru3"]}', 
    '{$_POST["soru4"]}', 
    '{$_POST["soru5"]}', 
    '{$_POST["soru6"]}', 
    '{$_POST["soru7"]}',
    '{$_POST["soru8"]}', 
    '{$_POST["soru9"]}', 
    '{$_POST["soru10"]}', 
    '{$_POST["soru11"]}', 
    '{$_POST["soru12"]}', 
    '{$_POST["soru13"]}', 
    '{$_POST["soru14"]}', 
    '{$_POST["soru15"]}', 
    '{$_POST["soru16"]}', 
    '{$_POST["soru17"]}', 
    '{$_POST["soru18"]}', 
    '{$_POST["soru19"]}', 
    '{$_POST["soru20"]}', 
    '{$_POST["soru21"]}', 
    '{$_POST["soru22"]}', 
    '{$_POST["soru23"]}', 
    '{$_POST["adSoyad"]}'
    )
");
    echo "<h2>Başvurunuz başarıyla iletilmiştir. İyi günler dileriz :)</h2>";

 }
}


session_abort();

?>