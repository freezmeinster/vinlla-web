<?php

namespace Vinlla\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vinlla\LandingBundle\Entity\Enquiry;
use Vinlla\LandingBundle\Form\EnquiryType;

class AdminController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('VinllaLandingBundle:Admin:index.html.twig');
    }

	public function feature_listAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        $fitur = $em->createQueryBuilder()
                    ->select('f')
                    ->from('VinllaLandingBundle:Enquiry','f')
                    ->getQuery()
                    ->getResult();

        return $this->render('VinllaLandingBundle:Admin:feature_list.html.twig', array(
			'fiturs' => $fitur
		));
    }

	public function feature_addAction()
    {
        $enquiry = new Enquiry();
		$form = $this->createForm(new EnquiryType(), $enquiry);
		$request = $this->getRequest();

		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($enquiry);
				$em->flush();
				return $this->redirect($this->generateUrl('VinllaLandingBundle_admin_feature_list'));
			}
		}

		return $this->render('VinllaLandingBundle:Admin:feature_add.html.twig', array(
			'form' => $form->createView()
		));
    }
}
