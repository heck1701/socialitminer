<?php
include("header.php");

echo "<p style='font-size:xx-large;text-transform:uppercase;'>$dispname</p>";
	
$query = sprintf("SELECT RequestID, Title, Body, Votes FROM Requests WHERE OwnerID='$username';");
if($results = mysqli_query($sqllink,$query)) {
	echo '<table class="reqlist">';
	while($row = mysqli_fetch_assoc($results)){
		echo '<tr>';
		echo '<td style="font-size:x-large;">'.$row['Title'].'</td>'; // TODO - Click on the title to go to the full post
		echo '<td style="text-align: right;">Votes:&nbsp;'.$row['Votes'].'</td>';
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
include("footer.php");
?>