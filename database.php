<?php
 
 $host ="localhost";
 $db_user="root";
 $db_password="";
 $db_name="uol";
 $db_connection=mysqli_connect($host,$db_name,$db_email,$db_subject,$db_messege);
 if($db_connection)
 echp "<script>alert("successfully")</script>"
 {
	 
 }
 else
 {
	 echo "not connected".mysqli_connect_error();
 }
 ?>