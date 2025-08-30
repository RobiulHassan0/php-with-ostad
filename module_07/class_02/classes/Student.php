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
        $sql = "INSERT INTO students (name, email, dob, age) VALUE 
        ('$data[name]', '$data[email]', $data[dob], $data[age])"; 
        $insert = $this->database->connection->query($sql);
        if($insert){
            return $this->responseModel('Student inserted succsessfully');
        }else{
            return $this->responseModel('Students Not inserted');
        }
        echo "<br>";
    }

    public function isEmailExist($email){
        $sql = "SELECT COUNT(*) FROM students WHERE email = '$email' ";
        $result = $this->database->connection->query($sql);
        $fetch = $result->fetch_assoc();
        if($fetch['COUNT(*)'] > 0){
            return true;
        }
        return false;
    }

    private function responseModel($message, $data=[], $status = 200){
        http_response_code($status);
        return json_encode([
            'message' => $message,
            'data' => $data,
            'status' => $status
        ], JSON_PRETTY_PRINT);
    }
}
