<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/6/2018
 * Time: 13:16
 */

class DBConnector
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "kcs";

    private $conn;

    function __construct()
    {

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // CRUD Read all dalis
    public function getAllStudents()
    {
        $q = "SELECT * FROM `students`;";
        return $this->conn->query($q);
    }

    // CRUD read 1 dalis
    public function getStudentByID($id)
    {
        $q = "SELECT * FROM `students` WHERE `id` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    // CRUD Create dalis
    public function addStudent($name, $surname, $phone, $email)
    {
        $q = "INSERT INTO `students` ( `name`, `surname`, `phone`, `email`) VALUES ( ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("ssss", $name, $surname, $phone, $email);
        $stmt->execute();
    }

    // CRUD Delete dalis
    public function deleteStudent($id)
    {
        $q = "DELETE FROM `students` WHERE `students`.`id` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    // CRUD update dalis
    public function updateStudent($id, $name, $surname, $phone, $email)
    {
        $q = "UPDATE `students` SET `name` = ?,`surname` = ?,`phone` = ?,`email` = ? WHERE `id` = ?;";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("ssssi", $name, $surname, $phone, $email, $id);
        $stmt->execute();
    }

}