<?php
session_start();
if(isset($_POST['duzenleBtn'])){
    $db=new mysqli("localhost","root","","basvurular");
    if($db->connect_error){
       die('Error'.(".$db->connect_errno.").$db->connect_error);
    }else{
      if($_POST['duzenleBasvuru']!=''){
        $numedt=$_POST['duzenleBasvuru'];
        $sorgu4=$db->query("select * from basvurular where editNumber='$numedt'");
                    
        if($sorgu4->num_rows>0){
            while($row=$sorgu4->fetch_assoc()){
             $adSoyad = $row['adSoyad'];
             $redirectUrl = 'https://applications.reeder-op.com/profile.php?bul='.$adSoyad;


        
            } 
            echo "<script>window.location.href = '$redirectUrl';</script>";

         }
      }
  }
  }

?>