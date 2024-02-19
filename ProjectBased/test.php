<?php 

echo " <h1> Hello World! </h1>";
echo "<h2> I'm here </h2>";

$year = 2024;
$gpa = 3.50;
$name = "art";

$status = True ; //False

$score = [10,20,30];

echo "Name : " . $name . "<br>";
echo "Score =" . $score[0]; 

if($gpa >= 3.5){
    echo "Excellent Student";

}else if($gpa >=3.0){
    echo "Good Student";

}else{
    echo "Normal Student";
}

$total = count ($score);
for ($i=0; $i<$total; $i++){
    echo $score[$i] . "<br>";

}




?>