<?php
include_once(__DIR__ . "/lib/Employee.php");
include_once(__DIR__ . "/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");

$employee = new Employee();
$employee->setValue('CND001','Candra','Maulana Aji','candraminok12@gmail.com','085775066851','2019-10-03','CEO001','1.000.000','5.000.000','CEO001','DPR001');
//echo $employee->id;
$result=$employee->create();

$format= new DataFormat();
//print_r($result);
 echo $format->asJSON($result);
 
 //$data = $employee->getAll();