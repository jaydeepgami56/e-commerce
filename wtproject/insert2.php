<html>

<body>

<?php

//connect to my sql server

$link=mysql_connect('localhost','root',"");
if(!$link){die('failed to connect to server'.mysql_error());}
$db=mysql_select_db('user12e',$link);
if(!$db) {echo("enable to select db");}
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$pass=$_POST['pass'];
if(!isset($_POST['eid']))
{

}
$eid=$_POST['eid'];
$qry="INSERT INTO signup(fname,lname,pass,eid) values('$fname','$lname','$pass','$eid')";
$result=mysql_query($qry);

?>
<a href="index.html">HOME</a>
</body>
</html>