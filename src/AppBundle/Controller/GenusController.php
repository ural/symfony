<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
}