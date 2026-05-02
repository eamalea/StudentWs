<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/StudentService.php';
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];
    
    $service = new StudentService();
    $etudiant = new Etudiant($id, $nom, $prenom, $ville, $sexe);
    $service->update($etudiant);
    
    header('Content-Type: application/json');
    echo json_encode($service->getAllAsArray());
}
?>