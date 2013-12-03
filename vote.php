<?php
include("header.php");
if(isset($personMarkup)) {

	echo "<p style='font-size:xx-large;text-transform:uppercase;'>$dispname</p>";
	
	$query = sprintf("UPDATE Requests SET Votes = Votes + 1 WHERE RequestID='".htmlspecialchars($_GET["id"])."';");
	if($results = mysqli_query($sqllink,$query)) {
		echo 'Successfully voted!';
	}
	else {
		echo 'No vote recorded';
		//echo $query;
	}

}
else {
	echo "Not logged in!";
}

include("footer.php");
?>