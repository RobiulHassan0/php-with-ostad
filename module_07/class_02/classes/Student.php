<?php

class Student{
    public function __construct(private Database $database)
    {
        
    }

    public function getStudents() {
        $sql = "SELECT * FROM students";
        $result = $this->database->connection->query($sql);
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($row, JSON_PRETTY_PRINT);
    }

    public function insertStudents($data){
        $sql = "INSERT INTO students (name, email, dob, age, status) VALUE 
        ('Karim', 'karim@mail.com', '2001-01-01', 24, true)"; 
        $insert = $this->database->connection->query($sql);
        if($insert){
            echo "Inserted Data";
        }else{
            echo "Not Imported Data";
        }
        echo "<br>";
    }
}
