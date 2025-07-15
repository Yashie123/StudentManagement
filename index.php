<?php

include 'vendor/autoload.php';

use Bulahan\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->id = 2022812004;
$student->fullname = "Bulahan Mailen";
$student->yearlevel = " First Year";
$student->course = "BSIT";
$student->section = "A";

$student->displayInfo();