<?php
/* 
Basic class example: Student_class.php 

Example of use of php class.

2019, TP

*/
class Student {
    
    private $name;
    private $age;
    private $grades;

    public function setName($n)
    {
        $this->name = $n;
    }

    public function setAge($a)
    {
        $this->age = $a;
    }

    public function setGrade($g)
    {
        $this->grades[] = $g;
    }
    
    public function getData()
    {
        return  "Opiskelija on " . $this->name . 
                "<br>Opiskelijan ikä on " .$this->age .
                "<br>Keskiarvo on " . $this->gradeAverage() . "<br>";
    }

    private function gradeAverage()
    {
        $gradeCount = count($this->grades);
        $gradeSum = 0;
        for ($i=0; $i<$gradeCount; $i++){
            $gradeSum += $this->grades[$i];
        }

        return $gradeSum / $gradeCount;


    }

    public function getGrades()
    {
        return $this->grades;
    }

}