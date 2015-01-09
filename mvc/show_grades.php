<h2>Student Grade Summary</h2>
<table border='1'>
	<tr><th>Name</th><th>Course</th><th>Grade</th></tr>

	<?php
		foreach ($grades as $row){

			$name = $row['last'].",".$row['first'];
			$sid = $row['sid'];
			$classid = $row['classid'];
			$abbrev = $row['abbrev'];
			$grade = $row['grade'];
			$edit = "<a href='?action=edit&sid=$sid&classid$classid'>edit</a>";

			echo "<tr><td>$name</td><td>$abbrev</td><td>$grade</td><td>$edit</td></tr>";
		}
		?>
	</table>