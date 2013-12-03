<?php include("header.php"); ?>

	<p style="font-size:xx-large;">Search</p> 
	<form action="processSearch.php" method = "post">
		<table border = "0">
			<tr>
				<td>Title:</td>
				<td align="center"><input type="text" name="titlesearch" id="titlesearch" size="40"/> </td>
			</tr>
			<tr>
				<td>User:</td>
				<td align="center"><input type="text" name="usersearch" size="40"/> </td>
			</tr>
		</table>
		<input style="width:20em;" type="submit" value="Search"/>
	</form>


<?php include("footer.php"); ?>
