<?php

function data_list($tablename, $column1, $column2){
    include('database.php');
    
    $sql = "SELECT * FROM $tablename";
    $query = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_assoc($query)){
        $data_id = $data[$column1];
        $data_name = $data[$column2];

        echo "<option value='$data_id'>$data_name</option>";
    }
}

?>