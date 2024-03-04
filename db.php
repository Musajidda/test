<?php
$servername="localhost";
$username="root";
$password="Moussamj9$";
$dbname="test";

$conn=new mysqli($servername, $username,$password,$dbname);
if ($conn->connect_error) {
 die("connection field" . $conn->connect_error);
}
$name =$_POST["name"];
$email=$_POST["email"];

$sql="INSERT INTO users (name ,email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE ) {
    echo"New record is successfully created";
}else{
    echo"Connection failed" .$sql."br";
}
$sql ="SELECT * FROM users";
$result=$conn->query($sql);
if($result->num_rows >0){
echo"<table border='1' border='collapse'>
<tr>
<th> Name</th>
<th>Email</th>
</tr>";

while($row =$result->fetch_assoc()){
   echo"<tr>
   <td>" .$row["name"]."</td>;
   <td>" .$row["email"]."</td>;
   </tr>";
}
echo"</table>";
}

?>