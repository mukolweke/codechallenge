<?php

$students = readline("Number of students: ");
$grades = array();
$rounded_grades = array();
$counter = 1;

while (!is_numeric($students)) {
   echo var_export($students, true) . " is not a number \n", PHP_EOL;

   $students = readline("Number of students: ");
}

print_r("\n");

for ($counter; $counter <= $students; $counter++) {
	$grade = (readline("Enter student ". $counter ." grade:"));
	$grades['Student ' . $counter] = $grade;
	// array_push($grades, $grade);
	print_r("\n");
}

echo "Rounded Grades for the Students";

print_r(roundsGrades($grades, $students));

// print_r($rounded_grades);

function roundsGrades($grades, $students)
{
	$min_grade = 40;

	while ($students >= 1) {
		
		foreach ($grades as &$grade) {
			if ($grade < $min_grade) {
				$grades['Student 1'] = "FAILED";
			}

	    	returnGrades($grade, "PASSED", roundUpToAny($grade));
		}

		$students--;
	}

	return $grades;
}

function roundUpToAny($grade,$x=5) {
    return round(($grade+$x/2)/$x)*$x;
}

function returnGrades($grade, $msg, $rounded = null) {
	return $rounded_grades[$grade] = $msg.", ". $rounded ;
}

// print_r("\n");
// print_r($grades);

?>