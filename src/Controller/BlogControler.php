<?php
/**
 * Created by PhpStorm.
 * User: sambare
 * Date: 17/05/18
 * Time: 13.29
 */

namespace App\Controller;


use App\Service\Greeting;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogControler extends AbstractController
{
    private $greeting;

    /**
     * BlogControler constructor.
     * @param Greeting $greeting
     */
    public function __construct(Greeting $greeting)
    {
        $this->greeting = $greeting;
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="blog_index" )
     */

    public function index(Request $request)
    {
        return $this->render("base.html.twig",["message"=> $this->greeting->greet($request->get("name"))]);
    }
}