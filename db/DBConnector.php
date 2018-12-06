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

    public function printAnyTable($result)
    {
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
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

    //SELECT visus studentus ir surikiuokite pagal studento vardą nuo A iki Z
    public function getUzduotis1_6()
    {
        $q = "SELECT * FROM `students` ORDER BY `name` ASC;";
        return $this->conn->query($q);
    }
    //SELECT studentus kurių vardai ir pavardės baigėsi ‚as‘, surikiuokite rezultatus nuo Z iki A
    //pagal pavardes
    public function getUzduotis1_7()
    {
        $q = "SELECT * FROM `students` WHERE `name` LIKE '%as' AND `surname` LIKE '%as' ORDER BY `surname` DESC ;";
        return $this->conn->query($q);
    }

    //SELECT studentu adresus kurie gyvena Kaune
    public function getUzduotis1_8()
    {
        $q = "SELECT * FROM `student_address` WHERE `city` = 'Kaunas';";
        return $this->conn->query($q);
    }

    //SELECT studentų adresus kuriu pašto kodas ne NULL
    public function getUzduotis1_9()
    {
        $q = "SELECT * FROM `student_address` WHERE `postcode` IS NOT NULL;";
        return $this->conn->query($q);
    }

    //SELECT studentų pažymius surikiuokite nuo didžiausio iki mažiausio
    public function getUzduotis1_10()
    {
        $q = "SELECT * FROM `student_marks` ORDER BY `mark` DESC;";
        return $this->conn->query($q);
    }

    //Suskaičiuokite kiek studentų gavo maksimalų ivertinimą. Naudokite count(*)
    public function getUzduotis1_11()
    {
        $q = "SELECT count(*) as `max` FROM `student_marks` WHERE `mark` = 10";
        return $this->conn->query($q);
    }

    //SELECT studentu pažymius kurie didesnis nei 6
    public function getUzduotis1_12()
    {
        $q = "SELECT * FROM `student_marks` WHERE `mark` > 6;";
        return $this->conn->query($q);
    }
    //UPDATE student_address lentelę street stulpelį, kurie gyvena Vilniuje ir Kaune
    //panaudokite IN
    public function getUzduotis1_13()
    {
        $q = "UPDATE `student_address` SET `street` = 'Centrine123' WHERE `city` IN ('Vilnius','Kaunas');";
        $stmt = $this->conn->prepare($q);
         $stmt->execute();
        return $stmt->affected_rows;

    }
    //SELECT studentus ir jų adresus panaudojant LEFT JOIN rezultatus surikiuoti pagal
    //vardus
    public function getUzduotis1_14()
    {
        $q = "SELECT * FROM `students` LEFT JOIN `student_address` ON `student_address`.`student_id` = `students`.`id` ORDER BY `name` ASC";
        return $this->conn->query($q);

    }
    //SELECT studentus ir jų pažymius panaudojant RIGHT JOIN surikiuokite studentus
    //pagal pažymius
    public function getUzduotis1_15()
    {
        $q = "SELECT * FROM `students` LEFT JOIN `student_marks` ON `student_marks`.`student_id` = `students`.`id` ORDER BY `mark` DESC";
        return $this->conn->query($q);
    }
}