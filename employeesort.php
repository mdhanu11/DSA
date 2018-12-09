<?php

$empArray = array();
for ($i=0; $i < 10; $i++) { 
	$employee = new Employee();
	$employee->empNo = $i;//getRandomNumber($i);
	$employee->empFName = 'EmployeeFirst'.$i;
	$employee->empLName = 'EmployeeLast'.$i;
	$employee->empEmail = 'Employee'.$i.'@gmail.com';
	array_push($empArray, $employee);
}
// print_r($empArray);
$empArray = sortEmployees($empArray);
print_r($empArray);

function sortEmployees($arr){
	$size = sizeof($arr);
	for ($i=0; $i < $size; $i++) { 
		$c_employee = $arr[$i];
		$j = $i-1;

		while ($j >=0) {
			$j_employee = $arr[$j];
			if ($j_employee->empNo >= $c_employee->empNo) {
				$arr[$j+1] = $arr[$j];
			}
			else{
				break;
			}
			$j -= 1;
		}
		$arr[$j+1] = $c_employee;
	}
	return $arr;
}

class Employee{
	public $empNo;
	public $empFName;
	public $empLName;
	public $empEmail;
}


	
?>