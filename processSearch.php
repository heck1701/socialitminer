<?php
	$titlesearch = $_POST['titlesearch'];	//TODO, post is not transfering the values, but the if statment's are seeing some value
	$UserSearch = $_POST['usersearch'];
?>
<?php include("header.php"); ?>
<?php
	if($titlesearch = ''){
		$titlesearch = '*';
	}
	if($UserSearch = ""){
		$UserSearch = '*';
	}
	$query = sprintf("SELECT Title, Body FROM posts WHERE Title='%s' AND User='%s'",	//TODO double check schema names, I couldn't accesss the DB
			 $titlesearch, 							//TODO replace with 	mysql_real_escape_string($TitleSearch),
			 $UserSearch);			   				//TODO replace with 	mysql_real_escape_string($UserSearch));
			 
	$results = true; //TODO replace with 	mysql_query($query);
	
	if(!$results){
		//TODO Add the following	 	$message  = 'Invalid query: ' . mysql_error() . "\n";
		//TODO Add the following 		$message .= 'Whole query: ' . $query;
		die($message);
	}
	echo '<p style="font-size:xx-large;">Search Results</p>';
	echo '<table>';
	for($i=1;$i<6;$i++)
	{
		echo '<tr>';
		echo '<td style="font-size:x-large;">TITLE #'.$i.'<td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td style="width:50em;">'."\t-\t".'BODY #'.$i." bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla......".'<td>';
		echo '</tr>';
		echo '<tr style="height:15px;"></tr>';
	}
	
	/*	TODO - This needs to replace the above for loop
	while($row = mysql_fetch_assoc($results)){
		echo '<tr>';
		echo '<td style="font-size:x-large;">.$row['Title'].'<td>'; // TODO - Click on the title to go to the full post
		echo '</tr>';
		echo '<tr>';
		echo '<td style="width:50em;">'."\t-\t".$row['Body'];
		echo '</tr>';
		echo '<tr style="height:15px;"></tr>';
	}
	*/
	
	echo '</table>';
	
	
	// TODO 	mysql_free_result($results);
?>

<?php include("footer.php"); ?>