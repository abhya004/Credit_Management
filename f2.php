<?php
$username = "root";
$password = "";
$database = "credit";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM users";
echo "<body style='background-color:pink'>";
echo "<b><h1> <center>List Of Users</center> </b></h1> <br> <br>";

if ($result = $mysqli->query($query)) {
  echo "<table>";
              echo "<tr>";
  // echo '<b>'."ID"." "."NAME"." "."EMAIL"." "."CREDIT".'</b><br/>';
  echo "<th>ID</th>";
                echo "<th>NAME</th>";
            echo "</tr>";
    while ($row = $result->fetch_assoc()) {



        // echo '<b>'.$field1name."  ".$field2name.'</b>'."   ".$field3name." ". $field4name.'<br />';
        // echo $field3name.'<br />';
        // echo $field4name.'<br />';
        echo "<tr>";
               echo "<td>".$row['id'].  "</td>";
               echo "<td>" . "<a href=details.php?id=$row[id]>$row[name]</a>" . "</td>";

           echo "</tr>";
       }
       echo "</table>";

/*freeresultset*/
$result->free();
}
?>
