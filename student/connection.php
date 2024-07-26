<?php

    $conn=mysqli_connect("localhost","root","","library_db");   

    if(!$conn){
        die ("Error.".mysqli_connect_error());     
    }

?>