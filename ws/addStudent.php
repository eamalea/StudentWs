<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/StudentService.php';
    // Récupération des paramètres POST
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $ville = $_POST['ville'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    
    $service = new StudentService();
    $etudiant = new Etudiant(0, $nom, $prenom, $ville, $sexe);
    $service->create($etudiant);
    
    header('Content-Type: application/json');
    echo json_encode($service->getAllAsArray());
}
?>