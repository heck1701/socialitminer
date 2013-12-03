<?php include("header.php"); ?>
<?php
	echo '<p style="font-size:xx-large;">Members</p>';
	echo '<table>';
	for($i = 0; $i<10; $i++)
	{
		echo '<tr>';
		for($j = 0; $j<5; $j++)
		{
		echo '<td style="width:10em">Member #'.($i*4+$j).'<td>';
		}
		echo '</tr>';
	}
	/*	the following is more query code that I cant seem to run that shoudl pull each member's username down into the table
	
	$query = sprintf("SELECT username FROM members;");		//currently will sort by ID in the database, add 'ORDER BY username' to sort alphabetically
	$results = mysql_query($query);
	$counter = 0;
	while($row = mysql_fetch_assoc($results))	//TODO replace the for loops with this, makes a 5 wide table of usernames
	{
		if($counter%5 == 0){		//triggers on 0,5,10,15...ect..
			echo '<tr>'
		}
		echo '<td>';
		echo $row['username'];		//TODO link this to a profile, a form and GET would probably be easiest
		echo '</td>';
		if($counter%5 == 4){		//triggers on 4,9,14...ect..
			echo '</tr>'
		}
		$counter++;
	}
	*/
	
	echo '</table>';
?>
<?php include("footer.php"); ?>
