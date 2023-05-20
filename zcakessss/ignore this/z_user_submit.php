<?php

if(isset($_GET['user_id'])){
    $user_id  = $_GET['user_id'];
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $username = $_GET['username'];
    $phone = $_GET['phone'];
    $street = $_GET['street'];
    $city = $_GET['city'];
    $region = $_GET['region'];
    $zipcode = $_GET['zipcode'];
    $country = $_GET['country'];
    }


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>submit user</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            background: linear-gradient(to bottom, #1564bf, #3dabc2, #91f2ff, #3dabc2, #1564bf);
            /* background-image: url('images/Cell_waneella.gif'); */
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            height: 100%
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1>Update User Account</h1>
                <form action="z_user_update.php" method="POST">
                    <div class="mb-3">
                       <label for="">Firstname</label>
                        <input type="text" name="firstname" value="<?php echo $firstname; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                       <label for="">Lastname</label>
                        <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                       <label for="">Email</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                       <label for="">Username</label>
                        <input type="text" hidden name="user_id" value="<?php echo $user_id; ?>" class="form-control">
                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                       <label for="">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                        <span>Address</span>
                        <br>
                            <input type="text" name="street" placeholder="Street" value="<?php echo $street; ?>" class="form-control">
                            <input type="text" name="city" placeholder="City/Town" value="<?php echo $city; ?>" class="form-control">
                            <input type="text" name="region" placeholder="Region" value="<?php echo $region; ?>" class="form-control">
                            <input type="number" name="zip" placeholder="Zip Code" value="<?php echo $zipcode; ?>" class="form-control">
                            <input type="text" name="country" placeholder="Country" value="<?php echo $country; ?>" class="form-control">
                        </div>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" value="<?php echo $address; ?>" class="form-control">
                    </div> -->
                    <div class="mb-3">
                        <label for="contac_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control">
                    </div>
                    <a class="btn btn-primary me-5" href="z_users.php">back</a>
                    <input type="submit" class="btn btn-success float-end">
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>