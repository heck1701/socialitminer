<?php
	$PostTitle = $_GET['PostTitle'];		//TODO, should be current user's username, EXTRA: username from a post or the members list too?, doesn't need to be secure so GET
?>
<?php include("header.php"); ?>
<?php
	/* TODO, the following code doesn't run for me, but should grab a post by the Title
	$query = sprintf("SELECT Title, Body FROM Posts WHERE title='%s'",$PostTitle);
	$results = mysql_query($query);
	*/
	
	echo '<table>';
		echo '<tr>';
		echo '<td style="font-size:x-large;">TITLE<td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td style="width:50em;">'."\t-\t".'BODY #'.$i." bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla......".'<td>';
		echo '</tr>';
		echo '<tr style="height:15px;"></tr>';
	
	/*	TODO - This needs to replace the above for loop
	$row = mysql_fetch_assoc($results)){
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
?>
<?php include("footer.php"); ?>