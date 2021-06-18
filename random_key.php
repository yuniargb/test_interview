<?php
function GenerateKey($length = 16) {
    
    $newKey ='';
    for($i = 0; $i<$length; $i++){
        $newKey .= random_int(1,9);
    }
    return $newKey;
}
$getData = $_POST['lengthKey'];
echo GenerateKey($getData);
echo "<br/> <a href='/phptest'>Kembali</a>";