<?php
//include_once 'database.php';
session_start();

$name=$_POST["name"];

echo $name;
$year=$_POST["year"];
echo $year;

$img = $_POST["img"];
echo $img;
$type_arr =" ";
 $country_arr = " ";
if(isset($_POST["type"]))
{$type=$_POST["type"];
	//$type_arr = $_POST['type'];
	
	foreach($type as $key=> $value)
	{
		$type_arr.=$value;
		$type_arr.=",";
//		echo $type_arr;
	}	
}
if(isset($_POST["P_C"]))
{
	//$type_arr = $_POST['type'];
	$country=$_POST["P_C"];
	foreach($country as $key=> $value)
	{
		$country_arr.=$value;
		$country_arr.=",";
//		echo $country_arr;
	}	
}
//echo $type_arr;
//echo $country_arr;
//$db=new PDO('mysql:host=localhost;dbname=animation;charset=utf8','root','12345678');

//$insertion =$db->prepare("INSERT INTO film(name, type, year, country, img) VALUES (:nam,:typ, :yea,:countr,:im)");
//$insertion->execute(array(":nam" => $name, ":typ" => $type_arr,":yea"=>$year,":countr"=>$country_arr,":im"=>$_img ));

// $q=mysql_query("INSERT into film (name ,type,year, country , img) VALUES
// ('$name','$type_arr' , '$year' ,'$country_arr, $img')");
// if ($q)
// {
// 	header("location:admin.php");
// }
$user = 'root';
$pass = '12345678';
$db = 'animation';
$lo='localhost';
$conn=new mysqli ('localhost', $user, $pass, $db) or die("unable to connect");


if($conn->connect_errno){
    die("ERROR: Could not connect. (" .$conn->connect_errno. ") " . $conn->connect_error);
}
$sql = "INSERT into film (name,type,year,country) VALUES('$name','$type_arr' , '$year' ,'$country_arr')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $db->close();
         
     

?>