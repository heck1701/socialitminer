<?php include("header.php"); ?>

	<p style="font-size:xx-large;">Login</p> 
	<form action="LoginProcess.php" method = "post">
		<table border = "0">
			<tr>
				<td>Username:</td>
				<td align="center"><input type="text" name="UserName" size="40"/> </td>
			</tr>
			<tr>
				<td>Password:</td>
				<td align="center"><input type="text" name="Password" size="40"/> </td>		<!-- TODO add security for the login process -->
			</tr>
		</table>
		<input style="width:20em;" type="submit" value="Login"/>
	</form>
	
<?php include("footer.php"); ?>
