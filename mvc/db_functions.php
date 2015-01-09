<?php

	function getGrades()
	{
		global $dbh;

		$sql = "SELECT student.sid,first,last,grade,class.classid,abbrev
		FROM student,grade,class
		WHERE student.sid = grade.sid
		AND grade.classid = class.classid";

		$result = $dbh->query($sql);
		return $result;
	}

	function getStudentGrade ($sid,$classid)
	{
		global $dbh;

		$sql = "SELECT student.sid,first,last,abbrev,grade
			FROM student,class,grade
			WHERE student.sid = grade.sid
			AND grade.classid = class.classid
			AND student.sid = :sid
			AND class.classid = :classid";

		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':sid',$sid,PDO::PARAM_STR);
		$stmt->bindParam(':classid',$classid);

		$stmt->execute() or die("error");
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}
	function updateGrade($sid,$classid,$grade)
	{
		global $dbh;

		$sql = "UPDATE grade SET grade = ':grade'
			WHERE sid=':sid' AND classid=':classid'";

		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':grade',$grade);
		$stmt->bindParam(':sid',$sid);
		$stmt->bindParam(':classid',$classid);

		$stmt->execute();
		
	}