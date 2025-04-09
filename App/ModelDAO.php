<?php
namespace App;

use PDO;
use PDOException;

class ModelDAO {
    
    private string $db_type;
    private string $host;
    private string $db;
    private string $user;
    private string $password;

    
    /**
     * Connects to the database
     * 
     * @return PDO The connection
     */
    public function dbConnection()
    {
        try
        {
            return new PDO($this->db_type . ":host=". $this->host .";dbname=". $this->db, $this->user, $this->password);
        }
        catch (PDOException $e)
        {
            echo('Une erreur est survenue ' . $e . ' Veuillez rafaichir la page.');
        }
    }



    public function __construct() {
        $this->db_type = DB_TYPE;
        $this->host = HOST;
        $this->db = DB;
        $this->user = USER;
        $this->password = PASSWORD;
    }
}

?>