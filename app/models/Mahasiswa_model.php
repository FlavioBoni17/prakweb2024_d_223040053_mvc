<?php 

class Mahasiswa_model {
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data sorce name
        $dsn = 'mysql:host=localhost;dbname=prakweb2024_d_223040053_mvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt ->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}