<form action="add.php" method="POST">
    Student ID <input type="text" name="student_id"><br>
    Name <input type="text" name="name"><br>
    Email <input type="email" name="email"><br>
    Password  <input type="password" name="password"><br>
    <input type="submit" name="addData" value="Send TO Server"><br>
</form>

<?php

include_once "Crud.php";
$crud = new Crud();

if(isset($_POST['addData'])){
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); //encrypted password by usinf md5()

    $sql = "INSERT into info(student_id,name,email,password)
    VALUES('$student_id','$name','$email','$password')";

    $result = $crud->execute($sql);

    if($result){
        // echo "data added successfully";
        header('location:show.php');
    }else{
        echo "Insertion problem";
    }
}
?>