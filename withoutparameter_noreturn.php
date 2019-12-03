<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<form method="post" action="">
	<tr>
		<td>First</td>
		<td><input type="text" name="f1"></td>
	</tr>
	<tr>
		<td>Second</td>
		<td><input type="text" name="f2"></td>
	</tr>
	<tr>
		<td><input type="submit" name="a" value="Add"></td>
	</tr>
</form>
</table>
<?php
	if(isset($_POST["a"]))
	{
		class Zxc
		{
			function Abc()
			{
				$f1=$_POST["f1"];
				$f2=$_POST['f2'];
				echo $total=$f1+$f2;
			}
		}
		$data=new Zxc();
		$data->Abc();
		
	}

?>
</body>
</html>