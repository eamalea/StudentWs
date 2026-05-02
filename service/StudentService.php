<?php
include_once '../classes/Etudiant.php';
include_once '../connexion/DbManager.php';
include_once '../dao/IDao.php';

class StudentService implements IDao {
    private $db;
    public function __construct() {
        $this->db = new DbManager();
    }
    
    public function create($o) {
        $sql = "INSERT INTO Etudiant (nom, prenom, ville, sexe) VALUES (:nom, :prenom, :ville, :sexe)";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([
            ':nom' => $o->getNom(),
            ':prenom' => $o->getPrenom(),
            ':ville' => $o->getVille(),
            ':sexe' => $o->getSexe()
        ]);
    }
    
    public function delete($o) {
        $sql = "DELETE FROM Etudiant WHERE id = :id";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([':id' => $o->getId()]);
    }
    
    public function update($o) {
        $sql = "UPDATE Etudiant SET nom=:nom, prenom=:prenom, ville=:ville, sexe=:sexe WHERE id=:id";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([
            ':id' => $o->getId(),
            ':nom' => $o->getNom(),
            ':prenom' => $o->getPrenom(),
            ':ville' => $o->getVille(),
            ':sexe' => $o->getSexe()
        ]);
    }
    
    public function findAll() {
        $sql = "SELECT * FROM Etudiant";
        return $this->db->getPDO()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function findById($id) {
        $sql = "SELECT * FROM Etudiant WHERE id = :id";
        $stmt = $this->db->getPDO()->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Méthode utilitaire pour l'API (retourne tous les étudiants)
    public function getAllAsArray() {
        return $this->findAll();
    }
}
?>