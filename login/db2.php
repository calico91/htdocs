<?php
class Database
{
    private $user;
    private $host;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "Isma1504";
        $this->db = "login";

        $this->connect();
    }
    public function connect()
    {
        $link = mysqli_connect($this->host, $this->user, $this->pass, $this->db, '3306');

        return $link;
    }
}

new Database();
?>