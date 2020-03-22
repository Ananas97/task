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

//        $args = func_get_args();
// debug_backtrace returns arguments by reference           
// $stack = debug_backtrace();
// $args = array();
// if (isset($stack[0]["args"]))
//     for($i=0; $i < count($stack[0]["args"]); $i++)
//         $args[$i] = & $stack[0]["args"][$i];
// foreach ($argv as $arg) {
//      $e=explode("=",$arg);
//      if(count($e)== 2){
//          $_GET[$e[0]]=$e[1];
//      }
//      else   {
//          $_GET[$e[0]]=0;
//      }
//  }
// foreach ($argv as $arg){
//     getResult($arg);
// }
// $args = func_get_args();
// var_export($args);
// foreach ($argv as $arg) {
//     $e=explode("=",$arg);
//     if(count($e)==2)
//         $_GET[$e[0]]=$e[1];
//     else   
//         $_GET[$e[0]]=0;
// }
// if ($argv) {
//     foreach ($argv as $k=>$v)
//     {
//         if ($k==0) continue;
//         $it = explode("=",$k);
//         if (isset($it[1])){
//             echo $_GET[$it[0]] = $it[1];
//         } 
//     }
// }

    while ($line = fgets(STDIN)) {
        yield $line;
    }
?>