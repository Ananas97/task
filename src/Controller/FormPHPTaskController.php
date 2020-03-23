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
    
        
        return $this->render("phptask/form.html.twig", array(
            'form' => $form->createView(),
        ));
    }
  
}
