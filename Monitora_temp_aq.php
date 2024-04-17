<?php
$temperatura = file_get_contents('http://172.16.0.53/');
$limpa = explode("<br>", $temperatura);

$temperatura = $limpa[0];

$temperatura = $temperatura + 1;
echo $temperatura;

if ($temperatura < 25 OR  $temperatura > 27){

       // create curl resource
       $ch = curl_init();

       // set url
       curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot5094887578:AAF0jJnvPzrPk2vRfgV-MzEOcAA8XgNZXBc/sendMessage?chat_id=-626709543&text=$temperatura");
  
       //return the transfer as a string
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
       // $output contains the output string
       $output = curl_exec($ch);
  
       // close curl resource to free up system resources
       curl_close($ch);     
  
    
} 


$nivel =$limpa[1];

if ($nivel != 0){

	$msg="Nivel de agua fora do padrão";
       // create curl resource
       $ch = curl_init();

       // set url
       curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot5094887578:AAF0jJnvPzrPk2vRfgV-MzEOcAA8XgNZXBc/sendMessage?chat_id=-626709543&text=$msg");

       //return the transfer as a string
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

       // $output contains the output string
       $output = curl_exec($ch);

       // close curl resource to free up system resources
       curl_close($ch);

}

?>
