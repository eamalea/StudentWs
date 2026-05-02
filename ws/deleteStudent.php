<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/StudentService.php';
    $id = $_POST['id'];
    $service = new StudentService();
    $etudiant = new Etudiant($id, '', '', '', '');
    $service->delete($etudiant);
    
    header('Content-Type: application/json');
    echo json_encode($service->getAllAsArray());
}
?>