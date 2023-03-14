<?php
include '../models/validateModel.php';

$id = $_GET['id'];
$connection = mysqli_connect("localhost", "root", "", "examprogramroles");
$consult = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($connection, $consult);
$user = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>


    <script src="https://kit.fontawesome.com/2a2904e725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="stylesheet" href="../assets/es.css">
</head>

<body id="page-top">


    <form action="../models/_functionsModel.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">

                            <br>
                            <br>
                            <h3 class="text-center">Edit User</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="<?php echo $user['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Email:</label><br>
                                <input type="email" name="mail" id="mail" class="form-control" placeholder=""
                                    value="<?php echo $user['mail']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Phone</label>
                                <input type="tel" id="phone" name="phone" class="form-control"
                                    value="<?php echo $user['phone']; ?>" required>

                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control"
                                    value="<?php echo $user['password']; ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="rol" class="form-label">User Role</label>

                                <input type="number" id="id_authorization" name="id_authorization" class="form-control"
                                    placeholder="Write the role, 1 admin, 2 accounting, 3 marketing.."
                                    value="<?php echo $user['id_authorization']; ?>" required>

                                <input type="hidden" name="action" value="edit_record">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>

                            <br>

                            <div class="mb-3">

                                <button type="submit" class="btn btn-success">Edit</button>
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