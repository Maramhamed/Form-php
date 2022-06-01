<form action="form.php" method="post">

<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <input type="submit" value="Submit">
</form>

<?php

// I want to check if the connection is working 
$Active= mysqli_connect('localhost','root','0000')
or die("Coudn't connect");
echo ("Connection is sucess"). "<br>";

// create Database

/*
$Create = mysqli_query($Active, "create database form1");
IF ($Create) echo "Database is created"; else echo "Database not create!"
*/

// delect database

$a0= "use form1";
$a1=mysqli_query($Active, $a0);
if($a1==true) echo "Database form1 is selected". "<br>"; else echo "No, Database is select!". "<br>";



// create table 

/*
$a2= "create table Ftable1(Fname varchar(10) primary key, Lname varchar(10) not null)";
$a3= mysqli_query($Active, $a2); 
if ($a3==true) echo "First Table is created"; else echo "Nothing is created!";
*/

// Insert  the values that come from the form..
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$insert= "insert into Ftable1(fname,lname) values('$fname','$lname')";

$a4= mysqli_query($Active,$insert);
if ($a4 == true)echo "data is inserted in the form"; else echo "data isn't insert in the tanle";

?>