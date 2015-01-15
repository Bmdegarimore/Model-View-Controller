<h2>Change a Grade</h2>

<?php

	$sid = $gradeResult['sid'];
	$name = $gradeResult['last'].",".$gradeResult["first"];
	$title = $gradeResult['abbrev'];
	$grade = $gradeResult['grade'];

	echo "$sid<br>$name<br>$title<br>";

	echo "<form method='post' action=''>
			<input type='text' name='grade' size='4' value='$grade'>";
	echo "<input type='hidden' name='sid' value='$sid'>";
	echo "<input type='hidden' name='classid' value='$classid'>";
	echo "<input type='hidden' name='action' value='update'>";
	echo "<input type='submit' value='Submit' name='submit></form>";
?>