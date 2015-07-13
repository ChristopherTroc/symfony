<?php

namespace ctroc\demoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ctroc\demoBundle\Entity\Family;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ctrocdemoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function familyAction(){
      return $this->render('ctrocdemoBundle:Family:family.html.twig', array('family' => $this->displayFamily() ));
    }

    public function memberAction($id){
      $member = $this->getMember($id);
      return $this->render('ctrocdemoBundle:Family:member.html.twig', array('member' => $this->getMember($id) ));
    }



    //Private functions

    private function insertMember($new_member=array()){
      $member = new Family();

      $member-> setName($new_member[name]);
      $member-> setSex($new_member[sex]);
      $member-> setColor($new_member[color]);
      $member-> setBorn_date(date("Y-m-d"));

      $em = $this->getDoctrine()->getManager();
      $em->persist($member);
      $em->flush(); 

      $this->reditect($this->generateUrl('ctrocdemo_family'));
    
    }

    private function displayFamily(){
       return $this->getDoctrine()->getRepository('ctrocdemoBundle:family')->findAll();
    }

    private function getMember($id_member){
      $em = $this->getDoctrine()->getManager();

      $query = $em->createQuery('SELECT f.name, f.sex, f.color, f.bornDate, i.info 
                                 FROM ctrocdemoBundle:family f
                                 JOIN ctrocdemoBundle:Medical_info i WITH i.idFamily = f.id
                                 WHERE f.id = :id ')->setParameter('id', $id_member);
     return  $query->getSingleResult();

    }
}
