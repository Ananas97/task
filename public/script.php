<?php
function verifyTypeandRange($n){
    if(!is_int($n)) {
        return false;
      } else if($n < 1 || $n > 99999) {
        return false;
      }
      else return true;
}

function getResult($n) {
    $last_max=0;
    if(verifyTypeandRange($n)){
        $results[0] = 0;
        $results[1] = 1;
        if($n == 1){
            echo $results[1];
        }
        else{
        for($j=1;$j<=$n;$j++){
            $results[$j*2] = $results[$j];
            $results[$j*2 + 1] = $results[$j] +  $results[$j+1];
             if($results[$j*2] && $last_max<$results[$j*2]){
                 $last_max = $results[$j*2];
                }
                 else if($results[$j*2+1] && $last_max<$results[$j*2]){
                     $last_max = $results[$j*2 + 1];
                 }
            }
             echo $last_max;
        }
    }
}
while(true){
    echo "Type in how many test cases will there be, put in less or equal 10 " . "\n";
    fscanf(STDIN, "%d\n", $number);
    if($number > 10 || $number <= 0) {
       echo  "Type in how many test cases will there be again, The number must be less or equal 10." . "\n";
       fscanf(STDIN, "%d\n", $number);
    }
    else{
    break;
    }
}
$i = 0;
$test_cases;
$test_case_MAX = 10;
$test_case_MAX = $number;
while ($i != $test_case_MAX) {
    fscanf(STDIN, "%d\n", $test_cases[$i]);
    $i+=1;
 }

echo "Output" . "|" . "Input" . "|" . "\n" ;
for($j=0; $j< $test_case_MAX; $j++ ){
    echo "|" . $test_cases[$j] . "|" .  getResult($test_cases[$j]) . "\n";
}

?>