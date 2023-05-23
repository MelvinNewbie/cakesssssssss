<?php

    // php for submiting the inputed data on the register

include_once "conn_db.php";

if(isset($_POST['username'])){
    $n_fullname=$_POST['fullname'];

    $n_email=$_POST['email'];
    $n_contact = $_POST['phone'];
    
    $n_address = $_POST['address'];


    $n_username=$_POST['username'];
    $n_password=$_POST['password'];
    
    $table = "z_user";
    $fields = array('username' => $n_username
                    , 'name' => $n_fullname

                    , 'email' => $n_email
                    , 'phone' => $n_contact
                    , 'password' => $n_password

                    , 'address' => $n_address
   
                    );
    
    if(insert($conn, $table, $fields) ){
        header("location: r_register.php?new_record=added");
        exit();
    }  
    else{
        header("location: r_register.php?new_record=failed");
        exit();
    }
}
?>