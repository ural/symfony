<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller {

  /**
   * @Route("/genus/{genusName}")
   */
  public function showAction ($genusName) {

    $notes = [
      'A broad three in four Americans, 75%, say they oppose enforcing federal laws against marijuana in states that have legalized medical or recreational use of the drug',
      'The latest numbers from the National Institute on Drug Abuse show that 44% of Americans over the age of 12 have used marijuana at least once in their lifetime. A majority, 52%, of people ages 18 to 25 have used it in their lifeline, including 33% in just the last 12 months.',
      'Legal pot has grown to a $6.6 billion industry, with seven in 10 dollars going for medical marijuana and three in 10 going for recreational marijuana. The overall industry has been projected to quadruple over the next decade, according to New Frontier Data, a research company that analyzes the marijuana industry.'
    ];

    return $this->render('genus/show.html.twig', array(
      'name' => $genusName,
      'notes' => $notes
    ));

/*    $templating = $this->container->get('templating');
    $html = $templating->render('genus/show.html.twig', [
      'name' => $genusName
    ]);

    return new Response($html);*/
  }

  /**
   * @Route("/genus/{genusName}/notes")
   * @Method("GET")
   */
  public function getNotesAction($genusName)
  {
    $notes = [
      ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
      ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
      ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
    ];
    $data = [
      'notes' => $notes
    ];

    return new JsonResponse($data);
  }
}