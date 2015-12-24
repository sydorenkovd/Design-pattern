<?php

class User
{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=test", 'sydorenkovd', 'dev');
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM users WHERE user_id = ' . (int) $id;
        $result = $this->connection->exec($sql);

        return $result;
    }
}