<?php
class Etudiant {
    private $id, $nom, $prenom, $ville, $sexe;
    public function __construct($id, $nom, $prenom, $ville, $sexe) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->sexe = $sexe;
    }
    // Getters
    public function getNom() { return $this->nom; }
    public function getPrenom() { return $this->prenom; }
    public function getVille() { return $this->ville; }
    public function getSexe() { return $this->sexe; }
    public function getId() { return $this->id; }
}
?>