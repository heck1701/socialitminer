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
	$statement = $sqllink->prepare("INSERT INTO Requests(Title,Body,DateSubmitted,OwnerID) VALUES (?, ?, ?, ?)");
	$statement->bind_param('ssss', $_POST['reqtitle'], $_POST['reqbody'], date('Y-m-d H:i:s'), $username);
	$statement->execute();
	$reqid=$statement->insert_id;
	$statement->close();
	echo "Created new request ID $reqid";
}

endif ?>
<div id="tReqs"><label id="tRequests" style="font-size:xx-large;">Top Requests</label></div>
<?php
	$query = sprintf("SELECT RequestID, Title, Body, Votes FROM Requests ORDER BY Votes DESC LIMIT 4;"); //DESC so that the post with the largest number is the first
	if($results = mysqli_query($sqllink,$query)) {
		echo '<table class="reqlist">';
		while($row = mysqli_fetch_assoc($results)){
			echo '<tr>';
			echo '<td style="font-size:x-large;">'.$row['Title'].'</td>'; // TODO - Click on the title to go to the full post
			echo '<td style="text-align: right;">Votes:&nbsp;'.$row['Votes'].'<a href="vote.php?id='.$row['RequestID'].'"><img src="img/voteup.gif" alt="Vote Up!"/></a></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td colspan="2">'.$row['Body'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	else {
		echo 'No requests';
	}
?>
<div id="rReqs"><label id="rRequests" style="font-size:xx-large;">Recent Requests</label></div>
<?php
	$query = sprintf("SELECT RequestID, Title, Body, Votes FROM Requests ORDER BY RequestID DESC LIMIT 4;"); //DESC so that the post with the largest number is the first
	if($results = mysqli_query($sqllink,$query)) {
		echo '<table class="reqlist">';
		while($row = mysqli_fetch_assoc($results)){
			echo '<tr>';
			echo '<td style="font-size:x-large;">'.$row['Title'].'</td>'; // TODO - Click on the title to go to the full post
			echo '<td style="text-align: right;">Votes:&nbsp;'.$row['Votes'].'<a href="vote.php?id='.$row['RequestID'].'"><img src="img/voteup.gif" alt="Vote Up!"/></a></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td colspan="2">'.$row['Body'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	else {
		echo 'No requests';
	}
?>
<?php include("footer.php"); ?>
