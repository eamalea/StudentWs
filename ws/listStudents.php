<?php
include_once '../service/StudentService.php';
$service = new StudentService();
header('Content-Type: application/json');
echo json_encode($service->getAllAsArray());
?>