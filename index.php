<?php
  //Create connection
  $mysqli = new mysqli("localhost", "root", "", "company");

  //Check connection
  if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
  }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
    //Get Employees
    $result = $mysqli->query("SELECT * FROM employees");
  ?>
  <h1>Employees</h1>
  <table width="500" cellpadding=5 cellspacing=5 border=1>
    <tr>
      <th>ID#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Dept</th>
      <th>Email</th>
    </tr>
    <?php while($row = $result->fetch_object()) : ?>
    <tr>
      <td><?php echo $row->id; ?></td>
      <td><?php echo $row->first_name; ?></td>
      <td><?php echo $row->last_name; ?></td>
      <td><?php echo $row->department; ?></td>
      <td><?php echo $row->email; ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>