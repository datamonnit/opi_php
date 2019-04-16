<?php
include('Student_class.php');

// Luodaan uusi luokan ilmentymä eli objekti/olio
$niko = new Student();
$niko->setName("Niko P"); // asetetaan nimi setName-metodilla
$niko->setAge(18); // asetetaan ikä setAge-metodilla
$niko->setGrade(5); // asetetaam arvosanoja setGrad-metodilla
$niko->setGrade(4);
$niko->setGrade(3);
$niko->setGrade(5);

// Luodaan toinen...
$roni = new Student();
$roni->setName("Roni K");
$roni->setAge(18);
$roni->setGrade(4);
$roni->setGrade(4);
$roni->setGrade(4);

echo "<p>" . $niko->getData() . "</p>";
echo "<p>arvosanat</p>";
foreach ($niko->getGrades() as $grade){
    echo $grade . "<br>";
}


echo "<p>" . $roni->getData() . "</p>";
echo "<p>arvosanat</p>";
foreach ($roni->getGrades() as $grade){
    echo $grade . "<br>";
}
