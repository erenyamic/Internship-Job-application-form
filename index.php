<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/icon/favicon.ico">
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
  .custom-file-input::before {
        content: "Dosya Seç";
        display: inline-block;
        background: #ddd;
        padding: 8px 12px;
        cursor: pointer;
    }

    </style>
</head>
<body>
<div class="login-box">
  <h2 style="color: #6cd154;">STAJ-İŞ BAŞVURU FORMU</h2>
  <form action="https://applications.reeder-op.com/db.php" method="post" id="frm" style="overflow-y: auto; height: 500px; padding-top: 15px; padding-right: 20px;" class="scrollbar" enctype="multipart/form-data">
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
    <div class="user-box">
      <input type="text" name="emaill" required="">
      <label>E-posta</label>
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
	<input type="radio" name="uyrug" value='TC' required="" id="tc">
      <label style="color: white;">TC</label>
	  <input type="radio" name="uyrug" value="Diğer" required="" id="dg">
      <label style="color: white;">Diğer</label>
	  <br><br>
	<div class="user-box" id="tc1">
      <input type="text" name="tckimlik">
      <label>TC</label>
    </div>
	<br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Lise</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul"  placeholder="Okul">
      <input type="text" name="bolum"  placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama1"  placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis1"  placeholder="Bitiş">
	  <input type="text" name="ort1"  placeholder="Ortalama">
    </div><br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Ön Lisans</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul2"  placeholder="Okul">
      <input type="text" name="bolum2"  placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama2" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis2"  placeholder="Bitiş">
	  <input type="text" name="ort2"  placeholder="Ortalama">
    </div><br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Lisans</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul3"  placeholder="Okul">
      <input type="text" name="bolum3"  placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama3" placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis3"  placeholder="Bitiş">
	  <input type="text" name="ort3"  placeholder="Ortalama">
    </div><br>
	<label style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Yüksek Lisans</label><br>
	<div class="user-box" id="tc1">
      <input type="text" name="okul4"  placeholder="Okul">
      <input type="text" name="bolum4"  placeholder="Bölüm">
	  
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="baslama4"  placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="bitis4" placeholder="Bitiş">
	  <input type="text" name="ort4"  placeholder="Ortalama">
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
      <input type="text" name="digerYetenekler" >
      <label>Diğer Yetenekler</label>
    </div>
	<label style="color: #6cd154; text-decoration: underline;">Diğer</label><br><br>
	<div class="user-box">
      <input type="text" name="digerAdSoyad" >
      <label>Ad Soyad</label>
    </div>
	<div class="user-box">
      <input type="text" name="referansFirma" >
      <label>Referans Firma</label>
    </div><div class="user-box">
      <input type="text" name="pozisyon1" >
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
     <div> <input type="text" name="ilham1">
      <label style="font-size: 12px;">İlham aldığınız bilim insanı/girişimcinin adı ve nedeni?</label>
    </div>
	<div class="user-box">
      <input type="text" name="takim1" >
      <label style="font-size: 12px;">Sizce bir takımın başarıya ulaşmasını sağlayan ögeler nelerdir?</label>
    </div><br>



	
	<div class="user-box">
	<p style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Staj Başvurusu</p><br>
	<p style="color: white;">Başlama Tarihi</p>
	  <input type="date" name="stajBaslama"  placeholder="Başlama">
	  
	<p style="color: white;">Bitiş Tarihi</p>
	  <input type="date" name="stajBitis"  placeholder="Bitiş">
    </div><br>
	
     
  

    <!--<a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>-->
    <div><p style="color: #6cd154; text-decoration: underline; font-weight: bolder;">CV Yükle</p><input type='file' name='pdfFile' accept='.pdf'></div>
    <div><p style="color: #6cd154; text-decoration: underline; font-weight: bolder;">Fotoğraf Yükle</p><input type='file' name='fotoFile'></div>
    <h3 style='color:#6cd154;'>Reeder Sorular</h3>
<ul style="list-style:decimal;">
  
  <li style='color:white;'>Şu anda çalışıyor musunuz?<br><div>Evet<input type='radio' name="soru1" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru1" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>İş tecrübeniz 5 yıldan fazla mı?<br><div>Evet<input type='radio' name="soru2" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru2" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>İşkolik misiniz?<br><div>Evet<input type='radio' name="soru3" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru3" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>'Tam bir takım oyuncusuyum.' der misiniz?<br><div>Evet<input type='radio' name="soru4" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru4" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Mücadeleyi sever misiniz?<br><div>Evet<input type='radio' name="soru5" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru5" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>'Okulumda bana inek derlerdi.' der misiniz?<br><div>Evet<input type='radio' name="soru6" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru6" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Okulda haylaz mı bilinirdiniz?<br><div>Evet<input type='radio' name="soru7" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru7" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>'Hep bir numara olmayı hedeflerim.' der misiniz?<br><div>Evet<input type='radio' name="soru8" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru8" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>'Ne az ne çok, her şeyin ortası bana yeter.' der misiniz?<br><div>Evet<input type='radio' name="soru9" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru9" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Sevdiğiniz şeyde fanatik misiniz?<br><div>Evet<input type='radio' name="soru10" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru10" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>'Bir buluşmaya ilk ben gelirim.' der misiniz?<br><div>Evet<input type='radio' name="soru11" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru11" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Rahat bir insan mısınız?<br><div>Evet<input type='radio' name="soru12" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru12" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Çok pimpirikli misiniz?<br><div>Evet<input type='radio' name="soru13" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru13" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Sigara kullanıyor musunuz?<br><div>Evet<input type='radio' name="soru14" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru14" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Sizce hangisi diğerlerinden daha iyi bir takım çalışmasına sahiptir?<br><select class="ehlyt" style="background-color: #141e30; color: white;margin-bottom:15px;" name='soru15'>
	<option value="A">Yetenekleri ve meslekleri aynı olan birkaç kişi.</option>
  <option value="B">Yetenekleri farklı, birbirini tamamlayan birkaç kişi.</option>
  <option value="C">Çok yetenekli bir kişi tarafından yönetilen birkaç kişi.</option>
	</select></li>
  <li style='color:white;'>'Reeder'da çalışmaya can atıyorum.' der misiniz?<br><div>Evet<input type='radio' name="soru16" value='Evet' style='width:15px;'>Hayır<input type='radio' name="soru16" value='Hayır' style='width:15px;'></div></li>
  <li style='color:white;'>Hangisi size daha uygundur?<br><select class="ehlyt" style="background-color: #141e30; color: white;margin-bottom:15px;" name='soru17'>
	<option value="A">Reeder'da çalışıyor olmam beni geliştirir.</option>
  <option value="B">Reeder'da çalışıyor olmam Reeder'ı geliştirir</option>
	</select></li>
  <li style='color:white;'>Hangisi size daha uygundur?<br><select class="ehlyt" style="background-color: #141e30; color: white;margin-bottom:15px;" name='soru18'>
	<option value="A">Ortalama maaş, kendimi geliştirebileceğim iş ortamı</option>
  <option value="B">Ortalamanın üstünde maaş, rutin iş sorumluluğu</option>
	</select></li>
  <li style='color:white;'>2+2x5-1 işleminin sonucu kaçtır?<br><div><input type='text' name="soru19" placeholder="Sonuç"></div></li>
  <li style='color:white;'>Hayranlık duyduğunuz bir bilim insanının adını yazar mısınız?<br><div><input type='text' name="soru20" placeholder="Buraya yazın"></div></li>
  <li style='color:white;'>Hangisi size daha uygundur?<br><select class="ehlyt" style="background-color: #141e30; color: white;margin-bottom:15px;" name='soru21'>
	<option value="A">Mesaim, o günkü işlerim bittiğinde biter.</option>
  <option value="B">Mesaim, mesai saati bittiğinde biter.</option>
	</select></li>
  <li style='color:white;'>Diyelim ki Reeder'da 10 yıldan uzun süredir çalışıyorsun, hangi pozisyonda olurdun?<br><div><input type='text' name="soru22" placeholder="Pozisyon"></div></li>
  <li style='color:white;'>Başvurduğunuz pozisyon nedir?<br><div><input type='text' name="soru23" placeholder="Başvurulan Pozisyon"></div></li>


</ul>
    <input type="submit" value="Gönder" id="submitB" name="btn1">
  </form>
  <form action='https://applications.reeder-op.com/session1.php' method='post'><p style='color:white;'>Başvuru Düzenle</p><input type='text' name='duzenleBasvuru' placeholder='Düzenleme Numarası Gir'><input type='submit' name='duzenleBtn' value='Düzenle' id='submitB'></form>
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


