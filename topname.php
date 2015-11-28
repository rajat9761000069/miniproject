<?php  
include"baby.php";
print <<<HERE
<h2 align="center"> FIELDS REQUIRED </h2>
<form align="center" id="my form" method="post">
<div>
<label for="year">Year:  </label>
<input type="text" name="year" required="required">
</div>
<div>
<label for="gender">Gender:</label>
<input type="text" name="gender" required="required">
</div>
<div>
<label for="choice">Top:   </label>
<input type="text" name="choice" required="required">
</div>
<div id="my submit">
<input type="submit" name="submit" value="submit">
</div>
</form>
HERE;

include("connection.php");
if(isset($_POST['submit']))
{
	$Year=$_POST['year'];
	$gender=$_POST['gender'];
	$choice=$_POST['choice'];
	$sql="SELECT given_name from baby WHERE year ='".$Year."' and gender ='".$gender."' and position <= ".$choice." ";
	$result=@mysql_query($sql) or die(@mysql_error());
	$numrow =@mysql_num_rows($result);
	echo " TOP: ".$numrow." ";
	
	$id=1;
	
	while($res=mysql_fetch_array($result))
	{
		echo " ";
	  echo " $id". $res["given_name"]. "<br>";
		$id++;
	}
}
?>

