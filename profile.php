<?php
session_start();
if(isset($_POST['kydt'])){
  $bul=$_GET['bul'];
  $db=new mysqli("localhost","root","","basvurular");
  if($db->connect_error){
     die('Error'.(".$db->connect_errno.").$db->connect_error);
  }else{
    if(isset($_POST['adSoyadBtn2'])){
      if($_POST['adSoyadBtn2']!=''){
        $adSyoad2=$_POST['adSoyadBtn2'];
        $sorgu4=$db->query("update basvurular set adSoyad='$adSyoad2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['adres2'])){
      if($_POST['adres2']!=''){
        $adres2=$_POST['adres2'];
        $sorgu4=$db->query("update basvurular set adres='$adres2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['gsm2'])){
      if($_POST['gsm2']!=''){
        $gsm2=$_POST['gsm2'];
        $sorgu4=$db->query("update basvurular set gsm='$gsm2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['dogum2'])){
      if($_POST['dogum2']!=''){
        $dogum2=$_POST['dogum2'];
        $sorgu4=$db->query("update basvurular set dogum='$dogum2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['dogumYeri2'])){
      if($_POST['dogumYeri2']!=''){
        $dogumYeri2=$_POST['dogumYeri2'];
        $sorgu4=$db->query("update basvurular set dogumYeri='$dogumYeri2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['ehliyet2'])){
      if($_POST['ehliyet2']!=''){
        $ehliyet2=$_POST['ehliyet2'];
        $sorgu4=$db->query("update basvurular set ehliyet='$ehliyet2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['uyrug2'])){
      if($_POST['uyrug2']!=''){
        $uyrug2=$_POST['uyrug2'];
        $sorgu4=$db->query("update basvurular set uyrug='$uyrug2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['tc2'])){
      if($_POST['tc2']!=''){
        $tc2=$_POST['tc2'];
        $sorgu4=$db->query("update basvurular set tckimlik='$tc2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['okul22'])){
      if($_POST['okul22']!=''){
        $okul22=$_POST['okul22'];
        $sorgu4=$db->query("update basvurular set okul='$okul22' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bolum22'])){
      if($_POST['bolum22']!=''){
        $bolum22=$_POST['bolum22'];
        $sorgu4=$db->query("update basvurular set bolum='$bolum22' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['baslama22'])){
      if($_POST['baslama22']!=''){
        $baslama22=$_POST['baslama22'];
        $sorgu4=$db->query("update basvurular set baslama1='$baslama22' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bitis22'])){
      if($_POST['bitis22']!=''){
        $bitis22=$_POST['bitis22'];
        $sorgu4=$db->query("update basvurular set bitis1='$bitis22' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['ort22'])){
      if($_POST['ort22']!=''){
        $ort22=$_POST['ort22'];
        $sorgu4=$db->query("update basvurular set ort1='$ort22' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['okul33'])){
      if($_POST['okul33']!=''){
        $okul33=$_POST['okul33'];
        $sorgu4=$db->query("update basvurular set okul2='$okul33' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bolum33'])){
      if($_POST['bolum33']!=''){
        $bolum33=$_POST['bolum33'];
        $sorgu4=$db->query("update basvurular set bolum2='$bolum33' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['baslama33'])){
      if($_POST['baslama33']!=''){
        $baslama33=$_POST['baslama33'];
        $sorgu4=$db->query("update basvurular set baslama2='$baslama33' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bitis33'])){
      if($_POST['bitis33']!=''){
        $bitis33=$_POST['bitis33'];
        $sorgu4=$db->query("update basvurular set bitis2='$bitis33' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['ort33'])){
      if($_POST['ort33']!=''){
        $ort33=$_POST['ort33'];
        $sorgu4=$db->query("update basvurular set ort2='$ort33' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['okul44'])){
      if($_POST['okul44']!=''){
        $okul44=$_POST['okul44'];
        $sorgu4=$db->query("update basvurular set okul3='$okul44' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bolum44'])){
      if($_POST['bolum44']!=''){
        $bolum44=$_POST['bolum44'];
        $sorgu4=$db->query("update basvurular set bolum3='$bolum44' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['baslama44'])){
      if($_POST['baslama44']!=''){
        $baslama44=$_POST['baslama44'];
        $sorgu4=$db->query("update basvurular set baslama3='$baslama44' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bitis44'])){
      if($_POST['bitis44']!=''){
        $bitis44=$_POST['bitis44'];
        $sorgu4=$db->query("update basvurular set bitis3='$bitis44' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['ort44'])){
      if($_POST['ort44']!=''){
        $ort44=$_POST['ort44'];
        $sorgu4=$db->query("update basvurular set ort3='$ort44' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['okul55'])){
      if($_POST['okul55']!=''){
        $okul55=$_POST['okul55'];
        $sorgu4=$db->query("update basvurular set okul4='$okul55' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bolum55'])){
      if($_POST['bolum55']!=''){
        $bolum55=$_POST['bolum55'];
        $sorgu4=$db->query("update basvurular set bolum4='$bolum55' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['baslama55'])){
      if($_POST['baslama55']!=''){
        $baslama55=$_POST['baslama55'];
        $sorgu4=$db->query("update basvurular set baslama4='$baslama55' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['bitis55'])){
      if($_POST['bitis55']!=''){
        $bitis55=$_POST['bitis55'];
        $sorgu4=$db->query("update basvurular set bitis4='$bitis55' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['ort55'])){
      if($_POST['ort55']!=''){
        $ort55=$_POST['ort55'];
        $sorgu4=$db->query("update basvurular set ort4='$ort55' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['dil2'])){
      if($_POST['dil2']!=''){
        $dil2=$_POST['dil2'];
        $sorgu4=$db->query("update basvurular set dil='$dil2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['word2'])){
      if($_POST['word2']!=''){
        $word2=$_POST['word2'];
        $sorgu4=$db->query("update basvurular set word1='$word2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['excel2'])){
      if($_POST['excel2']!=''){
        $excel2=$_POST['excel2'];
        $sorgu4=$db->query("update basvurular set excel1='$excel2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['powerpoint2'])){
      if($_POST['powerpoint2']!=''){
        $powerpoint2=$_POST['powerpoint2'];
        $sorgu4=$db->query("update basvurular set powerpoint1='$powerpoint2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['access2'])){
      if($_POST['access2']!=''){
        $access2=$_POST['access2'];
        $sorgu4=$db->query("update basvurular set access1='$access2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['digerYetenekler2'])){
      if($_POST['digerYetenekler2']!=''){
        $digerYetenekler2=$_POST['digerYetenekler2'];
        $sorgu4=$db->query("update basvurular set digerYetenekler='$digerYetenekler2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['digerAdSoyad2'])){
      if($_POST['digerAdSoyad2']!=''){
        $digerAdSoyad2=$_POST['digerAdSoyad2'];
        $sorgu4=$db->query("update basvurular set digerAdSoyad='$digerAdSoyad2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['referansFirma2'])){
      if($_POST['referansFirma2']!=''){
        $referansFirma2=$_POST['referansFirma2'];
        $sorgu4=$db->query("update basvurular set referansFirma='$referansFirma2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['pozisyon2'])){
      if($_POST['pozisyon2']!=''){
        $pozisyon2=$_POST['pozisyon2'];
        $sorgu4=$db->query("update basvurular set pozisyon1='$pozisyon2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['basvurulanBolum2'])){
      if($_POST['basvurulanBolum2']!=''){
        $basvurulanBolum2=$_POST['basvurulanBolum2'];
        $sorgu4=$db->query("update basvurular set basvurulanBolum1='$basvurulanBolum2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['isTecrubeleri2'])){
      if($_POST['isTecrubeleri2']!=''){
        $isTecrubeleri2=$_POST['isTecrubeleri2'];
        $sorgu4=$db->query("update basvurular set isTecrubeleri1='$isTecrubeleri2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['ilham2'])){
      if($_POST['ilham2']!=''){
        $ilham2=$_POST['ilham2'];
        $sorgu4=$db->query("update basvurular set ilham1='$ilham2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['takim2'])){
      if($_POST['takim2']!=''){
        $takim2=$_POST['takim2'];
        $sorgu4=$db->query("update basvurular set takim1='$takim2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['stajBaslama2'])){
      if($_POST['stajBaslama2']!=''){
        $stajBaslama2=$_POST['stajBaslama2'];
        $sorgu4=$db->query("update basvurular set stajBaslama='$stajBaslama2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['stajBitis2'])){
      if($_POST['stajBitis2']!=''){
        $stajBitis2=$_POST['stajBitis2'];
        $sorgu4=$db->query("update basvurular set stajBitis='$stajBitis2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['onay2'])){
      if($_POST['onay2']!=''){
        $onay2=$_POST['onay2'];
        $sorgu4=$db->query("update basvurular set onay='$onay2' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru11'])){
      if($_POST['soru11']!=''){
        $soru11=$_POST['soru11'];
        $sorgu4=$db->query("update resorular set soru1='$soru11' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru22'])){
      if($_POST['soru22']!=''){
        $soru22=$_POST['soru22'];
        $sorgu4=$db->query("update resorular set soru2='$soru22' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru33'])){
      if($_POST['soru33']!=''){
        $soru33=$_POST['soru33'];
        $sorgu4=$db->query("update resorular set soru3='$soru33' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru44'])){
      if($_POST['soru44']!=''){
        $soru44=$_POST['soru44'];
        $sorgu4=$db->query("update resorular set soru4='$soru44' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru55'])){
      if($_POST['soru55']!=''){
        $soru55=$_POST['soru55'];
        $sorgu4=$db->query("update resorular set soru5='$soru55' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru66'])){
      if($_POST['soru66']!=''){
        $soru66=$_POST['soru66'];
        $sorgu4=$db->query("update resorular set soru6='$soru66' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru77'])){
      if($_POST['soru77']!=''){
        $soru77=$_POST['soru77'];
        $sorgu4=$db->query("update resorular set soru7='$soru77' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru88'])){
      if($_POST['soru88']!=''){
        $soru88=$_POST['soru88'];
        $sorgu4=$db->query("update resorular set soru8='$soru88' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru99'])){
      if($_POST['soru99']!=''){
        $soru99=$_POST['soru99'];
        $sorgu4=$db->query("update resorular set soru9='$soru99' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru100'])){
      if($_POST['soru100']!=''){
        $soru100=$_POST['soru100'];
        $sorgu4=$db->query("update resorular set soru10='$soru100' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru111'])){
      if($_POST['soru111']!=''){
        $soru111=$_POST['soru111'];
        $sorgu4=$db->query("update resorular set soru11='$soru111' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru122'])){
      if($_POST['soru122']!=''){
        $soru122=$_POST['soru122'];
        $sorgu4=$db->query("update resorular set soru12='$soru122' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru133'])){
      if($_POST['soru133']!=''){
        $soru133=$_POST['soru133'];
        $sorgu4=$db->query("update resorular set soru13='$soru133' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru144'])){
      if($_POST['soru144']!=''){
        $soru144=$_POST['soru144'];
        $sorgu4=$db->query("update resorular set soru14='$soru144' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru155'])){
      if($_POST['soru155']!=''){
        $soru155=$_POST['soru155'];
        $sorgu4=$db->query("update resorular set soru15='$soru155' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru166'])){
      if($_POST['soru166']!=''){
        $soru166=$_POST['soru166'];
        $sorgu4=$db->query("update resorular set soru16='$soru166' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru177'])){
      if($_POST['soru177']!=''){
        $soru177=$_POST['soru177'];
        $sorgu4=$db->query("update resorular set soru17='$soru177' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru188'])){
      if($_POST['soru188']!=''){
        $soru188=$_POST['soru188'];
        $sorgu4=$db->query("update resorular set soru18='$soru188' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['199'])){
      if($_POST['199']!=''){
        $soru199=$_POST['soru199'];
        $sorgu4=$db->query("update resorular set soru19='$soru199' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru200'])){
      if($_POST['soru200']!=''){
        $soru200=$_POST['soru200'];
        $sorgu4=$db->query("update resorular set soru20='$soru200' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru211'])){
      if($_POST['soru211']!=''){
        $soru211=$_POST['soru211'];
        $sorgu4=$db->query("update resorular set soru21='$soru211' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru222'])){
      if($_POST['soru222']!=''){
        $soru222=$_POST['soru222'];
        $sorgu4=$db->query("update resorular set soru22='$soru222' where adSoyad='$bul'");
      }
    }
    if(isset($_POST['soru233'])){
      if($_POST['soru233']!=''){
        $soru233=$_POST['soru233'];
        $sorgu4=$db->query("update resorular set soru23='$soru233' where adSoyad='$bul'");
      }
    }
  }

}

if(isset($_POST['cvkydt'])){
  $bul=$_GET['bul'];
  $db=new mysqli("localhost","root","","basvurular");
  if($db->connect_error){
     die('Error'.(".$db->connect_errno.").$db->connect_error);
  }else{
  $dosya=$_FILES["cvFile2"]["tmp_name"];
  $yeniad=$_FILES["cvFile2"]["name"];
  $yol = "./img/".$yeniad;
  
  $dn="https://applications.reeder-op.com/img/".$yeniad;
  move_uploaded_file($dosya,$yol);


  $sorgu4=$db->query("update basvurular set file_name='$dn' where adSoyad='$bul'");
}
}
if(isset($_POST['testkydt'])){
  $bul=$_GET['bul'];
  $db=new mysqli("localhost","root","","basvurular");
  if($db->connect_error){
     die('Error'.(".$db->connect_errno.").$db->connect_error);
  }else{

    $dosya2=$_FILES['testFile2']['tmp_name'];
    $yeniad2=$_FILES['testFile2']['name'];
    $yol2='./img/'.$yeniad2;
    $dn2="https://applications.reeder-op.com/img/".$yeniad2;
    move_uploaded_file($dosya2,$yol2);

    $sorgu4=$db->query("update basvurular set test_file='$dn2' where adSoyad='$bul'");


    }
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Taşmayan Tablo</title>
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body{
      background-image: url('https://applications.reeder-op.com/img/18240979_v748-toon-103.jpg');
    object-fit:cover;
    background-repeat: no-repeat;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      box-shadow:1px 1px 10px;
      background-color:white;
    }

    th, td {
      text-align: left;
      padding: 8px;
      border: 1px solid black;
      
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    th{
        background-color:darkslategrey;
        color:white;
        text-decoration: underline;
    }
    .profile-pic {
      text-align: center;
    }

    .profile-pic img {
      width: 20%;
      object-fit: fill;
      border-radius:20px;
      box-shadow:1px 1px 10px;
      margin-bottom:15px;
    }
    .edtBtn:hover{
        cursor:pointer;
     transition: .5s;
     color:white;
     background-color: darkslategrey;
    }


    @media (max-width: 600px) {
      th, td {
        display: block;
        width: 100%;
      }
    }
  </style>

</head>
<body>
<div class="profile-pic">
    
    <?php
    $db=new mysqli("localhost","root","","basvurular");$isim_deger=0;
    if($db->connect_error){
    die('Error'.('.$db->connect_errno.').$db->connect_error);
    }else{
       if(isset($_GET['bul'])){
           $bul=$_GET['bul'];
           $sorgu4=$db->query("select * from basvurular where adSoyad='$bul'");
                    
           if($sorgu4->num_rows>0){
               while($row=$sorgu4->fetch_assoc()){
                $adSoyad = $row['adSoyad'];
                $resim=$row['file_img'];
                $cv=$row['file_name'];
           
               } 
               echo "<img src='$resim' alt='Profil Fotoğrafı'>";
            }
        }
    }
    
    ?>
    <div style='width:100%;display:flex;justify-content:center;margin-bottom:15px;'><button class='edtBtn' onclick="gizle()" style='display:block;padding:10px;border-radius:10px;border:1px solid black;'><i class="fa-solid fa-pen-to-square" style='margin-right:5px;'></i>Başvuru Düzenle</div>

</button>
  </div>

  <table>
  <?php
 $db=new mysqli("localhost","root","","basvurular");$isim_deger=0;
 if($db->connect_error){
 die('Error'.('.$db->connect_errno.').$db->connect_error);
 }else{
    if(isset($_GET['bul'])){
        $bul=$_GET['bul'];
        $sorgu4=$db->query("select * from basvurular where adSoyad='$bul'");
                 
        if($sorgu4->num_rows>0){
            while($row=$sorgu4->fetch_assoc()){
             $adSoyad = $row['adSoyad'];
             $adres = $row['adres'];
             $gsm = $row['gsm'];
             $dogum = $row['dogum'];
             $dogumYeri = $row['dogumYeri'];
             $ehliyet = $row['ehliyet'];
             $uyrug = $row['uyrug'];
             $tckimlik = $row['tckimlik'];
             $okul = $row['okul'];
             $bolum = $row['bolum'];
             $baslama1 = $row['baslama1'];
             $bitis1 = $row['bitis1'];
             $ort1 = $row['ort1'];
             $okul2 = $row['okul2'];
             $bolum2 = $row['bolum2'];
             $baslama2 = $row['baslama2'];
             $bitis2 = $row['bitis2'];
             $ort2 = $row['ort2'];
             $okul3 = $row['okul3'];
             $bolum3 = $row['bolum3'];
             $baslama3 = $row['baslama3'];
             $bitis3 = $row['bitis3'];
             $ort3 = $row['ort3'];
             $okul4 = $row['okul4'];
             $bolum4 = $row['bolum4'];
             $baslama4 = $row['baslama4'];
             $bitis4 = $row['bitis4'];
             $ort4 = $row['ort4'];
             $dil = $row['dil'];
             $word1 = $row['word1'];
             $excel1 = $row['excel1'];
             $powerpoint1 = $row['powerpoint1'];
             $access1 = $row['access1'];
             $digerYetenekler = $row['digerYetenekler'];
             $digerAdSoyad = $row['digerAdSoyad'];
             $referansFirma = $row['referansFirma'];
             $pozisyon1 = $row['pozisyon1'];
             $basvurulanBolum1 = $row['basvurulanBolum1'];
             $isTecrubeleri1 = $row['isTecrubeleri1'];
             $ilham1 = $row['ilham1'];
             $takim1 = $row['takim1'];
             $stajBaslama = $row['stajBaslama'];
             $stajBitis = $row['stajBitis'];
             $onay=$row['onay'];
             $refNum=$row['editNumber'];
            } 
            echo " <tr>
            <th>Ad Soyad:</th>
        <th>Adres:</th>
        <th>GSM:</th>
        <th>Doğum Tarihi:</th>
            </tr>
            <tr>
              <td>$adSoyad</td>
              <td>$adres</td>
              <td>$gsm</td>
              <td>$dogum</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='adSoyadBtn2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='adres2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='gsm2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='dogum2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Doğum Yeri:</th>
        <th>Ehliyet:</th>
        <th>Uyruğu:</th>
        <th>TC Kimlik:</th>
            </tr>
            <tr>
              <td>$dogumYeri</td>
              <td>$ehliyet</td>
              <td>$uyrug</td>
              <td>$tckimlik</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='dogumYeri2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='ehliyet2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='uyrug2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='tc2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            
        <th>Lise:</th>
        <th>Bölüm:</th>
        <th>Başlama - Bitiş Yılı:</th>
        <th>Ortalama:</th>
            </tr>
            <tr>
              <td>$okul</td>
              <td>$bolum</td>
              <td>$baslama1 / $bitis1</td>
              <td>$ort1</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='okul22'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='bolum22'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='baslama22' placeholder='Başlama Tarihi'><input type='submit' name='kydt' value='Kaydet'><input type='text' name='bitis22' placeholder='Bitiş Tarihi'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='ort22'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            
        <th>Ön Lisans:</th>
        <th>Bölüm:</th>
        <th>Başlama - Bitiş Yılı:</th>
        <th>Ortalama:</th>
            </tr>
            <tr>
            <td>$okul2</td>
            <td>$bolum2</td>
            <td>$baslama2 / $bitis2</td>
            <td>$ort2</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='okul33'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='bolum33'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='baslama33' placeholder='Başlama Tarihi'><input type='submit' name='kydt' value='Kaydet'><input type='text' name='bitis33' placeholder='Bitiş Tarihi'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='ort33'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Lisans:</th>
        <th>Bölüm:</th>
        <th>Başlama - Bitiş Yılı:</th>
        <th>Ortalama:</th>
            </tr>
            <tr>
            <td>$okul3</td>
            <td>$bolum3</td>
            <td>$baslama3 / $bitis3</td>
            <td>$ort3</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='okul44'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='bolum44'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='baslama44' placeholder='Başlama Tarihi'><input type='submit' name='kydt' value='Kaydet'><input type='text' name='bitis44' placeholder='Bitiş Tarihi'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='ort44'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Yüksek Lisans:</th>
        <th>Bölüm:</th>
        <th>Başlama - Bitiş Yılı:</th>
        <th>Ortalama:</th>
            </tr>
            <tr>
            <td>$okul4</td>
            <td>$bolum4</td>
            <td>$baslama4 / $bitis4</td>
            <td>$ort4</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='okul55'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='bolum55'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='baslama55' placeholder='Başlama Tarihi'><input type='submit' name='kydt' value='Kaydet'><input type='text' name='bitis55' placeholder='Bitiş Tarihi'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='ort55'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Dil Bilgisi:</th>
        <th>Word</th>
          <th>Excel</th>
          <th>PowerPoint</th>
            </tr>
            <tr>
            <td>$dil</td>
            <td>$word1</td>
            <td>$excel1</td>
            <td> $powerpoint1</td>
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='dil2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='word2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='excel2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='powerpoint2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Access</th>
          <th>Diğer Yetenekler</th>
          <th>Ad Soyad</th>
          <th>Referans Firma</th>
            </tr>
            <tr>
            <td>$access1</td>
            <td>$digerYetenekler</td>
            <td>$digerAdSoyad</td>
            <td>$referansFirma</td>
            
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='access2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='digerYetenekler2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='digerAdSoyad2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='referansFirma2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Pozisyon</th>
          <th>Başvurulan Bölüm</th>
          <th>İş Tecrübeleri</th>
          <th>İlham aldığınız bilim insanı/girişimci</th>
            </tr>
            <tr>
            <td>$pozisyon1</td>
            <td>$basvurulanBolum1</td>
            <td>$isTecrubeleri1</td>
            <td>$ilham1</td>
            
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='pozisyon2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='basvurulanBolum2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='isTecrubeleri2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='ilham2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
            <tr>
            <th>Sizce bir takımın başarıya ulaşmasını sağlayan ögeler nelerdir</th>
          <th>Staj Başlama Tarihi</th>
          <th>Staj Bitiş Tarihi</th>
          <th>Onay Durumu</th>
            </tr>
            <tr>
            <td>$takim1</td>
            <td>$stajBaslama</td>
            <td>$stajBitis</td>
            <td>$onay</td>
            
            </tr>
            <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='takim2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='stajBaslama2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='stajbitis2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='onay2'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
        
            ";
        }

        $sorgu5=$db->query("select * from resorular where adSoyad='$bul'");

        if($sorgu5->num_rows>0){
            while($row=$sorgu5->fetch_assoc()){
                $adSoyad = $row['adSoyad'];
                $soru1 = $row['soru1'];
                $soru2 = $row['soru2'];
                $soru3 = $row['soru3'];
                $soru4 = $row['soru4'];
                $soru5 = $row['soru5'];
                $soru6 = $row['soru6'];
                $soru7 = $row['soru7'];
                $soru8 = $row['soru8'];
                $soru9 = $row['soru9'];
                $soru10 = $row['soru10'];
                $soru11 = $row['soru11'];
                $soru12 = $row['soru12'];
                $soru13 = $row['soru13'];
                $soru14 = $row['soru14'];
                $soru15 = $row['soru15'];
                $soru16 = $row['soru16'];
                $soru17 = $row['soru17'];
                $soru18 = $row['soru18'];
                $soru19 = $row['soru19'];
                $soru20 = $row['soru20'];
                $soru21 = $row['soru21'];
                $soru22 = $row['soru22'];
                $soru23 = $row['soru23'];
            }
            if($soru15=='A')
                $soru15='Yetenekleri ve meslekleri aynı olan birkaç kişi';
            else if($soru15=='B')
                $soru15='Yetenekleri farklı, birbirini tamamlayan birkaç kişi';
            else
                $soru15='Çok yetenekli bir kişi tarafından yönetilen birkaç kişi';


            if($soru17=='A'){
                $soru17='Reeder da çalışıyor olmam beni geliştirir';
            }
            else if($soru17=='B')
                $soru17='Reeder da çalışıyor olmam Reeder ı geliştirir';

                if($soru18=='A'){
                    $soru18='Ortalama maaş, kendimi geliştirebileceğim iş ortamı';
                }
                else if($soru18=='B')
                    $soru18='Ortalamanın üstünde maaş, rutin iş sorumluluğu';




                    if($soru21=='A'){
                        $soru21='Mesaim, o günkü işlerim bittiğinde biter';
                    }
                    else if($soru21=='B')
                        $soru21='Mesaim, mesai saati bittiğinde biter';

                        

            echo "<tr>
            <th>Şu anda çalışıyor musunuz?</th>
            <th>İş tecrübeniz 5 yıldan fazla mı?</th>
            <th>İşkolik misiniz?</th>
            <th>Tam bir takım oyuncusuyum der misiniz?</th>
          </tr>
          <tr>
          <td>$soru1</td>
          <td>$soru2</td>
          <td>$soru3</td>
          <td>$soru4</td>
          
          </tr>
          <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='soru11'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru22'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru33'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru44'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
          <tr>
            <th>Mücadeleyi sever misiniz?</th>
            <th>Okulumda bana inek derlerdi der misiniz?</th>
            <th>Okulda haylaz mı bilinirdiniz?</th>
            <th>Hep bir numara olmayı hedeflerim der misiniz?</th>
          </tr>
          <tr>
          <td>$soru5</td>
          <td>$soru6</td>
          <td>$soru7</td>
          <td>$soru8</td>
          
          </tr>
          <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='soru55'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru66'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru77'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru88'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
          <tr>
            <th>Ne az ne çok her şeyin ortası bana yeter der misiniz?</th>
            <th>Sevdiğiniz şeyde fanatik misiniz?</th>
            <th>Bir buluşmaya ilk ben gelirim der misiniz?</th>
             <th>Rahat bir insan mısınız?</th>
          </tr>
          <tr>
          <td>$soru9</td>
          <td>$soru10</td>
          <td>$soru11</td>
          <td>$soru12</td>
          
          </tr>
          <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='soru99'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru100'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru111'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru122'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
          <tr>
            <th>Çok pimpirikli misiniz?</th>
            <th>Sigara kullanıyor musunuz?</th>
            <th>Sizce hangisi diğerlerinden daha iyi bir takım çalışmasına sahiptir?</th>
            <th>Reeder da çalışmaya can atıyorum der misiniz?</th>
          </tr>
          <tr>
          <td>$soru13</td>
          <td>$soru14</td>
          <td>$soru15</td>
          <td>$soru16</td>
          
          </tr>
          <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='soru133'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru144'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru155'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru166'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
          <tr>
            <th>Hangisi size daha uygundur?</th>
            <th>Hangisi size daha uygundur?</th>
            <th>2+2x5-1 işleminin sonucu kaçtır?</th>
            <th>Hayranlık duyduğunuz bir bilim insanının adını yazar mısınız?</th>
          </tr>
          
          <tr>
          <td>$soru17</td>
          <td>$soru18</td>
          <td>$soru19</td>
          <td>$soru20</td>
          
          </tr>
          <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='soru177'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru188'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru199'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru200'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
          <tr>
            <th>Hangisi size daha uygundur?</th>
            <th>Diyelim ki Reeder da 10 yıldan uzun süredir çalışıyorsun hangi pozisyonda olurdun?</th>
            <th>Başvurduğunuz pozisyon nedir?</th>
            <th>Düzenleme referans numarası</th>
          </tr>
          <tr>
          <td>$soru21</td>
          <td>$soru22</td>
          <td>$soru23</td>
          <td>$refNum</td>
          
          </tr>
          <tr class='edtFrm'>
            <td><form action='' method='post'><input type='text' name='soru211'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru222'><input type='submit' name='kydt' value='Kaydet'></form></td>
            <td><form action='' method='post'><input type='text' name='soru233'><input type='submit' name='kydt' value='Kaydet'></form></td>
            </tr>
          ";
        }

    }
 }

?>    
  </table>
  <?php
    $db=new mysqli("localhost","root","","basvurular");$isim_deger=0;
    if($db->connect_error){
    die('Error'.('.$db->connect_errno.').$db->connect_error);
    }else{
       if(isset($_GET['bul'])){
           $bul=$_GET['bul'];
           $sorgu4=$db->query("select * from basvurular where adSoyad='$bul'");
                    
           if($sorgu4->num_rows>0){
               while($row=$sorgu4->fetch_assoc()){
                $adSoyad = $row['adSoyad'];
                $resim=$row['file_img'];
                $cv=$row['file_name'];
                $test_file=$row['test_file'];
           
               } 
               echo "<div style='display:flex;justify-content:center;'><h1>ÖZGEÇMİŞ</h1></div>";
               echo "<div style='display:flex;justify-content:center;margin-bottom:20px;margin-top:20px;'><iframe src='$cv' width='900' height='780' style='border: none;' allowfullscreen webkitallowfullscreen></iframe></div><form action='' class='edtFrm' method='post' enctype='multipart/form-data'><div style='width:100%;text-align:center;'><p style='text-decoration: underline; font-weight: bolder;'>CV Yükle</p><input type='file' name='cvFile2'><input type='submit' name='cvkydt' value='Kaydet'></div></form>
               ";
              echo '<hr>';
              echo "<div style='display:flex;justify-content:center;'><h1>TEST SONUCU</h1></div>";

               echo "<div style='display:flex;justify-content:center;'><iframe src='$test_file' width='900' height='780' style='border: none;' allowfullscreen webkitallowfullscreen></iframe></div><form action='' class='edtFrm' method='post' enctype='multipart/form-data'><div style='width:100%;text-align:center;'><p style='text-decoration: underline; font-weight: bolder;'>Test Sonucu Yükle</p><input type='file' name='testFile2'><input type='submit' name='testkydt' value='Kaydet'></div></form>";

            }
        }
    }
    
    ?>
    <script>
  $(document).ready(function() {
   
    $('.edtFrm').hide();var say1=1;
    $('.edtBtn').click(function() {
    if(say1%2==0){
      $('.edtFrm').hide();
    }else
    $('.edtFrm').show();
    say1++;
  });
  
});


</script>
</body>
</html>



