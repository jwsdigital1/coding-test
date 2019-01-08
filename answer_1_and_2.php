<?php


function get_duplicate($str)
{
	$result = '(no duplicate)';
	$to_array = str_split($str); // string split to array
	$temp = [];
	foreach ($to_array as $value) {
		$flag = false; // default value
		for ($i=0; $i < count($temp); $i++) { 
			if($value == $temp[$i]) { // if find duplicate
				$flag = true; 
			}			
		}
		if( $flag ) {
			$result = $value; // decide the result
			break; // stop looping
		} else {
			$temp[] = $value; // add value to temporary array
		}
	}
	return $result;
}

function bubble_sort($arr){
	$length =  count($arr); // count array
	foreach ($arr as $val) { 

		for ($j=0; $j < $length-1; $j++) { 
			if( $j < $length && $arr[$j] > $arr[$j+1] ) { // if the number greater than next number
				// swap number without temp. variable
				$total = $arr[$j] + $arr[$j+1];
				$arr[$j] = $total - $arr[$j]; 
				$arr[$j+1] = $total - $arr[$j+1];
			}
		}

	}
	return $arr;
}

echo '<pre>';

$data = "ABCDEBE";

echo '<h3>Get duplicate data</h3>';

echo 'input: <b>'.$data.'</b><br>';

echo 'output: <b>'.get_duplicate($data).'</b><br>';



$data2 = [2,6,17,3,8,20,31,2];

echo '<h3>Bubble sort</h3>';

echo 'input: <b>';
print_r($data2);
echo '</b><br>';

echo 'output: <b>';
print_r(bubble_sort($data2));
echo '</b><br>';


echo '</pre>';

?>
