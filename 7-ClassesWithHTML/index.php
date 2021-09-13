<?php ini_set("memory_limit","512M")?>
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
		<table>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Date Of Birth</th>
			</tr>
		<!--Student klassen har ikke en "getAsHTMLTableRow" function, Så den funktion er arvet fra "Person klassen"-->
		<?php
        $students = array(
            new Student("Geralt","Of rivia",date_create("1950-11-11"),"studNo1"),
            new Student("Kim","kardashian",date_create("1983-09-24"),"studNo2"),
            new Student("John","Snow",date_create("2001-01-03"),"studNo3")
        );

        foreach ($students as $student)
        	echo $student->getAsHTMLTableRow();

		?>
		</table>
		<hr>
		<table>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Date of Birth</th>
				<th>Faculty number</th>
			</tr>
			<!--Teacher klassen har  en "getAsHTMLTableRow" function implementeret, Så den overskriver  funktionen i "Person klassen"-->
            <?php
            $teachers = array(
                new Teacher("King","Arthus",date_create("1950-11-11"),"Faculty No 1"),
                new  Teacher("Limp","Bizkit",date_create("1983-09-24"),"Faculty No 2"),
                new Teacher("John","Doe",date_create("2001-01-03"),"Faculty No 3")
            );

            foreach ($teachers as $teacher)
                echo $teacher->getAsHTMLTableRow();

            ?>
		</table>

	</body>
</html>