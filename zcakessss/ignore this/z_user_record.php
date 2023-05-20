<?php
include_once "conn_db.php";

if(isset($_POST['username'])){
    $n_firstname=$_POST['firstname'];
    $n_lastname=$_POST['lastname'];
    $n_email=$_POST['email'];
    $n_contact = $_POST['phone'];
    
    $n_street = $_POST['street'];
    $n_city = $_POST['city'];
    $n_region = $_POST['region'];
    $n_zipcode = $_POST['zip'];
    $n_country = $_POST['country'];

    $n_username=$_POST['username'];
    $n_password=$_POST['password'];
    
    $table = "z_customers";
    $fields = array('username' => $n_username
                    , 'first_name' => $n_firstname
                    , 'last_name' => $n_lastname
                    , 'email' => $n_email
                    , 'phone' => $n_contact
                    , 'password' => $n_password

                    , 'street' => $n_street
                    , 'city_town' => $n_city
                    , 'region' => $n_region
                    , 'zip_code' => $n_zipcode
                    , 'country' => $n_country
                    );
    
    if(insert($conn, $table, $fields) ){
        header("location: z_users.php?new_record=added");
        exit();
    }  
    else{
        header("location: z_users.php?new_record=failed");
        exit();
    }
}
?>