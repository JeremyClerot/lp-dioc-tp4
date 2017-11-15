<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    /**
     * @Route(
     *     path="/",
     *     name="homepage"
     * )
     */
    public function homepageAction()
    {
        // FIXME: Récupérer les utilisateurs non admin
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(User::class);
        $users = $repo->findBy(
            array('isAdmin' => 'false')
        );

        return $this->render('Homepage/homepage.html.twig', ['users' => $users]);
    }
}
