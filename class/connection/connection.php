<?php
class Connection
{
    private $server;
    private $password;
    private $database;
    private $user;
    private $port;
    private $connection;

    public function __construct()
    {
        $data = $this->dataConnection();
        $this->server = $data['server'];
        $this->password = $data['password'];
        $this->database = $data['database'];
        $this->user = $data['user'];
        $this->port = $data['port'];
        try {
            $this->connection = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);
        } catch (\Throwable $th) {
            echo $th;
            die();
        }
    }

    private function dataConnection()
    {
        $dir = dirname(__FILE__);
        $jsonData = file_get_contents($dir . "/config.json");
        return json_decode($jsonData, true);
    }
}
?>