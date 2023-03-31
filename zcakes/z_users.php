<html>
<?php include_once "conn_db.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            background: linear-gradient(to right, #C77C8D, #FF8E97, #FFAC9A, #C77C8D);
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            height: 100%
        }
        .nav-link {
            color: white;
            font-size: larger;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
        }
        .nav-link:hover{
            text-shadow: 0 0 20px white;
        }
        .nav-item {
            margin-right: 30px;
        }
        .blur {
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, 0.5);
        }
        input[type=email], input[type=password], input[type=text], input[type=number] {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid black;
            color: black;
        }
        input[type=email]::placeholder, input[type=password]::placeholder, input[type=text]::placeholder, input[type=number]::placeholder {
            color: black;
        }
        table.table-bordered, table.table-bordered th, table.table-bordered td {
            color: black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent mb-3">
        <div class="container mt-3">
            <a class="navbar-brand" href="#" style="color: black; font-size: 20px; font-weight: 600; font-family: Georgia, 'Times New Roman', Times, serif;">
                <img src="images/zcakes logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top me-2">
                ZCAKES ADMINS DASHBOARD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto" style="font-weight: bolder;">
                    <li class="nav-item">
                        <a class="nav-link active" href="z_users.php">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="z_product.php">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="z_order_record.php">Order Records</a>
                    </li>
                    
                    <!-- <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#logoutModal">Log Out</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-2 blur bg-transparent border border-black mb-2" style="color: black; text-align: center;">
                <h3 class="mt-3">New Record</h3>
                <?php
                     if(isset($_GET['new_record'])){
                            switch($_GET['new_record']){
                                case "added": echo "<div class='alert alert-success'>User Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>User Not Added</div>";
                                      break;
                                        
                            }
                       }
                ?>
                <form action="z_user_record.php" method="post">
                    <div class="mb-3 mt-3">
                        <input type="text" required id="new_firstname" placeholder="Firstname" name="firstname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" required id="new_lastname" placeholder="Lastname" name="lastname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" required id="new_email" placeholder="Email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="new_username" required placeholder="Username" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="password" required id="new_password" placeholder="Password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">

                            <input type="text" placeholder="Street" name="street" class="form-control">
                            <input type="text" placeholder="City/Town" name="city" class="form-control">
                            <input type="text" placeholder="Region" name="region" class="form-control">
                            <input type="number" placeholder="Zip Code" name="zip" class="form-control">
                            <input type="text" placeholder="Country" name="country" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" required id="new_contact_number" placeholder="Contact Number" name="phone" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary float-start mt-3 mb-3">
                </form>
            </div>
            <div class="col-10 p-3 mb-2 bg-transparent border border-black blur" style="color: black;">
               <h3>Update Record</h3>
                <?php
                    $userlist = query($conn, "select user_id, email, first_name, last_name, username, password, street, city_town, region, zip_code, country ,phone from z_customers where user_status='A'");
                 // var_dump($userlist);
                    echo "<hr>";
                        if(isset($_GET['update_status'])){
                            switch($_GET['update_status']){
                                case "success": echo "<div class='alert alert-success'>User Updated.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>User Failed to be updated.</div>";
                                      break;
                                        
                            }
                        }

                        echo "<table class='table table-bordered'>";
                        echo "<thead>";
                            echo "<th>Firstname</th>";
                            echo "<th>Lastname</th>";
                            echo "<th>Username</th>";
                            echo "<th>Password</th>";
                            echo "<th>street</th>";
                            echo "<th>city/town</th>";
                            echo "<th>region</th>";
                            echo "<th>zip code</th>";
                            echo "<th>country</th>";
                            echo "<th>contact Number</th>";
                            echo "<th>Action</th>";
                            echo "<th>Action</th>";
                        echo "</thead>";
                    foreach($userlist as $key => $row){
                        echo "<tr>";
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['last_name'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['street'] . "</td>";
                            echo "<td>" . $row['city_town'] . "</td>";
                            echo "<td>" . $row['region'] . "</td>";
                            echo "<td>" . $row['zip_code'] . "</td>";
                            echo "<td>" . $row['country'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
    
                            echo "<td> <a class='btn btn-success' href='z_user_submit.php?password=" . $row['password'] . "&username=" . $row['username'] . "&firstname=" .$row['first_name'] . "&lastname=" .$row['last_name'] .  "&user_id=". $row['user_id'] . "&street=". $row['street'] . "&city=". $row['city_town'] . "&region=". $row['region'] . "&zipcode=". $row['zip_code'] . "&country=". $row['country']  . "&phone=" . $row['phone'] . "&email=" . $row['email'] . "' > Update </a> </td>";
                            echo "<td> <a class='btn btn-danger' href='z_user_delete.php?user_id=". $row['user_id'] ." ' > Delete </a> </td>";
                            echo "</tr>";
                        }
                        echo "</table>";       
                ?>
                
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>