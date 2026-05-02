<?php
class DbManager {
    private $pdo;
    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=school1;charset=utf8", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Erreur BDD : " . $e->getMessage());
        }
    }
    public function getPDO() { return $this->pdo; }
}
?>