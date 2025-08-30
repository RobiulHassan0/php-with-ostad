<?php

class Student{
    private $table = 'students';
    public function __construct(private Database $database)
    {
        
    }

    public function getStudents() {
        $sql = "SELECT * FROM students";
        $result = $this->database->connection->query($sql);
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($row, JSON_PRETTY_PRINT);
    }

    public function insertStudents(array $data){
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


    public function insertStudentsSequre(array $data){
        $sql = "INSERT INTO ". $this->table ." (name, email, dob, age) VALUE (?, ?, ?, ?)"; 
        $statements = $this->database->connection->prepare($sql);
        $statements->bind_param('sssi', $data['name'], $data['email'], $data['dob'], $data['age']);

        if($statements->execute()){
            return $this->responseModel('Student inserted Successfully');
        }
        return $this->responseModel('Student inserted Successfully');

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

    public function deleteStudent($id){
        $sql = "DELETE FROM students WHERE id= ? ";
        $statements = $this->database->connection->prepare($sql);
        $statements->bind_param('i', $id);
        if($statements->execute()){
            return $this->responseModel('Student Deleted Successfully');
        }else{
            return $this->responseModel('Student Not Deleted');
        }
    }

    public function isIdExist($id){
        $sql = "SELECT COUNT(*) FROM students WHERE id = '$id' ";
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
