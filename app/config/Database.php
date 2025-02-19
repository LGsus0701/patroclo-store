<?php   
class Database{
    private $host ="localhost";
    private $database="PATROCLO_STORE";
    private $user = "postgres";
    private $password = "sqladmin";

    public $conn;

    public function getConnection(){
        try{
            $connString = "pgsql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO(
                 $connString,
                 $this->user,
                 $this->password,
                 [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                 ]

            );

        }catch (\Throwable $th){
            echo "Error de conexion: " . $th->getMessage();
        }
        return $this->conn;
     }
     
}

?>