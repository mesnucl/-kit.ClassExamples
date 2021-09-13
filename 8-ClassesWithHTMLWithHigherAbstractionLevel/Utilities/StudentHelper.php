<?php

class StudentHelper
{

    public function createStudentsHTMLTable(array $students):string
    {
        $htmlString = "";

        foreach ($students as $student) {
            $htmlString .= $this->createHTMLTableRowFromStudentObject($student);
        }
        return $this->createTableWithRows($htmlString);
    }

    private function createHTMLTableRowFromStudentObject(Student $student)
    {
        return "
                <tr>
                    <td>{$student->getFirstName()}</td>
                    <td>{$student->getLastName()}</td>
                    <td>{$student->getAge()}</td>
                    <td>{$student->getStudentNumber()}</td>
                </tr>
        ";
    }

    private function createTableWithRows(string $studentRowsString) : string
    {
        return "
            <table>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                    <th>StudentNo.</th>
                </tr>
                {$studentRowsString}
            </table>
        ";

    }
}