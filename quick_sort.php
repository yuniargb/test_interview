<?php
function quick_sort($my_array)
 {
	$loe = $gt = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $pivot)
		{
			$loe[] = $val;
		}elseif ($val > $pivot)
		{
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}
 
$getData = $_POST['qs'];

echo "array sebelum diurutkan :";
echo implode(', ',$getData );
echo "<br/> array setelah diurutkan: ";
echo implode(', ',quick_sort($getData));
echo "<br/> <a href='/phptest'>Kembali</a>";

