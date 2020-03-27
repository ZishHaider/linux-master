<?php
echo "PHP loaded file successfull <br><br>";

include 'dbconfig.php';

if ($db->connect_error) {
die("Connection failed:". $db->connect_error);
}

$sql = $db->query("select user,email,phone from info");

if ( $sql->num_rows > 0 ) {

echo "<table border='1'>
      <tr>
      <th>User name</th>
      <th>Email ID </th>
      <th> Phone </th>
        </tr>";

while ($row = $sql->fetch_assoc()) {
echo "<tr>";
echo "<td>" .$row['user']. "</td>";
echo "<td>" .$row['email']. "</td>";
echo "<td>" .$row['phone']. "</td>";
echo "</tr>";
        }
}else {

echo "failed to fetch data from table";

}

echo "</table>";
$db->close();
?>
