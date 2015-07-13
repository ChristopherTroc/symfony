<?php

namespace ctroc\formBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ctroc\formBundle\Entity\products;
use ctroc\formBundle\Form\productsType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ctrocformBundle:Default:index.html.twig', array('name' => $name));
    }

    public function addAction(){
        $form = $this->createForm(new productsType());
        return $this->render('ctrocformBundle:Form:add.html.twig', array("form" => $form->createView()));
    }

    public function addTwoAction(Request $request){
        $prd = new products();
        $form = $this->createForm(new productsType(), $prd);
        $form->handleRequest($request); //Get request form

        if($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($prd);
          $em->flush();

          //generate msg
          $this->get('session')->getFlashBag()->add('msg','producto agregado correctamente !');

          return $this->redirect($this->generateUrl('ctrocform_addtwo'));
        }

        return $this->render('ctrocformBundle:Form:addtwo.html.twig', array("form" => $form->createView()));
    }

}
