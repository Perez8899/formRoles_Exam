<?php
include '../models/validateModel.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>

    <link rel="stylesheet" href="../assets/es.css">
    <link rel="stylesheet" href="../assets/styles.css">
</head>

<body id="page-top">

    <form action="../models/newUserModel.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">

                            <br>
                            <br>
                            <h3 class="text-center">New User</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Email:</label><br>
                                <input type="email" name="mail" id="mail" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Phone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>

                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="rol" class="form-label">User Role</label>
                                <input type="number" id="id_authorization" name="id_authorization" class="form-control"
                                    placeholder=" Write the role, 1 admin, 2 accounting, 3 marketing..">

                            </div>


                            <br>

                            <div class="mb-3">

                                <input type="submit" value="Save" class="btn btn-success" name="signup">
                                <a href="userView.php" class="btn btn-danger">Cancel</a>

                            </div>
                        </div>
                    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
</body>

</html>