<?php 
 include "../../class/base.php";
 $data = $_GET;
 $students = new DB('students');
// dd($data);
 $students->store($data);