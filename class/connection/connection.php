<?php
class Connection
{
    private $server;
    private $password;
    private $database;
    private $user;
    private $port;

    public function __construct()
    {
        $data = $this->dataConnection();
        $this->server = $data['server'];
        $this->password = $data['password'];
        $this->database = $data['database'];
        $this->user = $data['user'];
        $this->port = $data['port'];
    }

    private function dataConnection()
    {
        $dir = dirname(__FILE__);
        $jsonData = file_get_contents($dir . "/config");
        return json_decode($jsonData, true);
    }
}
?>