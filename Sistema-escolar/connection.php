<?php
$connection = new mysqli("localhost","root","","Sistema_escolar");
    if($connection -> connect_error){
                       die($connection -> connect_error);
    }

?>