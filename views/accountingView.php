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
  <link rel="stylesheet" href="../assets/style.css">
  <title>Users</title>
</head>

<div class="container is-fluid">

  <div class="col-xs-12 text-center">
    <h1>Welcome
      <?php echo $_SESSION['name']; ?>, Role: Accounting
    </h1>
    <br>
    <div class="container">
      <center>
        <h1>User List</h1>
      </center>
      <br>
    </div>
  </div>

  <?php include '../models/table_usersModel.php'; ?>
</div>

<br>
<br>

</body>
</table>
<div class="text-center">

  <a class="btn btn-warning" id="logout" href="../controllers/cerrarSesionController.php">Log Out
    <i class="fa fa-power-off" aria-hidden="true"></i>
  </a>

</div>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>