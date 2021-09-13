<?php

	require_once("DependencyRoot.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>title</title>
</head>
	<body>
	<hr>
	<h1>Students</h1>
		<!--Student klassen har ikke en "getAsHTMLTableRow" function, Så den funktion er arvet fra "Person klassen"-->
		<?php
		$studentsHelper = new StudentHelper();

         $students = array(
            new Student("Geralt","Of rivia",date_create("1950-11-11"),"studNo1"),
            new Student("Kim","kardashian",date_create("1983-09-24"),"studNo2"),
            new Student("John","Snow",date_create("2001-01-03"),"studNo3")
        );
         echo $studentsHelper->createStudentsHTMLTable($students);
		?>
	<hr>
	<h1>Teachers</h1>
		<?php
		$teacherHelper = new TeacherHelper();

        $teachers = array(
            new Teacher("King","Arthus",date_create("1950-11-11"),"Faculty No 1"),
            new  Teacher("Limp","Bizkit",date_create("1983-09-24"),"Faculty No 2"),
            new Teacher("John","Doe",date_create("2001-01-03"),"Faculty No 3")
        );

        echo $teacherHelper->createTeacherHTMLTable($teachers);

		?>
	<h1>Persons Tables</h1>
	<h2><i>Note that both teachers and students can be used here</i></h2>
		<?php
			$personHelper = new PersonHelper();

			echo $personHelper->createPersonHTMLTable($students);
			echo "<hr>";
			echo $personHelper->createPersonHTMLTable($teachers);
		?>

	</body>
</html>