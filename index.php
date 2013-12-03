<?php
include("header.php");
?>
<?php if(isset($personMarkup)): ?>
<?php print "Welcome $given_name" ?>
<?php endif ?>
<div id="tReqs"><label id="tRequests" style="font-size:xx-large;">Top Requests</label><ol></ol></div>
<?php
	/* TODO, the following code doesn't run for me, but should grab posts by Rating
	$query = sprintf("SELECT Title, Body FROM Posts ORDER BY rating DESC;"); //DESC so that the post with the largest number is the first
	$results = mysql_query($query);
	*/
	
	echo '<table>';
	for($i=1;$i<4;$i++)
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
	$counter = 0;
	while($row = mysql_fetch_assoc($results)){
		echo '<tr>';
		echo '<td style="font-size:x-large;">.$row['Title'].'<td>'; // TODO - Click on the title to go to the full post
		echo '</tr>';
		echo '<tr>';
		echo '<td style="width:50em;">'."\t-\t".$row['Body'];
		echo '</tr>';
		echo '<tr style="height:15px;"></tr>';
		if($counter >= 4){
			break;
		}
		$counter++;
	}
	*/
	echo '</table>';
?>
<div id="rReqs"><label id="rRequests" style="font-size:xx-large;">Recent Requests</label><ol></ol></div>
<?php
	/* TODO
		This is the exact same code as top, but the ORDER BY is by ID
	$query = sprintf("SELECT Title, Body FROM Posts ORDER BY id DESC;"); //DESC so that the post with the largest number is the first
	$results = mysql_query($query);
	*/
	
	echo '<table>';
	for($i=1;$i<4;$i++)
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
	$counter = 0;
	while($row = mysql_fetch_assoc($results)){
		echo '<tr>';
		echo '<td style="font-size:x-large;">.$row['Title'].'<td>'; // TODO - Click on the title to go to the full post
		echo '</tr>';
		echo '<tr>';
		echo '<td style="width:50em;">'."\t-\t".$row['Body'];
		echo '</tr>';
		echo '<tr style="height:15px;"></tr>';
		if($counter >= 4){
			break;
		}
		$counter++;
	}
	*/
	echo '</table>';
?>
<?php include("footer.php"); ?>
