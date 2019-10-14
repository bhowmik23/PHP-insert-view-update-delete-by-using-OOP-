<a href="add.php"></a>

<?php
    include_once "Crud.php";
    $crud = new Crud();

    $result = $crud->getData("SELECT * from info order by id DESC");

    echo "<table border='1'> 
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>";
        foreach($result as $row){
            echo "<tr>
                    <td>".$row['student_id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['password']."</td>";

                    echo "<td> <a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td></tr>";
        }
    echo "</table>";
?>