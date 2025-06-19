

<html>
 <head>
 Register page
 </head>
 <body>
 

<?php
include("config.php");

header("X-Frame-Options: DENY"); //클릭재킹방지

//POST 매개변수 접근
$a=$_POST['username'];
$b=$_POST['passwd'];
$c=$_POST['email'];
$d=$_POST['gender'];

//$query = "insert into register values('$a','$b','$c','$d')"; SQL 코드를 직접 사용하면 안됨
// Prepared Statements 만들다
$query = $db->prepare("insert into register values(?,?,?,?");
$query->bind_param("ssss", $a, $b, $c, $d);

echo "" . '<br />';

//if((mysqli_query($db, $query))==1)
if ($query->execute())
{
 echo '<h2>sucessfully registerd as </h2>'.htmlentities($a) .'<br />'; //escape chars
}
else
{
	echo '<h2>Username is taken or registration error</h2>';
}
//Step 4
$query->close();
$db->close();
?>

<a href="/index.php" >Go back </a>

</body>
</html>
