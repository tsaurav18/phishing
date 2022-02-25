<?php
header ('Location:/');
$file = fopen("logFile.txt",'a');
foreach($_POST as $key => $value){
    fwrite($file,$key);      // stores the field Name
    fwrite($file,"=>");      
    fwrite($file,$value);    //stores the field Value
    fwrite($file,"\r\n");
}
fwrite($file,"\r\n");
fclose($file);
exit;
?>