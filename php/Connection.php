<?php 

    class Connection {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    public function __construct($dbname, $username, $password) {        
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->pdo = new PDO("mysql:host=mysql;dbname=$dbname", $username, $password);

            
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}

?>