<?php

namespace Vinlla\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vinlla\LandingBundle\Entity\Fitur;
use Vinlla\LandingBundle\Entity\Info;
use Vinlla\LandingBundle\Entity\Media;
use Vinlla\LandingBundle\Form\FiturType;
use Vinlla\LandingBundle\Form\InfoType;

use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;

class AdminController extends Controller
{
    /**
     * @Secure(roles="ROLE_ADMIN")
     */
    public function indexAction()
    {
        return $this->render('VinllaLandingBundle:Admin:index.html.twig');
    }

	public function feature_listAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        $fitur = $em->createQueryBuilder()
                    ->select('f')
                    ->from('VinllaLandingBundle:Fitur','f')
                    ->getQuery()
                    ->getResult();

        return $this->render('VinllaLandingBundle:Admin:feature_list.html.twig', array(
			'fiturs' => $fitur
		));
    }

	public function feature_addAction()
    {
        $fitur = new Fitur();
		$form = $this->createForm(new FiturType(), $fitur);
		$request = $this->getRequest();

		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($fitur);
				$em->flush();
				return $this->redirect($this->generateUrl('VinllaLandingBundle_admin_feature_list'));
			}
		}

		return $this->render('VinllaLandingBundle:Admin:feature_add.html.twig', array(
			'form' => $form->createView()
		));
    }

	public function feature_updateAction($id)
	{	
		$fitur = $this->getDoctrine()
			->getRepository('VinllaLandingBundle:Fitur')
			->find($id);
		$request = $this->getRequest();
		$form = $this->createForm(new FiturType(), $fitur);
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($fitur);
					$em->flush();
					return $this->redirect($this->generateUrl('VinllaLandingBundle_admin_feature_list'));
			}
		}

		return $this->render('VinllaLandingBundle:Admin:feature_update.html.twig', array(
			'form' => $form->createView(),
			'fitur_id' => $id
		));
	}

	public function info_listAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        $fitur = $em->createQueryBuilder()
                    ->select('i')
                    ->from('VinllaLandingBundle:Info','i')
                    ->getQuery()
                    ->getResult();

        return $this->render('VinllaLandingBundle:Admin:info_list.html.twig', array(
			'infos' => $fitur
		));
    }

	public function info_addAction()
    {
        $info = new Info();
		$form = $this->createForm(new InfoType(), $info);
		$request = $this->getRequest();

		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($info);
				$em->flush();
				return $this->redirect($this->generateUrl('VinllaLandingBundle_admin_info_list'));
			}
		}

		return $this->render('VinllaLandingBundle:Admin:info_add.html.twig', array(
			'form' => $form->createView()
		));
    }

	public function info_updateAction($id)
	{	
		$info = $this->getDoctrine()
			->getRepository('VinllaLandingBundle:Info')
			->find($id);

		$request = $this->getRequest();
		$form = $this->createForm(new InfoType(), $info);
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($info);
					$em->flush();
					return $this->redirect($this->generateUrl('VinllaLandingBundle_admin_info_list'));
			}
		}

		return $this->render('VinllaLandingBundle:Admin:info_update.html.twig', array(
			'form' => $form->createView(),
			'info_id' => $id
		));
	}

	public function media_listAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
        $media = $em->createQueryBuilder()
                    ->select('m')
                    ->from('VinllaLandingBundle:Media','m')
                    ->getQuery()
                    ->getResult();

        return $this->render('VinllaLandingBundle:Admin:media_list.html.twig', array(
			'medias' => $media
		));
    }
	public function media_addAction()
    {
		$media = new Media();
		$form = $this->createFormBuilder($media)
        ->add('name')
        ->add('file','file')
        ->getForm();

		if ($this->getRequest()->getMethod() === 'POST') {
			$form->bindRequest($this->getRequest());
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();

				$media->upload();
				$em->persist($media);
				$em->flush();

				return $this->redirect($this->generateUrl('VinllaLandingBundle_admin_media_list'));
			}
		}

		return $this->render('VinllaLandingBundle:Admin:media_add.html.twig', array(
			'form' => $form->createView()
		));
	}
}
