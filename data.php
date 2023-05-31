<?php

if(isset($_POST["onayBtn"])){
    session_start();
    if($_POST["bul"]!=null){
        $db=new mysqli("localhost","root","","basvurular");
        if($db->connect_error){
            die('Error'.(".$db->connect_errno.").$db->connect_error);
         }else{
            $sorgu3=$db->query("SET NAMES UTF8");
            $ony=$_POST["bul"];
            $sorgu=$db->query("update basvurular set onay='Onaylandı' where adSoyad='$ony'");

         }
        
            
    }
    
}else if(isset($_POST["onaylananBasvurular"])||isset($_POST["reddedilenBasvurular"])||isset($_POST["bekleyenBasvurular"])||isset($_POST["tum"])||isset($_POST["src"])){
    session_start();
}
else if(isset($_POST["reddetBtn"])){
    session_start();
    if($_POST["bul"]!=null){
        $db=new mysqli("localhost","root","","basvurular");
        if($db->connect_error){
            die('Error'.(".$db->connect_errno.").$db->connect_error);
         }else{
            $sorgu3=$db->query("SET NAMES UTF8");
            $ony=$_POST["bul"];
            $sorgu=$db->query("update basvurular set onay='Reddedildi' where adSoyad='$ony'");

         }
        
            
    }
    
}else if(isset($_POST["bekleBtn"])){
    session_start();
    if($_POST["bul"]!=null){
        $db=new mysqli("localhost","root","","basvurular");
        if($db->connect_error){
            die('Error'.(".$db->connect_errno.").$db->connect_error);
         }else{
            $sorgu3=$db->query("SET NAMES UTF8");
            $ony=$_POST["bul"];
            $sorgu=$db->query("update basvurular set onay='Beklemede' where adSoyad='$ony'");

         }
        
            
    }
    
}
else if(isset($_POST["grs"])){
    if($_POST["username"]=="reeder"&&$_POST["password"]=='$Reeder$'){
        session_start();
    }else {
        echo "Kullanıcı adı veya Şifre hatalı !";
        exit();
    }
        
    
} 
else{
    echo "geçerli izniniz bulunmamaktadır!";
    exit();
}
    



?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <meta name="description" content="" />
       <meta name="author" content="" />
       <title>REEDER STAJ-İŞ BAŞVURU FORUMU</title>
       <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
       <link href="css/styles.css" rel="stylesheet" />
       <link rel="icon" type="image/x-icon" href="/icon/favicon.ico">
       <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
       <style>
        .search-bar {
            display: flex;
            align-items: center;
            width: 300px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .search-input {
            flex-grow: 1;
            padding: 5px;
            border: none;
            outline: none;
        }

        .search-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #45a049;
        }
        .sondiv:hover{
            cursor: pointer;
            
        }
    </style>

    </head>
   <body class="sb-nav-fixed">
       <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
           <!-- Navbar Brand--><img src="/icon/favicon-96x96.png" style="width:3%;height:auto;margin:0 0 0 10px;">
           <a class="navbar-brand ps-3" href="" style='color:chartreuse;'>REEDER BAŞVURU</a>
           <!-- Sidebar Toggle-->
           <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           <!-- Navbar Search-->
           <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               <div class="input-group">
                  
               </div>
           </form>
           <!-- Navbar-->
           <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <form action="" method="post">
                           <input type="submit" name="ex" value="Çıkış Yap" class="dropdown-item"/>
                       </form>
                   </ul>
               </li>
           </ul>
       </nav>
       <div id="layoutSidenav">
           <div id="layoutSidenav_nav">
               <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                   <div class="sb-sidenav-menu">
                       <div class="nav">
                           <div class="sb-sidenav-menu-heading">İşlemler</div>
                           <form action="https://applications.reeder-op.com/data.php" method="post">
                            <div class="sb-nav-link-icon" style="display:inline-block;margin-left:10px;"><i class="fa-regular fa-ballot-check"></i>
</i></div>
                               <input type="submit" name="tum" value="Tüm Başvurular" style="border:none;background-color:transparent;color:grey;">
                           <br>
                               <div class="sb-nav-link-icon" style="display:inline-block;margin-left:10px;"><i class="fa-solid fa-check" style="color:green;"></i></div>
                               <input type="submit" name="onaylananBasvurular" value="Onaylanan Başvurular" style="border:none;background-color:transparent;color:grey;">
                           <br>
                           
                               <div class="sb-nav-link-icon" style="display:inline-block;margin-left:10px;"><i class="fa-solid fa-xmark" style="color:red;"></i></div>
                               <input type="submit" name="reddedilenBasvurular" value="Reddedilen Başvurular" style="border:none;background-color:transparent;color:grey;">
                           
                           <br>
                               <div class="sb-nav-link-icon" style="display:inline-block;margin-left:10px;"><i class="fa-solid fa-spinner"></i></div>
                               <input type="submit" name="bekleyenBasvurular" value="Bekleyen Başvurular" style="border:none;background-color:transparent;color:grey;">
                           
                           </form>









                           
                          
                           <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                               </nav>
                           </div>
                           <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                               <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               Sayfalar
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                           </a>-->
                           <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                       Oturum
                                       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                   </a>
                                   <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                       <nav class="sb-sidenav-menu-nested nav">
                                           <a class="nav-link" href="https://cryptoymc.com/danismaninasor/">Giriş</a>
                                          
                                       </nav>
                                   </div>
                               </nav>
                           </div>
                           
                       </div>
                   </div>
                   <div class="sb-sidenav-footer">
                    
                       <div class="small">Panel:</div>
                       Admin
                   </div>
               </nav>
           </div>
           <div id="layoutSidenav_content">
               <main>
                   <div class="container-fluid px-4">
                       <h1 class="mt-4">Tablolar</h1>
                       <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item"><form action="https://applications.reeder-op.com/export.php" method="post"><input type="submit" name="expt" value="Tümünü Excel Olarak Çıktı Al" style="background-color:transparent; border:none;text-decoration:underline;"></form></li>
                           <li class="breadcrumb-item active">Tablolar</li>
                       </ol>
                       <div class="card mb-4">
                           <div class="card-body">
                               Reeder'a gelen iş ve staj başvuruları
                              
                           </div>
                       </div>
                       <div class="card mb-4" style='border:none;'>
                           <div class="card-header">
                               <i class="fas fa-table me-1"></i>
                               Başvurular<form action="" method="post">
                               <div class="search-bar">
                                
        <input type="text" name="srcText" class="search-input" placeholder="Ara...">
        <input type="submit" name="src" class="search-button" value="Ara">
    </div></form>

                           </div>

                           <div class="card-body">
                               <table id="datatablesSimple">
                               <thead>
                                       <tr><th>*</th>
                                       <th>Ad Soyad:</th>
<th>Adres:</th>
<th>GSM:</th>
<th>Doğum Tarihi:</th>
<th>Doğum Yeri:</th>
<th>Ehliyet:</th>
<th>Uyruğu:</th>
<th>TC Kimlik:</th>
<th>Eğitim Durumu:</th>
<th>Okul:</th>
<th>Bölüm:</th>
<th>Başlama - Bitiş Yılı:</th>
<th>Ortalama:</th>
<th>Okul:</th>
<th>Bölüm:</th>
<th>Başlama - Bitiş Yılı:</th>
<th>Ortalama:</th>
<th>Okul:</th>
<th>Bölüm:</th>
<th>Başlama - Bitiş Yılı:</th>
<th>Ortalama:</th>
<th>Okul:</th>
<th>Bölüm:</th>
<th>Başlama - Bitiş Yılı:</th>
<th>Ortalama:</th>
<th>Dil Bilgisi:</th>
<th>Word</th>
  <th>Excel</th>
  <th>PowerPoint</th>
  <th>Access</th>
  <th>Diğer Yetenekler</th>
  <th>Ad Soyad</th>
  <th>Referans Firma</th>
  <th>Pozisyon</th>
  <th>Başvurulan Bölüm</th>
  <th>İş Tecrübeleri</th>
  <th>İlham</th>
  <th>Takım</th>
  <th>Staj Başlama Tarihi</th>
  <th>Staj Bitiş Tarihi</th>
  <th>Onay Durumu</th>


                                          
                                       </tr>
                                   </thead>


                                   <tbody>
                                       <?php
           
           $db=new mysqli("localhost","root","","basvurular");$isim_deger=0;
           if($db->connect_error){
           die('Error'.('.$db->connect_errno.').$db->connect_error);
           }else{
            if(isset($_POST["src"])){
                if($_POST["srcText"]!=""){
                    $srcText=$_POST["srcText"];
                    $sorgu4=$db->query("SELECT *
                    FROM basvurular
                    WHERE 
                        adSoyad LIKE '%$srcText%' OR
                        adres LIKE '%$srcText%' OR
                        gsm LIKE '%$srcText%' OR
                        dogum LIKE '%$srcText%' OR
                        dogumYeri LIKE '%$srcText%' OR
                        ehliyet LIKE '%$srcText%' OR
                        uyrug LIKE '%$srcText%' OR
                        tckimlik LIKE '%$srcText%' OR
                        okul LIKE '%$srcText%' OR
                        bolum LIKE '%$srcText%' OR
                        baslama1 LIKE '%$srcText%' OR
                        bitis1 LIKE '%$srcText%' OR
                        ort1 LIKE '%$srcText%' OR
                        okul2 LIKE '%$srcText%' OR
                        bolum2 LIKE '%$srcText%' OR
                        baslama2 LIKE '%$srcText%' OR
                        bitis2 LIKE '%$srcText%' OR
                        ort2 LIKE '%$srcText%' OR
                        okul3 LIKE '%$srcText%' OR
                        bolum3 LIKE '%$srcText%' OR
                        baslama3 LIKE '%$srcText%' OR
                        bitis3 LIKE '%$srcText%' OR
                        ort3 LIKE '%$srcText%' OR
                        okul4 LIKE '%$srcText%' OR
                        bolum4 LIKE '%$srcText%' OR
                        baslama4 LIKE '%$srcText%' OR
                        bitis4 LIKE '%$srcText%' OR
                        ort4 LIKE '%$srcText%' OR
                        dil LIKE '%$srcText%' OR
                        word1 LIKE '%$srcText%' OR
                        excel1 LIKE '%$srcText%' OR
                        powerpoint1 LIKE '%$srcText%' OR
                        access1 LIKE '%$srcText%' OR
                        digerYetenekler LIKE '%$srcText%' OR
                        digerAdSoyad LIKE '%$srcText%' OR
                        referansFirma LIKE '%$srcText%' OR
                        pozisyon1 LIKE '%$srcText%' OR
                        basvurulanBolum1 LIKE '%$srcText%' OR
                        isTecrubeleri1 LIKE '%$srcText%' OR
                        ilham1 LIKE '%$srcText%' OR
                        takim1 LIKE '%$srcText%' OR
                        stajBaslama LIKE '%$srcText%' OR
                        stajBitis LIKE '%$srcText%';
                    
                    
                    
                    ");
             
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
                         
                         if($onay=="Onaylandı"){
                             echo "
                             <tr style='background-color:#7CFC00';>
                             <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>
                                 <td>$adSoyad</td>
                                 <td>$adres</td>
                                 <td>$gsm</td>
                                 <td>$dogum</td>
                                 <td>$dogumYeri</td>
                                 <td>$ehliyet</td>
                                 <td>$uyrug</td>
                                 <td>$tckimlik</td>
                                 <td></td>
                                 <td>$okul</td>
                                 <td>$bolum</td>
                                 <td>$baslama1 - $bitis1</td>
                                 <td>$ort1</td>
                                 <td>$okul2</td>
                                 <td>$bolum2</td>
                                 <td>$baslama2 - $bitis2</td>
                                 <td>$ort2</td>
                                 <td>$okul3</td>
                                 <td>$bolum3</td>
                                 <td>$baslama3 - $bitis3</td>
                                 <td>$ort3</td>
                                 <td>$okul4</td>
                                 <td>$bolum4</td>
                                 <td>$baslama4 - $bitis4</td>
                                 <td>$ort4</td>
                                 <td>$dil</td>
                                 <td>$word1</td>
         <td>$excel1</td>
         <td>$powerpoint1</td>
         <td>$access1</td>
         <td>$digerYetenekler</td>
         <td>$digerAdSoyad</td>
         <td>$referansFirma</td>
         <td>$pozisyon1</td>
         <td>$basvurulanBolum1</td>
         <td>$isTecrubeleri1</td>
         <td>$ilham1</td>
         <td>$takim1</td>
         <td>$stajBaslama</td>
         <td>$stajBitis</td>
         <td>$onay</td>
         <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
         
                             </tr>
                           
                                 
                       ";
                         }else if($onay=="Reddedildi"){
                             echo "
                             <tr style='background-color:red';>
                             <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                                 <td>$adSoyad</td>
                                 <td>$adres</td>
                                 <td>$gsm</td>
                                 <td>$dogum</td>
                                 <td>$dogumYeri</td>
                                 <td>$ehliyet</td>
                                 <td>$uyrug</td>
                                 <td>$tckimlik</td>
                                 <td></td>
                                 <td>$okul</td>
                                 <td>$bolum</td>
                                 <td>$baslama1 - $bitis1</td>
                                 <td>$ort1</td>
                                 <td>$okul2</td>
                                 <td>$bolum2</td>
                                 <td>$baslama2 - $bitis2</td>
                                 <td>$ort2</td>
                                 <td>$okul3</td>
                                 <td>$bolum3</td>
                                 <td>$baslama3 - $bitis3</td>
                                 <td>$ort3</td>
                                 <td>$okul4</td>
                                 <td>$bolum4</td>
                                 <td>$baslama4 - $bitis4</td>
                                 <td>$ort4</td>
                                 <td>$dil</td>
                                 <td>$word1</td>
         <td>$excel1</td>
         <td>$powerpoint1</td>
         <td>$access1</td>
         <td>$digerYetenekler</td>
         <td>$digerAdSoyad</td>
         <td>$referansFirma</td>
         <td>$pozisyon1</td>
         <td>$basvurulanBolum1</td>
         <td>$isTecrubeleri1</td>
         <td>$ilham1</td>
         <td>$takim1</td>
         <td>$stajBaslama</td>
         <td>$stajBitis</td>
         <td>$onay</td>
         <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
         
                             </tr>
                           
                                 
                       ";
                         }else if($onay=="Beklemede"){
                            echo "
                            <tr style='background-color:white';>
                            <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                                <td>$adSoyad</td>
                                <td>$adres</td>
                                <td>$gsm</td>
                                <td>$dogum</td>
                                <td>$dogumYeri</td>
                                <td>$ehliyet</td>
                                <td>$uyrug</td>
                                <td>$tckimlik</td>
                                <td></td>
                                <td>$okul</td>
                                <td>$bolum</td>
                                <td>$baslama1 - $bitis1</td>
                                <td>$ort1</td>
                                <td>$okul2</td>
                                <td>$bolum2</td>
                                <td>$baslama2 - $bitis2</td>
                                <td>$ort2</td>
                                <td>$okul3</td>
                                <td>$bolum3</td>
                                <td>$baslama3 - $bitis3</td>
                                <td>$ort3</td>
                                <td>$okul4</td>
                                <td>$bolum4</td>
                                <td>$baslama4 - $bitis4</td>
                                <td>$ort4</td>
                                <td>$dil</td>
                                <td>$word1</td>
        <td>$excel1</td>
        <td>$powerpoint1</td>
        <td>$access1</td>
        <td>$digerYetenekler</td>
        <td>$digerAdSoyad</td>
        <td>$referansFirma</td>
        <td>$pozisyon1</td>
        <td>$basvurulanBolum1</td>
        <td>$isTecrubeleri1</td>
        <td>$ilham1</td>
        <td>$takim1</td>
        <td>$stajBaslama</td>
        <td>$stajBitis</td>
        <td>$onay</td>
        <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
        
                            </tr>
                          
                                
                      ";
                        }else{
                             echo "
                             <tr>
                             <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                                 <td>$adSoyad</td>
                                 <td>$adres</td>
                                 <td>$gsm</td>
                                 <td>$dogum</td>
                                 <td>$dogumYeri</td>
                                 <td>$ehliyet</td>
                                 <td>$uyrug</td>
                                 <td>$tckimlik</td>
                                 <td></td>
                                 <td>$okul</td>
                                 <td>$bolum</td>
                                 <td>$baslama1 - $bitis1</td>
                                 <td>$ort1</td>
                                 <td>$okul2</td>
                                 <td>$bolum2</td>
                                 <td>$baslama2 - $bitis2</td>
                                 <td>$ort2</td>
                                 <td>$okul3</td>
                                 <td>$bolum3</td>
                                 <td>$baslama3 - $bitis3</td>
                                 <td>$ort3</td>
                                 <td>$okul4</td>
                                 <td>$bolum4</td>
                                 <td>$baslama4 - $bitis4</td>
                                 <td>$ort4</td>
                                 <td>$dil</td>
                                 <td>$word1</td>
         <td>$excel1</td>
         <td>$powerpoint1</td>
         <td>$access1</td>
         <td>$digerYetenekler</td>
         <td>$digerAdSoyad</td>
         <td>$referansFirma</td>
         <td>$pozisyon1</td>
         <td>$basvurulanBolum1</td>
         <td>$isTecrubeleri1</td>
         <td>$ilham1</td>
         <td>$takim1</td>
         <td>$stajBaslama</td>
         <td>$stajBitis</td>
         <td>$onay</td>
         <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
         
                             </tr>
                           
                                 
                       ";
                         }
                           
                         
                 
                 
                 
                 
                 
                      }
                       
                    }
                }

            }
             else if(isset($_POST["tum"])){
                $sorgu4=$db->query("select * from basvurular order by basvuru_tarihi desc");
             
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
                     
                     if($onay=="Onaylandı"){
                         echo "
                         <tr style='background-color:#7CFC00';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>
                                
                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Reddedildi"){
                         echo "
                         <tr style='background-color:red';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Beklemede"){
                        echo "
                        <tr style='background-color:white';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else{
                         echo "
                         <tr>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }
                       
                     
             
             
             
             
             
                  }
                   
                }
              }
              else if(isset($_POST["onaylananBasvurular"])){
                $sorgu4=$db->query("select * from basvurular where onay='Onaylandı' order by basvuru_tarihi desc");
             
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
                     
                     if($onay=="Onaylandı"){
                         echo "
                         <tr style='background-color:#7CFC00';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Reddedildi"){
                         echo "
                         <tr style='background-color:red';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Beklemede"){
                        echo "
                        <tr style='background-color:white';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else{
                         echo "
                         <tr>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }
                       
                     
             
             
             
             
             
                  }
                   
                }
               }else if(isset($_POST["reddedilenBasvurular"])){
                $sorgu4=$db->query("select * from basvurular where onay='Reddedildi' order by basvuru_tarihi desc");
             
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
                     
                     if($onay=="Onaylandı"){
                         echo "
                         <tr style='background-color:#7CFC00';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Reddedildi"){
                         echo "
                         <tr style='background-color:red';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Beklemede"){
                        echo "
                        <tr style='background-color:white';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else{
                         echo "
                         <tr>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }
                       
                     
             
             
             
             
             
                  }
                   
                }
               }else if(isset($_POST["bekleyenBasvurular"])){
                $sorgu4=$db->query("select * from basvurular where onay='Beklemede' order by basvuru_tarihi desc");
             
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
                     
                     if($onay=="Onaylandı"){
                         echo "
                         <tr style='background-color:#7CFC00';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Reddedildi"){
                         echo "
                         <tr style='background-color:red';>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }else if($onay=="Beklemede"){
                        echo "
                        <tr style='background-color:white';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else{
                         echo "
                         <tr>
                         <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                             <td>$adSoyad</td>
                             <td>$adres</td>
                             <td>$gsm</td>
                             <td>$dogum</td>
                             <td>$dogumYeri</td>
                             <td>$ehliyet</td>
                             <td>$uyrug</td>
                             <td>$tckimlik</td>
                             <td></td>
                             <td>$okul</td>
                             <td>$bolum</td>
                             <td>$baslama1 - $bitis1</td>
                             <td>$ort1</td>
                             <td>$okul2</td>
                             <td>$bolum2</td>
                             <td>$baslama2 - $bitis2</td>
                             <td>$ort2</td>
                             <td>$okul3</td>
                             <td>$bolum3</td>
                             <td>$baslama3 - $bitis3</td>
                             <td>$ort3</td>
                             <td>$okul4</td>
                             <td>$bolum4</td>
                             <td>$baslama4 - $bitis4</td>
                             <td>$ort4</td>
                             <td>$dil</td>
                             <td>$word1</td>
     <td>$excel1</td>
     <td>$powerpoint1</td>
     <td>$access1</td>
     <td>$digerYetenekler</td>
     <td>$digerAdSoyad</td>
     <td>$referansFirma</td>
     <td>$pozisyon1</td>
     <td>$basvurulanBolum1</td>
     <td>$isTecrubeleri1</td>
     <td>$ilham1</td>
     <td>$takim1</td>
     <td>$stajBaslama</td>
     <td>$stajBitis</td>
     <td>$onay</td>
     <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
     
                         </tr>
                       
                             
                   ";
                     }
                       
                     
             
             
             
             
             
                  }
                   
                }
               }else{
                
               $sorgu4=$db->query("select * from basvurular");
             
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
                    
                    if($onay=="Onaylandı"){
                        echo "
                        <tr style='background-color:#7CFC00';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else if($onay=="Reddedildi"){
                        echo "
                        <tr style='background-color:red';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else if($onay=="Beklemede"){
                        echo "
                        <tr style='background-color:white';>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }else{
                        echo "
                        <tr>
                        <td><form action='https://applications.reeder-op.com/profile.php' method='get' target='_blank'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='profilBtn' value='Profili göster' style='margin-right:10px;background-color:blue;border:none;color:white;'></form></td>

                            <td>$adSoyad</td>
                            <td>$adres</td>
                            <td>$gsm</td>
                            <td>$dogum</td>
                            <td>$dogumYeri</td>
                            <td>$ehliyet</td>
                            <td>$uyrug</td>
                            <td>$tckimlik</td>
                            <td></td>
                            <td>$okul</td>
                            <td>$bolum</td>
                            <td>$baslama1 - $bitis1</td>
                            <td>$ort1</td>
                            <td>$okul2</td>
                            <td>$bolum2</td>
                            <td>$baslama2 - $bitis2</td>
                            <td>$ort2</td>
                            <td>$okul3</td>
                            <td>$bolum3</td>
                            <td>$baslama3 - $bitis3</td>
                            <td>$ort3</td>
                            <td>$okul4</td>
                            <td>$bolum4</td>
                            <td>$baslama4 - $bitis4</td>
                            <td>$ort4</td>
                            <td>$dil</td>
                            <td>$word1</td>
    <td>$excel1</td>
    <td>$powerpoint1</td>
    <td>$access1</td>
    <td>$digerYetenekler</td>
    <td>$digerAdSoyad</td>
    <td>$referansFirma</td>
    <td>$pozisyon1</td>
    <td>$basvurulanBolum1</td>
    <td>$isTecrubeleri1</td>
    <td>$ilham1</td>
    <td>$takim1</td>
    <td>$stajBaslama</td>
    <td>$stajBitis</td>
    <td>$onay</td>
    <td><form action='https://applications.reeder-op.com/data.php' method='post'><input type='hidden' name='bul' value='$adSoyad'><input type='submit' name='onayBtn' value='Onayla' style='margin-right:10px;background-color:green;border:none;color:white;'><input type='submit' name='reddetBtn' value='Reddet' style='margin-right:10px;background-color:red;border:none;color:white;'><input type='submit' name='bekleBtn' value='Beklemeye Al' style='margin-right:10px;background-color:gray;border:none;color:white;'></form></td>
    
                        </tr>
                      
                            
                  ";
                    }
                      
                    
            
            
            
            
            
                 }
                  
               }
               }
          
           }
  
           if(isset($_POST["search"])){
               echo "<script>$('.tbdy').html('')</script>";
                   $ogrenci=$_POST["ogrid2"];
                 $sorgu7=$db->query("select * from danismansohbet where danisman='$danismanid' and ogrmail='$ogrenci' order by tarih desc");
               if($sorgu7->num_rows>0){
                   while($item3=$sorgu7->fetch_assoc()){
                       $ogrname=$item3["ogrmail"];
                       $mesaj=$item3["mesaj"];
                       $tarih=$item3["tarih"];
                       $resim=$item3["resim"];
                      echo "<tr><td>$ogrname</td><td><img src='$resim' style='width:100px;height:100px;'></td><td>$mesaj</td><td>$tarih</td></tr>";
                   }
                  
               }
           }
           ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </main>
               <footer class="py-4 bg-light mt-auto">
                   <div class="container-fluid px-4">
                       <div class="d-flex align-items-center justify-content-between small">
                           <div class="text-muted">Telif Hakkı &copy; REEDER 2023 </div>
                          
                       </div>
                   </div>
               </footer>
           </div>
       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
       <script src="js/scripts.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
       <script src="js/datatables-simple-demo.js"></script>
       <script>
                function topScroll(){
                    window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });

                }
                window.addEventListener('scroll', function() {
      var scrollButton = document.querySelector('.scroll-to-top');
      if (window.scrollY > 200) {
        scrollButton.style.display = 'block';
      } else {
        scrollButton.style.display = 'none';
      }
    });

       </script>
       <?php
       if(isset($_POST["ex"])){
        session_destroy();
        echo "<script>window.location='http://applications.reeder-op.com/data.php';</script>";
       }
      
   
       ?><div class="sondiv"><img src="/img/reeder.png" class="scroll-to-top"  onclick="topScroll()" style="width: 10%;position:fixed;right:0;bottom:0;background-color:#212529;border-radius:20px;box-shadow:1px 1px 10px green;"></div>
   </body>
</html>



