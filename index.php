<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>REEDER STAJ-İŞ BAŞVURU FORUMU</title>
    <style>
       #submitB {
    border: 1px solid white;
    border-radius: 10px;
    background-color: #141e30;
  }
  #submitB:hover{
    background-color: #6cd154;
    color: #141e30;
    cursor: pointer;
  }
    </style>
</head>
<body>
<div class="login-box">
  <h2 style="color: #6cd154;">STAJ-İŞ BAŞVURU FORMU</h2>
  <form action="http://applications.reeder-op.com/db.php" method="post" id="frm" style="overflow-y: auto; height: 500px; padding-top: 15px; padding-right: 20px;" class="scrollbar">
    <div class="user-box">
      <input type="text" name="adSoyad" required="">
      <label>Ad-Soyad</label>
    </div>
    <div class="user-box">
      <input type="text" name="adres" required="">
      <label>Adres</label>
    </div>
	<div class="user-box">
      <input type="text" name="gsm" required="">
      <label>GSM-Telefon Numarası</label>
    </div>
	<label style="color:white">Doğum Tarihi</label>
	<div class="user-box">
      <input type="date" name="dogum" required="">
      
    </div>
	<div class="user-box">
      <input type="text" name="dogumYeri" required="">
      <label>Doğum Yeri</label>
    </div>
	<label style="color: white;">Ehliyet</label><br><br>
	<select class="ehlyt" style="background-color: #141e30; color: white;" name='ehliyet'>
	<option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
  <option value="Yok">Yok</option>
	</select><br><br>
	<label style="color:white">Uyruğu</label><br><br>
	<input type="radio" name="uyrug" required="" id="tc">
      <label style="color: white;">TC</label>
	  <input type="radio" name="uyrug" required="" id="dg">
      <label style="color: white;">Diğer</label>
	  <br><br>
	<div class="user-box" id="tc1">
      <input type="text" name="tckimlik" required="">
      <label>TC</label>
    </div>
	<br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Lise</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul" required="" placeholder="Okul">
      <input type="text" name="bolum" required="" placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama1" required="" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis1" required="" placeholder="Bitiş">
	  <input type="text" name="ort1" required="" placeholder="Ortalama">
    </div><br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Ön Lisans</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul2" required="" placeholder="Okul">
      <input type="text" name="bolum2" required="" placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama2" required="" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis2" required="" placeholder="Bitiş">
	  <input type="text" name="ort2" required="" placeholder="Ortalama">
    </div><br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Lisans</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul3" required="" placeholder="Okul">
      <input type="text" name="bolum3" required="" placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama3" required="" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis3" required="" placeholder="Bitiş">
	  <input type="text" name="ort3" required="" placeholder="Ortalama">
    </div><br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Yüksek Lisans</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul4" required="" placeholder="Okul">
      <input type="text" name="bolum4" required="" placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama4" required="" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis4" required="" placeholder="Bitiş">
	  <input type="text" name="ort4" required="" placeholder="Ortalama">
    </div><br>
	<div class="user-box">
      <input type="text" name="dil" required="">
      <label>Yabancı Dil ve Seviyesi</label>
    </div>
	<br><label style="color: #6cd154;">Uygulama</label><br><br>
	
      <input type="checkbox" name="word1">
	  <label style="color: white;">Word</label><br>
	  <input type="checkbox" name="excel1">
	  <label style="color: white;">Excel</label><br>
	  <input type="checkbox" name="powerpoint1">
	  <label style="color: white;">Power Point</label><br>
	  <input type="checkbox" name="access1">
	  <label style="color: white;">Access</label><br><br>
      
	  <div class="user-box">
      <input type="text" name="digerYetenekler" required="">
      <label>Diğer Yetenekler</label>
    </div>
	<label style="color: #6cd154; text-decoration: underline;">Diğer</label><br><br>
	<div class="user-box">
      <input type="text" name="digerAdSoyad" required="">
      <label>Ad Soyad</label>
    </div>
	<div class="user-box">
      <input type="text" name="referansFirma" required="">
      <label>Referans Firma</label>
    </div><div class="user-box">
      <input type="text" name="pozisyon1" required="">
      <label>Pozisyon</label>
    </div>

	<label style="color: #6cd154; text-decoration: underline;">İş Başvurusu</label><br><br>
	<div class="user-box">
      <input type="text" name="basvurulanBolum1" required="">
      <label>Başvurulan Bölüm</label>
    </div>
	<div class="user-box">
      <input type="text" name="isTecrubeleri1" required="">
      <label>İş Tecrübeleri</label>
    </div><div class="user-box">
     <div> <input type="text" name="ilham1" required="">
      <label style="font-size: 12px;">İlham aldığınız bilim insanı/girişimcinin adı ve nedeni?</label>
    </div>
	<div class="user-box">
      <input type="text" name="takim1" required="">
      <label style="font-size: 12px;">Sizce bir takımın başarıya ulaşmasını sağlayan ögeler nelerdir?</label>
    </div><br>



	
	<div class="user-box">
	<p style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Staj Başvurusu</p><br>
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="stajBaslama" required="" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="stajBitis" required="" placeholder="Bitiş">
    </div><br>
	
     
  

    <!--<a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>-->
    <input type="submit" value="Gönder" id="submitB" name="btn1">
  </form>
</div>
<script>
	$(document).ready(function(){
    $("#tc1").css("display","none");
  });

  $("#tc").click(function(){
	$("#tc1").css("display","block");
  });
  $("#dg").click(function(){
	$("#tc1").css("display","none");
  });

</script>
</body>
</html>


