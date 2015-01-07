<?php
	include 'db.php';
	include 'db_functions.php';

	//Get the action
	if(isset($_POST['action'])){
		$action = $_POST['action'];
	}
	else if(isset($_GET['action'])){
		$action	= $_GET['action'];
	}
	else{
		$action = "display";
	}

	switch ($action){
		case "edit":
		$sid = $_GET['sid'];
		$classid = $_GET['classid'];
		$gradeResult = getStudentGrade($sid,$classid);
		include'edit_grade.php';
		break;

		case "update":
			$sid = $_POST['sid'];
			$classid = $_POST['classid'];
			$grade = $_POST['grade'];
			updateGrade($sid,$classid,$grade);
			include 'success.php';
			break;

			case "display":
				$grades = getGrades();
				include 'show_grades.php';

	}
	?>