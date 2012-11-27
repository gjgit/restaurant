<?php
if( $_POST["name"])
{
	echo "Welcome ". $_POST['name']. "<br>Plz select your items<br />";

}
?>
<html>
<body>
	<center>
		<form action="postt.php" method="POST">
			<p>
				<b>Enter Your dish </b><input type="hidden" name="_check" value="1">
				<select name="dish[]" multiple="true">
					<option value="icecream" name="i">icream</option>
					<option value="rice" name="r">rice</option>
					<option value="panner" name="p">panner</option>
				</select>
			</p>

			<p>
				<b>Enter The Qunatity :</b> <select name="qu"><br></br>
					<option value="1" name="1">1</option>
					<option value="2" name="2">2</option>
					<option value="3" name="3">3</option>
					<option value="4" name="4">4</option>
				</select>
			</p>

			<p>
				<b>Enter Your Ice Flav</b><br> </br> Ven<input type="radio" value="ven" name="t"> butter<input
					type="radio" value="butter" name="t">
			</p>

			<p>
				<b>Topprings Nuts<b></b><input type="checkbox" value="nuts" name="nut"> Dry
				Nyts:<input type="checkbox" value="Dry Nuts" name="nut">
			</p>
			<p>
				<input type="submit" />
			</p>
		</form>
	</center>
</body>
</html>
