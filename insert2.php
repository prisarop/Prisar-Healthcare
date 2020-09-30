<?php
$connection = mysqli_connect("localhost", "root", "","hospital"); // Establishing Connection with Server
if(isset($_POST['name'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$id = $_POST['id'];
$bed = $_POST['bed'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$field = $_POST['field'];
$city = $_POST['city'];
$days = $_POST['days'];
$total = $_POST['total'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysqli_query($connection,"insert into billing(name, patient_id, bed_no, email, contact_no, gender, date, specialization, city, days, total) values ('$name', '$id', '$bed', '$email', '$contact', '$gender', '$date', '$field', '$city', '$days', '$total')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>