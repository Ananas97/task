<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Forms;




class FormPHPTaskController extends AbstractController
{
    /**
     * @Route("/form/p/h/p/task", name="form_p_h_p_task")
     */
    function myAction (Request $request) {
        $data = array(
            'number' => 10,
        );
        $form = $this->createFormBuilder($data)
                     ->add('number', NumberType::class)
                     ->add('Wyszukaj', ButtonType::class)
                     ->getForm();
        
        // $form->handleRequest($request);
        // if ($form->isValid()) {
            
        //     // $data is now changed with the user input
        //     // Do something with the data
        // }
        
        return $this->render("phptask/form.html.twig", array(
            'form' => $form->createView(),
        ));
    }
    public function index()
    {
       
        // return new Response('<html><body>
        // <script>
        // function verifyTypeandRange($n){
        //     if(!is_int($n)) {
        //         return false;
        //       } else if($n < 1 || $n > 99999) {
        //         return false;
        //       }
        //       else return true;
        // }
        
        // function getResult($n) {
        //     $last_max=0;
        //     if(verifyTypeandRange($n)){
        //         $results[0] = 0;
        //         $results[1] = 1;
        //         if($n == 1){
        //             echo $results[1];
        //         }
        //         else{
        //         for($j=1;$j<=$n;$j++){
        //             $results[$j*2] = $results[$j];
        //             $results[$j*2 + 1] = $results[$j] +  $results[$j+1];
        //              if($results[$j*2] && $last_max<$results[$j*2]){
        //                  $last_max = $results[$j*2];
        //                 }
        //                  else if($results[$j*2+1] && $last_max<$results[$j*2]){
        //                      $last_max = $results[$j*2 + 1];
        //                  }
        //             }
        //              echo $last_max;
        //         }
        //     }
        // }
        // $i = 0;
        // $test_cases;
        // $test_case_MAX = 10;
        // while ($i != $test_case_MAX) {
        //     for($i=0; $i< $test_case_MAX; $i++ ){
        //             $test_cases[$i] =  document.getElementById($i).value;
        //     $i+=1;
        //     }
        //  }
        
        // echo "Output" . "|" . "Input" . "|" . "\n" ;
        // for($j=0; $j< $test_case_MAX; $j++ ){
        //     echo "|" . $test_cases[$j] . "|" .  getResult($test_cases[$j]) . "\n";
        // }
        // </script>
        // <input type="text" name="test_case" id"0" >
        // <input type="text" name="test_case" id="1">
        // <input type="text" name="test_case" id="2">
        // <input type="text" name="test_case" id="3">
        // <input type="text" name="test_case" id="4">
        // <input type="text" name="test_case" id="5">
        // <input type="text" name="test_case" id="6">
        // <input type="text" name="test_case" id="7">
        // <input type="text" name="test_case" id="8">
        // <input type="text" name="test_case" id="9">
        // <input type="button" value="SZUKAJ WARTOŚĆI" id="suma" onClick="printValues()">
        // </body></html>');

    }
  
}
