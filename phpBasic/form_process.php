<?php

    if(isset($_POST['submit'])){
       $name=$_POST['pname'];
       $email=$_POST['email'];

       echo "Name is: $name and Email is: $email";
    }

?>