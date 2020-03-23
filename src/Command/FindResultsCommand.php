<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class FindResultsCommand extends Command
{
    protected static $defaultName = 'app:find-results';

    protected function configure()
    {
        $this
            ->setDescription('Find the maximum element')
            ->addArgument('test_case_MAX', InputArgument::OPTIONAL, 'Pass the number of test cases, if not passed then by default it is 10')        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $test_case_MAX = $input->getArgument('test_case_MAX');

        if ($test_case_MAX) {
        } else {
            $test_case_MAX = 10;
        }

        $i = 0;
        $test_cases;
        while ($i != $test_case_MAX) {
            fscanf(STDIN, "%d\n", $test_cases[$i]);
            $i+=1;
         }
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

    echo "Output" . "|" . "Input" . "|" . "\n" ;
    for($j=0; $j< $test_case_MAX; $j++ ){
    echo "|" . $test_cases[$j] . "|" .  getResult($test_cases[$j]) . "\n";
}


        return 0;
    }
}
