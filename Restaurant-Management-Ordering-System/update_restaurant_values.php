<html>
<title>Update Restaurant</title>
<?php
	function update_owner_values($name,$location,$contact,$oc_time,$details)
	{	
		$dbc = mysql_connect('localhost','root','rishi');
		if(!$dbc)
			die('NOT CONNECTED:' . mysql_error());
		$db_selected = mysql_select_db("restaurant",$dbc);
		if(!$db_selected)
			die('NOT CONNECTED TO DATABASE:' . mysql_error());
		$query = "UPDATE `RESTAURANT` SET `Opening_Closing_Time`=\"$oc_time\" ,`Location`=\"$location\", 
			`Contact`=\"$contact\" , `Details` = \"$details\" where `Name`=\"$name\";";
		mysql_query($query);
	}
	update_owner_values(
		$_POST["Name"],
		$_POST["Location"],
		$_POST["Contact"],
		$_POST["Opening_Closing_Time"],
		$_POST["Details"]);
?>
<script type="text/javascript">
	function done() 
	{
		alert("Restaurant Details Updated !!!");
	}
</script>
<body  onload="done()" background = "1.png">
<meta HTTP-EQUIV="REFRESH" content="0; url=admin.html">
</html>
</body>
</html>
