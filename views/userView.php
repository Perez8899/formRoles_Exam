<?php
include '../models/validateModel.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/2a2904e725.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../assets/estilo.css">
  <link rel="stylesheet" href="../assets/es.css">
  <title>Users</title>
</head>

<div class="container is-fluid">




  <div class="col-xs-12 text-center">
    <h1>Welcome
      <?php echo $_SESSION['name']; ?>, Role: Admin
    </h1>
    <br>
    <h1>User list</h1>
    <br>
    <div>
      <a class="btn btn-success" href="indexView.php">New user
        <i class="fa fa-plus"></i> </a>
      <a class="btn btn-warning" href="../controllers/cerrarSesionController.php">Log Out
        <i class="fa fa-power-off" aria-hidden="true"></i>
      </a>

    </div>
    <br>
    <br>


    </form>

    <table class="table table-striped table-success " id="table_id">


      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Authorization</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>

        <?php

        $connection = mysqli_connect("localhost", "root", "", "examprogramroles");
        $SQL = "SELECT users.id, users.name, authorizations.description FROM users
        LEFT JOIN authorizations ON users.id_authorization = authorizations.id";
        $data = mysqli_query($connection, $SQL);

        if ($data->num_rows > 0) {
          while ($row = mysqli_fetch_array($data)) {

            ?>
            <tr>
              <td>
                <?php echo $row['id']; ?>
              </td>
              <td>
                <?php echo $row['name']; ?>
              </td>
              <td>
                <?php echo $row['description']; ?>
              </td>



              <td>


                <a class="btn btn-warning" href="edit_userView.php?id=<?php echo $row['id'] ?> ">
                  <i class="fa fa-edit"></i> </a>

                <a class="btn btn-danger" href="delete_userView.php?id=<?php echo $row['id'] ?>">
                  <i class="fa fa-trash"></i></a>

              </td>
            </tr>


            <?php
          }
        } else {

          ?>
          <tr class="text-center">
            <td colspan="16">No records</td>
          </tr>


          <?php

        }

        ?>


        </body>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8"
      src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/user.js"></script>


</html>