<?php

class ContactModel
{
    var $connection;

    public function __construct()
    {
        require_once("db/ConnectClass.php");
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $this->connection = $ConnectClass->getConn();
    }

    public function listContacts()
    {
        $sql = "SELECT * FROM contact";
        return $this->connection->query($sql);
    }

    public function consultContact($idContact)
    {
        $sql = "SELECT * FROM contact WHERE idContact = $idContact";
        return $this->connection->query($sql);
    }

    public function insertContact($arrayContact)
    {
        $sql = "INSERT INTO contact (name, email, message) VALUES ('{$arrayContact['name']}', '{$arrayContact['email']}', '{$arrayContact['message']}')";
        return $this->connection->query($sql);
    }
}