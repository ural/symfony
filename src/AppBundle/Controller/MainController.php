<?php
/**
 * Created by PhpStorm.
 * User: sevomax
 * Date: 1/9/18
 * Time: 6:40 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {
  public function homepageAction() {
    return $this->render('main/homepage.html.twig');
  }
}