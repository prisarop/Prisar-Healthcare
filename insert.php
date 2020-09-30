<?php
$connection = mysqli_connect("localhost", "root", "","hospital"); // Establishing Connection with Server
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['email'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$bgroup = $_POST['bgroup'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$field = $_POST['field'];
$city = $_POST['city'];
$tak = $_POST['tak'];
$medi = $_POST['medi'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query_text="insert into appointment(name, email, contact_no, blood_group, gender, date, specialization, city, taking_mediactions, medications) values ('$name', '$email', '$contact', '$bgroup', '$gender', '$date', '$field', '$city', '$tak', '$medi')";
echo $query_text."";
$query = mysqli_query($connection ,$query_text);
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>