<?php

class Student {
    private $full_name = '';
    private $score = 0;
    private $grades = array();
   
    public function __construct($full_name, $score, $grades)
    {
        $this->full_name = $full_name;
        $this->grades = $grades;
        $this->score = $score;
    }
   
    public function show()
    {
        echo $this->full_name;
    }
   
   
   
    public function __wakeup()
    {
        echo 'Esperando ...';
    }
   
}


$student = new Student('Frank Sanchez', 'a', array('a' => 90, 'b' => 100));
$student->show();

echo "<br>";

$s = serialize($student);
echo '<br>'.$s.'<br>';

?>

