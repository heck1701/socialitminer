<?php
	$titlesearch = $_POST['titlesearch'];	//TODO, post is not transfering the values, but the if statment's are seeing some value
	$UserSearch = $_POST['usersearch'];
	$ws = "";
?>
<?php 
include("header.php"); 
	if($titlesearch != "" || $UserSearch != ""){
		$ws .= "WHERE ";
	}
	if($titlesearch != ""){
		$ws .= "Title='$titlesearch'";
	}
	if($titlesearch != "" && $UserSearch != ""){
		$ws .= " AND ";
	}
	if($UserSearch != ""){
		$ws .= "OwnerID='$UserSearch'";
	}
	$ws .= ";"; 

	$query = sprintf("SELECT RequestID, Title, Body, Votes FROM Requests $ws");	

	if($results = mysqli_query($sqllink,$query)) {
	echo '<p style="font-size:xx-large;">Search Results</p>';
	echo '<table class="reqlist">';
	
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
	
	//mysql_free_result($results);
?>

<?php include("footer.php"); ?>
