<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>



<table id="customers">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>telephone</th>
    <th>headline</th>
    <th>message</th>
  </tr>
   
  <?php 
session_start();
if($_SESSION['login']==""){
  echo "<script>window.location.href = 'exit.php';</script>";
}

else{
  echo "<h1>Welcome ".$_SESSION['login']."</h1>";
  echo "<a href='exit.php'>Exit</a>";
  echo "<br><br>";
  include 'connect.php';
  $select = "SELECT * FROM contact";
  $result = $conn->query($select);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "
      <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['tel']."</td>
        <td>".$row['headline']."</td>
        <td>".$row['message']."</td>
        </tr>
        ";
    }
  }
  else{
    echo "0 results";
  }
}
?>


  <tr>
    <td>1</td>
    <td>Alfreds Futterkiste</td>
    <td>Marianders@gmail.com</td>
    <td>555 555 55 55</td>
    <td>topic</td>
    <td>message</td>
  </tr>


</table>

</body>
</html>


