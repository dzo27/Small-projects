<?php 

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends AbstractController
{
	/**
 	* @Route("/", name="homepage")
 	*/
	public function indexAction(Request $request)
	{
		return $this->render('default/index.html.twig');

		//return $this->render('default/index.html.twig', ['base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'), ]);
	}

		
}
 ?>
