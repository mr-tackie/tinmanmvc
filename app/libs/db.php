<?php

/***
 * 
 * Database class
 * 
 * 
 */

class DB
{
    //connection params
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    //database handler
    private $dbh;

    //current statement
    private $stmt;

    //errors
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //prepare statement with query
    public function query($stmt)
    {
        $this->stmt = $this->dbh->prepare($stmt);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    //Ececute stmt
    public function execute()
    {
        return $this->stmt->execute();
    }

    //return results as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetchSingle()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);   
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
