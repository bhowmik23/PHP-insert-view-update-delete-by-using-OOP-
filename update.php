<?php
    include_once "Crud.php";
    $crud = new Crud();

    if(isset($_POST['update'])){
        $student_id = $_POST['student_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $id = $_POST['id'];
        $sql = "Update info SET student_id='$student_id',name='$name',email='$email',password='$password' where id=$id";

        $result = $crud->execute($sql);

        if($result){
            // echo "data added successfully";
            header('location:show.php');
        }else{
            echo "update problem";
        }
    }
?>