

<html>
 <head>
 Register page
 </head>
 <body>
 

<?php
include("config.php");

header("X-Frame-Option: DENY")

//Step2
$a = $_POST['username'];
$b = $_POST['passwd'];
$c = $_POST['email'];
$d = $_POST['gender'];

//$query = "insert into register values('$a','$b','$c','$d')";
$query = $db->prepare("insert into register values('?','?','?','?')")
$query-> bind_param("ssss", $a, $b,$c, $d);

echo "" . '<br />';

if($quaey->execute())
{
 echo '<h2>sucessfully registerd as </h2>'.htmlentities($a).'<br />'; 
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

</script>
</body>
</html>
