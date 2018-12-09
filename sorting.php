<?php
	
	ini_set('precision', 16);
	$arr = [200,11,4,5,23,3];
	// print_r($arr);
	$time_start = microtime(true);
	print_r($time_start);
	print_r(PHP_EOL);
	// $arr = bubbleSort($arr);
	// $arr = selectionSort($arr);
	$arr = insertionSort($arr);
	print_r($arr);
	$time_end = microtime(true);
	print_r($time_end);
	$execution_time = (double)$time_end - (double)$time_start;

	print_r(PHP_EOL);
	print_r($execution_time);

	function bubbleSort($arr){
		$size = sizeof($arr);
		for ($i=0; $i < $size-1; $i++) {
			for ($j=0; $j < $size-1-$i; $j++) { 
				if ($arr[$j] > $arr[$j+1]) {
					$temp = $arr[$j+1];
					$arr[$j+1] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}
		return $arr;
	}
	function selectionSort($arr){
		$size = sizeof($arr);
		for ($i=0; $i < $size; $i++) { 
			$minIndex = $i;
			for ($j=$i+1; $j < $size ; $j++) { 
				if ($arr[$j] < $arr[$minIndex]) {
					$minIndex = $j;
				}
			}
			$temp = $arr[$minIndex];
			$arr[$minIndex] = $arr[$i];
			$arr[$i] = $temp;
		}
		return $arr;
	}

	function insertionSort($arr){
		$size = sizeof($arr);
		for ($i=0; $i < $size; $i++) { 
			
			$current = $arr[$i];
			$j = $i-1;
			while($j>=0 && $arr[$j]>$current){
				$arr[$j+1] = $arr[$j];
				$j -= 1;
			}
			$arr[$j+1] = $current;
		}
		
		return $arr;
	}

?>