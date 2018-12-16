<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     *
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index(
        Environment $twig
    )
    {
        return new Response($twig->render('default/index.html.twig'));
    }

    /**
     * @Route("/show/{id}", name="show")
     *
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        return $this->render('default/show.html.twig', [
            'user' => $user,
        ]);
    }
}
