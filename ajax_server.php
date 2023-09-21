<?php
$gods = array();
$gods[0] = "sudeep";
$gods[1] = "ram";
$gods[2] = "shyam";
$gods[3] = "hari";
$gods[4] = "rita";
$gods[5] = "gita";
// print_r($gods);  

$searchstring=strtolower($_GET['search']);
$hint='';
$len = strlen($searchstring);
if($len==0){
    "";
    exit(0);
}
foreach($gods as $god){
    if($searchstring == strtolower(substr($god,0,$len))){
        $hint .= $god.",";
    }
}
echo $hint;
?>
        
<!-- 
    assignment :
    
 -->
