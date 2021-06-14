<?php

$mysql =  new mysqli("localhost", "root", "", "usuario");
$result = $mysql -> query("select * from persona");

$result_count = $mysql -> field_count;

while($row = $result -> fetch_array()){


    for($i= 0; $i < $result_count; $i++){

       echo $html= $row[$i]."<br>";
    }


}

?>