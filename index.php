

<?PHP
include("dbconfig.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">App data</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM request_class";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
   

  ?>

  <tbody>
    <tr>
      <th><?php echo$row['SL']  ?> </th>
      <td><?php echo$row['Faculty_Name']  ?></td>
      <td><?php echo$row['Course_Code']  ?></td>
      <td><?php echo$row['Missed_Class_Date']  ?></td>
      <td><?php echo$row['Room_Number']  ?></td>
      <td><?php echo$row['Status']  ?></td>
     
     


    </tr>
    
  </tbody>
  <?php } ?>


</table>
<a href=""><button type="button" class="btn btn-success">ADD</button></a>
<a href=""><button type="button" class="btn btn-success">Cancel</button></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>