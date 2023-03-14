<?php
include '../models/validateModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="alert alert-danger text-center">
                    <p>Do you want to confirm the delete of the sig?</p>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <form action="../models/_functionsModel.php" method="POST">
                            <input type="hidden" name="action" value="delete_record">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                            <input type="submit" name="" value="Delete" class=" btn btn-danger">
                            <a href="user.php" class="btn btn-success">Cancel</a>


                    </div>
                </div>

</body>

</html>