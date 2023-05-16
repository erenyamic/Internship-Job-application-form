

<?php

session_start();


    if(isset($_POST["expt"])){
        $db=new mysqli("localhost","root","","basvurular");
if($db->connect_error){
    die('Error'.(".$db->connect_errno.").$db->connect_error);
 }else{
    $sorgu3=$db->query("SET NAMES UTF8");
    $filename = "export.xls"; // File Name// Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel;");
   

    $user_query = $db->query('select * from basvurular');
    // Write data to file
    $flag = false;
    while ($row = $user_query->fetch_assoc()) 
    {    
        if (!$flag) 
        {        // display field/column names as first row        
            echo implode("\t", array_keys($row)) . "\r\n";        
            $flag = true;    
        }    
        echo implode("\t", array_values($row)) . "\r\n";
    }
 }

    }else
    echo "Erişim İzniniz yok / You don't have a permission";

    

session_abort();
?>

