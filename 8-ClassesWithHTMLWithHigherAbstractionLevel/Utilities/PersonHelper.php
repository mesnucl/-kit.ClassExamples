<?php

class PersonHelper
{
    public function createPersonHTMLTable(array $persons):string
    {
        $htmlString = "";

        foreach ($persons as $person) {
            $htmlString .= $this->createHTMLTableRowFromPersonObject($person);
        }
        return $this->createTableWithRows($htmlString);
    }

    private function createHTMLTableRowFromPersonObject(Person $person)
    {
        return "
                <tr>
                    <td>{$person->getFirstName()}</td>
                    <td>{$person->getLastName()}</td>
                    <td>{$person->getAge()}</td>
                </tr>
        ";
    }

    private function createTableWithRows(string $personRowsString) : string
    {
        return "
            <table>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                </tr>
                {$personRowsString}
            </table>
        ";

    }



}