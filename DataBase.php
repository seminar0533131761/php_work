<?php
class Database {
    private $host = "sql11.freesqldatabase.com";
    private $db_name = "sql11671255";
    private $username = "sql11671255";
    private $password = "r7IQUTG2rh";
    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            print("co");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function select($query) {
        $stmt = $this->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function insert($query) {
        $stmt = $this->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function update($query) {
        $stmt = $this->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function delete($query) {
        $stmt = $this->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
$db = new Database();
$db->getConnection();
?>
