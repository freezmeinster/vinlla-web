<?php

namespace Vinlla\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vinlla\LandingBundle\Entity\Fitur;
use Vinlla\LandingBundle\Form\EnquiryType;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        $fitur = $em->createQueryBuilder()
                    ->select('f')
                    ->from('VinllaLandingBundle:Fitur','f')
                    ->getQuery()
                    ->getResult();
		
		$info = $em->createQueryBuilder()
                    ->select('i')
                    ->from('VinllaLandingBundle:Info','i')
                    ->getQuery()
                    ->getResult();

        return $this->render('VinllaLandingBundle:Default:index.html.twig',array(
			'fiturs' => $fitur,
			'infos' => $info
		));
    }
	public function featureAction($id)
    {
		$fitur = $this->getDoctrine()
			->getRepository('VinllaLandingBundle:Fitur')
			->find($id);

        return $this->render('VinllaLandingBundle:Default:feature.html.twig',array(
			'fitur' => $fitur
		));
    }
	public function downloadAction()
    {
        return $this->render('VinllaLandingBundle:Default:download.html.twig');
    }
}
