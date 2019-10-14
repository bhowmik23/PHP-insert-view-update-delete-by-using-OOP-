<?php
    include_once "Crud.php";
    $crud = new Crud();

    $id = $_GET['id'];

    $result = $crud->getData("SELECT * from info where id=$id");

    foreach($result as $res){
        $student_id = $res['student_id'];
        $name = $res['name'];
        $email = $res['email'];
        $password = $res['password'];
    }
?>

<form action="update.php" method="POST">
    <input name='id' value="<?php echo  $id;?>" type="text" hidden>
    <input name='student_id' value="<?php echo  $student_id;?>" type="text"><br>
    <input name='name' value="<?php echo  $name;?>" type="text"><br>
    <input name='email' value="<?php echo  $email;?>" type="text" ><br>
    <input name='password' value="<?php echo  $password;?>" type="text"><br>
    <input type="submit" name="update" value="Update info">
</form>