<?php 
include"connection.php";
include"baby.php";
if(isset($_POST['search']))
{
$search=$_POST['search'];
$sql="SELECT * from baby WHERE given_name LIKE '".$search."%'" ;
$result=@mysql_query($sql) or die(@mysql_error());
$number =@mysql_num_rows($result);
print <<< HERE
<h2>RESULT</h2>
<h3>$search is present $number times</h3> 
<table cellpadding="15">
HERE;


while($row=@mysql_fetch_array($result))
{
     echo "id: " . $row["given_name"]. "<br>";
    
}
}
?>
<html>
<body>
 <div>
		
		                                     <form align="center" method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>
							Partial search:<input type="text" name="search" required="required" />
							<input type="submit" name="submit" value="search">
							</form>
		</div>
</body>
</html>

