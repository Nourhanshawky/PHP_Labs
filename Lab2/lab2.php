<?php 
//1-
echo nl2br("This is a new line function \n and this will print that new line :) \n"); 

// 2-
echo '<pre>';
var_dump($_SERVER);
'</pre>';

//3-
$indexedArray = array(45 , 12 , 25 , 10);
$count = count($indexedArray);
$sum = 0;
for($i=0 ; $i<$count ;$i++){
    $sum += $indexedArray[$i] ;
}
echo "<h3> The sum of indexed array is: ".$sum ."</h3>";
$avg = $sum / $count ;
echo "<h3> The average of indexed array is: ".$avg ."</h3>";

rsort($indexedArray);
echo "<h3>sort indexed array in reverse order\n</h3>";
for($i = 0; $i < 4; $i++) {
    echo "<h3>".$indexedArray[$i]."</h3>";
}

//4-
echo '**--------------Assosiative array -----------------------**';
$assosiativeArray = array("Sara"=>31 ,"John"=>41 , "Walaa"=>39 , "Ramy"=>40);

asort($assosiativeArray);
echo "<h3> sort ascending by value </h3>";
foreach($assosiativeArray as $arr1 => $value) {
    echo "<h4> Key=" . $arr1 . ", Value=" . $value. "</h4>";
}
echo '-----------------------------------------------';
ksort($assosiativeArray);
echo "<h3> sort ascending by key </h3>";
foreach($assosiativeArray as $assArr => $value) {
    echo "<h4> Key=" . $assArr . ", Value=" . $value. "</h4>";
}

echo '-----------------------------------------------';

arsort($assosiativeArray);
echo "<h3> sort descending by value </h3>";
foreach($assosiativeArray as $arr => $value) {
    echo "<h4> Key=" . $arr . ", Value=" . $value. "</h4>";
}
echo '-----------------------------------------------';

krsort($assosiativeArray);
echo "<h3> sort descending by key </h3>";
foreach($assosiativeArray as $arr2 => $value) {
    echo "<h4> Key=" . $arr2 . ", Value=" . $value. "</h4>";
}

?>