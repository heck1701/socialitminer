<?php
include("header.php");
?>
<?php if(isset($personMarkup)): ?>
<?php print "Welcome $given_name" ?>
<div id="frmReq">
	<form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<fieldset>
			<legend>Submit New Request</legend>
			<input type="text" name="reqtitle" size="50" required placeholder="Title of Request" /><br />
			<textarea name="reqbody" rows="4" cols="80" requirded placeholder="Body of Request"></textarea>
			<input type="submit" value="Submit Request..." />
		</fieldset>
	</form>
</div>
<?php
if (isset($_POST['reqtitle']) && isset($_POST['reqbody'])) {
	$statement = $sqllink->prepare("INSERT INTO Requests(Title,Body,OwnerID) VALUES (?, ?, ?)");
	$statement->bind_param('sss', $_POST['reqtitle'], $_POST['reqbody'], $username);
	$statement->execute();
	$reqid=$statement->insert_id;
	$statement->close();
	echo "Created new request ID $reqid";
}

endif ?>
<div id="tReqs"><label id="tRequests" style="font-size:xx-large;">Top Requests</label></div>
<?php
	$query = sprintf("SELECT Title, Body FROM Posts ORDER BY rating DESC LIMIT 4;"); //DESC so that the post with the largest number is the first
	if($results = mysqli_query($sqllink,$query)) {
		echo '<table>';
		while($row = mysqli_fetch_assoc($results)){
			echo '<tr>';
			echo '<td style="font-size:x-large;">'.$row['Title'].'<td>'; // TODO - Click on the title to go to the full post
			echo '</tr>';
			echo '<tr>';
			echo '<td style="width:50em;">'."\t-\t".$row['Body'];
			echo '</tr>';
			echo '<tr style="height:15px;"></tr>';
		}
		echo '</table>';
	}
	else {
		echo 'No results';
	}
?>
<div id="rReqs"><label id="rRequests" style="font-size:xx-large;">Recent Requests</label></div>
<?php
	$query = sprintf("SELECT Title, Body FROM Posts ORDER BY id DESC LIMIT 4;"); //DESC so that the post with the largest number is the first
	if($results = mysqli_query($sqllink,$query)) {
		echo '<table>';
		while($row = mysqli_fetch_assoc($results)){
			echo '<tr>';
			echo '<td style="font-size:x-large;">'.$row['Title'].'<td>'; // TODO - Click on the title to go to the full post
			echo '</tr>';
			echo '<tr>';
			echo '<td style="width:50em;">'."\t-\t".$row['Body'];
			echo '</tr>';
			echo '<tr style="height:15px;"></tr>';
		}
		echo '</table>';
	}
	else {
		echo 'No results';
	}
?>
<?php include("footer.php"); ?>
