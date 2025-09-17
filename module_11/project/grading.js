// Student Grade Management System

let students = [];
let idCounter = 1;

function addStudent(name, marks){
    if(marks >= 80 && 80 <= 100){
        grade = 'A+';
    }else if(marks >= 65){
        grade = 'A';
    }else if(marks >= 40){
        grade = 'B';
    }else{
        grade = 'Faile';
    }

    let student = {
        id: idCounter++,
        name: name,
        marks: marks,
        grade: grade
    }
    students.push(student)
    return student;
}

//  find Single Student ID

function findStudent(id){
    let result;
    switch (true){
        case students.length === 0:
            result = "No Student Found";
        default: 
            result = students.find(s => s.id) || "Student Not Found";
    }
    return result;
}

// show All Students

function showStudents(){
    console.log('----- Student List -----')
    for(let i = 0; i<students.length; i++){
        console.log(`${students[i].id} . ${students[i].name} - Marks: ${students[i].marks}, Grade: ${students[id].grade}.`);
    }
}