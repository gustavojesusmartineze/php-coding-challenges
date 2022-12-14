<?php
require('GradingStudents.php');

use PHPUnit\Framework\TestCase;

class GradingStudents extends TestCase
{
    public function testGradingStudents()
    {
        $grades = [84];
        $expected = [85];

        $result = gradingStudents($grades);

        $this->assertEquals($expected, $result);
    }

    public function testGradingStudentsCase1()
    {
        $grades = [29];
        $expected = [29];

        $result = gradingStudents($grades);

        $this->assertEquals($expected, $result);
    }

    public function testGradingStudentsCase2()
    {
        $grade = [57];
        $expected = [57];

        $result = gradingStudents($grade);

        $this->assertEquals($expected, $result);
    }

    public function testGradingStudentsCase3()
    {
        $grade = [73];
        $expected = [75];

        $result = gradingStudents($grade);

        $this->assertEquals($expected, $result);
    }

    public function testGradingStudentsCase4()
    {
        $grade = [73,67,38,33];
        $expected = [75,67,40,33];

        $result = gradingStudents($grade);

        $this->assertEquals($expected, $result);
    }

    public function testGradingStudentsCase5()
    {
        $grade = [84,29,57];
        $expected = [85,29,57];

        $result = gradingStudents($grade);

        $this->assertEquals($expected, $result);
    }
}

?>