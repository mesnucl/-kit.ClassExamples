<?php

class TeacherHelper
{
    public function createTeacherHTMLTable(array $Teachers):string
    {
        $htmlString = "";

        foreach ($Teachers as $teacher) {
            $htmlString .= $this->createHTMLTableRowFromTeacherObject($teacher);
        }
        return $this->createTableWithRows($htmlString);
    }

    private function createHTMLTableRowFromTeacherObject(Teacher $teacher)
    {
        return "
                <tr>
                    <td>{$teacher->getFirstName()}</td>
                    <td>{$teacher->getLastName()}</td>
                    <td>{$teacher->getAge()}</td>
                    <td>{$teacher->getFacultyNumber()}</td>
                </tr>
        ";
    }

    private function createTableWithRows(string $teacherRowsString) : string
    {
        return "
            <table>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                    <th>FacultyNo.</th>
                </tr>
                {$teacherRowsString}
            </table>
        ";

    }


}